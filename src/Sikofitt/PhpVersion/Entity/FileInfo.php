<?php
/**
 * This is a stupid php thing to pull the most recent releases
 * from qa.php.net/api.php
 */

namespace Sikofitt\PhpVersion\Entity;


/**
 * Class FileInfo
 *
 * @package Sikofitt\PhpVersion\Entity
 */
class FileInfo
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $path;

    /**
     * @var string
     */
    private $md5;

    /**
     * @var string
     */
    private $sha256;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return FileInfo
     */
    public function setType(string $type): FileInfo
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     *
     * @return FileInfo
     */
    public function setPath(string $path): FileInfo
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @return string
     */
    public function getMd5(): string
    {
        return $this->md5;
    }

    /**
     * @param string $md5
     *
     * @return FileInfo
     */
    public function setMd5(string $md5): FileInfo
    {
        $this->md5 = $md5;

        return $this;
    }

    /**
     * @return string
     */
    public function getSha256(): string
    {
        return $this->sha256;
    }

    /**
     * @param string $sha256
     *
     * @return FileInfo
     */
    public function setSha256(string $sha256): FileInfo
    {
        $this->sha256 = $sha256;

        return $this;
    }

}