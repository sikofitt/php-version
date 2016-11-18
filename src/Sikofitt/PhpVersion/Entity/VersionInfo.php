<?php
/**
 * This is a stupid php thing to pull the most recent releases
 * from qa.php.net/api.php
 */

namespace Sikofitt\PhpVersion\Entity;


/**
 * Class VersionInfo
 *
 * @package Sikofitt\PhpVersion\Entity
 */
class VersionInfo
{
    /**
     * @var string
     */
    private $version;

    /**
     * @var bool
     */
    private $active = false;

    /**
     * @var ReleaseInfo
     */
    private $release;

    /**
     * @var string
     */
    private $devVersion;


    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     *
     * @return VersionInfo
     */
    public function setVersion(string $version): VersionInfo
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     *
     * @return VersionInfo
     */
    public function setActive(bool $active): VersionInfo
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return ReleaseInfo
     */
    public function getRelease(): ReleaseInfo
    {
        return $this->release;
    }

    /**
     * @param ReleaseInfo $release
     *
     * @return VersionInfo
     */
    public function setRelease(ReleaseInfo $release): VersionInfo
    {
        $this->release = $release;

        return $this;
    }

    /**
     * @return string
     */
    public function getDevVersion(): string
    {
        return $this->devVersion;
    }

    /**
     * @param string $devVersion
     *
     * @return VersionInfo
     */
    public function setDevVersion(string $devVersion): VersionInfo
    {
        $this->devVersion = $devVersion;

        return $this;
    }


}