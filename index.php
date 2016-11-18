<?php
/**
 * This is a stupid php thing to pull the most recent releases
 * from qa.php.net/api.php
 */

require 'vendor/autoload.php';


use Doctrine\Common\Collections\ArrayCollection;
use GuzzleHttp\Client;
use Sikofitt\PhpVersion\Entity\{
  FileInfo, ReleaseInfo, VersionInfo
};
use Webmozart\Json\JsonDecoder;

$client = new Client(
  [
    'base_uri' => 'https://qa.php.net/api.php',
  ]
);


$result = $client->get(
  '',
  [
    'query' => [
      'type'   => 'qa-releases',
      'format' => 'json',
    ],
  ]
);


$contents = $result
  ->getBody()
  ->getContents();

$json = new JsonDecoder();

$decoded = $json->decode($contents);

$releases = new ArrayCollection();

foreach ($decoded as $key => $value) {

    if ('releases' === $key || 'reported' === $key) {
        continue;
    }

    $versionInfo = new VersionInfo();

    $versionInfo
      ->setActive($value->active)
      ->setDevVersion($value->dev_version)
      ->setVersion($key);

    $info = new ReleaseInfo();

    $info->setType($value->release->type)
      ->setNumber($value->release->number)
      ->setVersion(isset($value->release->version) ?? "")
      ->setMd5Bz2($value->release->md5_bz2)
      ->setMd5Gz($value->release->md5_gz)
      ->setMd5Xz($value->release->md5_xz)
      ->setSha256Bz2($value->release->sha256_bz2)
      ->setSha256Gz($value->release->sha256_gz)
      ->setSha256Xz($value->release->sha256_xz)
      ->setDate($value->release->date)
      ->setBaseUrl($value->release->baseurl);

    if (isset($value->release->files)) {
        foreach ($value->release->files as $fileKey => $fileValue) {
            $file = new FileInfo();

            $file->setType($fileKey)
              ->setMd5($fileValue->md5)
              ->setSha256($fileValue->sha256)
              ->setPath($fileValue->path);

            $info->addFile($file);
        }
    }

    $versionInfo->setRelease($info);

    $releases->set($versionInfo->getVersion(), $versionInfo);

}


$twig = new Twig_Environment(
  new Twig_Loader_Filesystem([ __DIR__])
);

$releases = $releases->filter(
  function (VersionInfo $version) {
      return 0 !== $version->getRelease()->getNumber();
  }
);
if(false === $releases->isEmpty()) {
    foreach ($releases as $release)
    {
        $twig->display('index.html.twig', ['release' => $release]);
    }
} else {
    $twig->display('index.html.twig', ['release' => null]);
}


