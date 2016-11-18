<?php
/**
 * This is a stupid php thing to pull the most recent releases
 * from qa.php.net/api.php
 */

namespace Sikofitt\PhpVersion\Entity;


use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class ReleaseInfo
 *
 * @package Sikofitt\PhpVersion\Entity
 */
class ReleaseInfo
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var int
     */
    private $number;

    /**
     * @var string
     */
    private $md5Bz2;

    /**
     * @var string
     */
    private $md5Gz;

    /**
     * @var string
     */
    private $md5Xz;

    /**
     * @var string
     */
    private $sha256Bz2;

    /**
     * @var string
     */
    private $sha256Gz;

    /**
     * @var string
     */
    private $sha256Xz;

    /**
     * @var string
     */
    private $date;

    /**
     * @var string
     */
    private $baseUrl;

    /**
     * @var string
     */
    private $version;

    /**
     * @var ArrayCollection
     */
    private $files;

    public function __construct()
    {
        $this->files = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getType() : String
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return ReleaseInfo
     */
    public function setType(String $type) : ReleaseInfo
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumber() : Int
    {
        return $this->number;
    }

    /**
     * @param int $number
     *
     * @return ReleaseInfo
     */
    public function setNumber(Int $number) : ReleaseInfo
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return string
     */
    public function getMd5Bz2() : String
    {
        return $this->md5Bz2;
    }

    /**
     * @param string $md5Bz2
     *
     * @return ReleaseInfo
     */
    public function setMd5Bz2(String $md5Bz2) : ReleaseInfo
    {
        $this->md5Bz2 = $md5Bz2;

        return $this;
    }

    /**
     * @return string
     */
    public function getMd5Gz() : String
    {
        return $this->md5Gz;
    }

    /**
     * @param string $md5Gz
     *
     * @return ReleaseInfo
     */
    public function setMd5Gz(String $md5Gz) : ReleaseInfo
    {
        $this->md5Gz = $md5Gz;

        return $this;
    }

    /**
     * @return string
     */
    public function getMd5Xz() : String
    {
        return $this->md5Xz;
    }

    /**
     * @param string $md5Xz
     *
     * @return ReleaseInfo
     */
    public function setMd5Xz(String $md5Xz)
    {
        $this->md5Xz = $md5Xz;

        return $this;
    }

    /**
     * @return string
     */
    public function getSha256Bz2() : String
    {
        return $this->sha256Bz2;
    }

    /**
     * @param string $sha256Bz2
     *
     * @return ReleaseInfo
     */
    public function setSha256Bz2(String $sha256Bz2) : ReleaseInfo
    {
        $this->sha256Bz2 = $sha256Bz2;

        return $this;
    }

    /**
     * @return string
     */
    public function getSha256Gz() : String
    {
        return $this->sha256Gz;
    }

    /**
     * @param string $sha256Gz
     *
     * @return ReleaseInfo
     */
    public function setSha256Gz(String $sha256Gz) : ReleaseInfo
    {
        $this->sha256Gz = $sha256Gz;

        return $this;
    }

    /**
     * @return string
     */
    public function getSha256Xz() : String
    {
        return $this->sha256Xz;
    }

    /**
     * @param string $sha256Xz
     *
     * @return ReleaseInfo
     */
    public function setSha256Xz(String $sha256Xz) : ReleaseInfo
    {
        $this->sha256Xz = $sha256Xz;

        return $this;
    }

    /**
     * @return string
     */
    public function getDate() : String
    {
        return $this->date;
    }

    /**
     * @param string $date
     *
     * @return ReleaseInfo
     */
    public function setDate(String $date) : ReleaseInfo
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseUrl() : String
    {
        return $this->baseUrl;
    }

    /**
     * @param string $baseUrl
     *
     * @return ReleaseInfo
     */
    public function setBaseUrl(String $baseUrl) : ReleaseInfo
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getVersion() : String
    {
        return $this->version;
    }

    /**
     * @param string $version
     *
     * @return ReleaseInfo
     */
    public function setVersion(String $version) : ReleaseInfo
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getFiles() : ArrayCollection
    {
        return $this->files;
    }

    /**
     * @param ArrayCollection $files
     *
     * @return ReleaseInfo
     */
    public function setFiles(ArrayCollection $files)
    {
        $this->files = $files;

        return $this;
    }


    /**
     * @param \Sikofitt\PhpVersion\Entity\FileInfo $file
     *
     * @return ReleaseInfo
     */
    public function addFile(FileInfo $file) : ReleaseInfo
    {
        $this->files->add($file);

        return $this;
    }

    /**
     * @param \Sikofitt\PhpVersion\Entity\FileInfo $file
     *
     * @return ReleaseInfo
     */
    public function removeFile(FileInfo $file) : ReleaseInfo
    {
        $this->files->removeElement($file);

        return $this;
    }

}