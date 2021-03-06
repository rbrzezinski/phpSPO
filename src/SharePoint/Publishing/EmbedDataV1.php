<?php

/**
 * Updated By PHP Office365 Generator 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Publishing;

use Office365\Runtime\ClientObject;


class EmbedDataV1 extends ClientObject
{
    /**
     * @return bool
     */
    public function getAllowHttpsEmbed()
    {
        if (!$this->isPropertyAvailable("AllowHttpsEmbed")) {
            return null;
        }
        return $this->getProperty("AllowHttpsEmbed");
    }
    /**
     * @var bool
     */
    public function setAllowHttpsEmbed($value)
    {
        $this->setProperty("AllowHttpsEmbed", $value, true);
    }
    /**
     * @return string
     */
    public function getCreatorName()
    {
        if (!$this->isPropertyAvailable("CreatorName")) {
            return null;
        }
        return $this->getProperty("CreatorName");
    }
    /**
     * @var string
     */
    public function setCreatorName($value)
    {
        $this->setProperty("CreatorName", $value, true);
    }
    /**
     * @return string
     */
    public function getDatePublishedAt()
    {
        if (!$this->isPropertyAvailable("DatePublishedAt")) {
            return null;
        }
        return $this->getProperty("DatePublishedAt");
    }
    /**
     * @var string
     */
    public function setDatePublishedAt($value)
    {
        $this->setProperty("DatePublishedAt", $value, true);
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        if (!$this->isPropertyAvailable("Description")) {
            return null;
        }
        return $this->getProperty("Description");
    }
    /**
     * @var string
     */
    public function setDescription($value)
    {
        $this->setProperty("Description", $value, true);
    }
    /**
     * @return integer
     */
    public function getEmbedServiceResponseCode()
    {
        if (!$this->isPropertyAvailable("EmbedServiceResponseCode")) {
            return null;
        }
        return $this->getProperty("EmbedServiceResponseCode");
    }
    /**
     * @var integer
     */
    public function setEmbedServiceResponseCode($value)
    {
        $this->setProperty("EmbedServiceResponseCode", $value, true);
    }
    /**
     * @return string
     */
    public function getErrorMessage()
    {
        if (!$this->isPropertyAvailable("ErrorMessage")) {
            return null;
        }
        return $this->getProperty("ErrorMessage");
    }
    /**
     * @var string
     */
    public function setErrorMessage($value)
    {
        $this->setProperty("ErrorMessage", $value, true);
    }
    /**
     * @return string
     */
    public function getHtml()
    {
        if (!$this->isPropertyAvailable("Html")) {
            return null;
        }
        return $this->getProperty("Html");
    }
    /**
     * @var string
     */
    public function setHtml($value)
    {
        $this->setProperty("Html", $value, true);
    }
    /**
     * @return string
     */
    public function getListId()
    {
        if (!$this->isPropertyAvailable("ListId")) {
            return null;
        }
        return $this->getProperty("ListId");
    }
    /**
     * @var string
     */
    public function setListId($value)
    {
        $this->setProperty("ListId", $value, true);
    }
    /**
     * @return string
     */
    public function getPublisherName()
    {
        if (!$this->isPropertyAvailable("PublisherName")) {
            return null;
        }
        return $this->getProperty("PublisherName");
    }
    /**
     * @var string
     */
    public function setPublisherName($value)
    {
        $this->setProperty("PublisherName", $value, true);
    }
    /**
     * @return integer
     */
    public function getResponseCode()
    {
        if (!$this->isPropertyAvailable("ResponseCode")) {
            return null;
        }
        return $this->getProperty("ResponseCode");
    }
    /**
     * @var integer
     */
    public function setResponseCode($value)
    {
        $this->setProperty("ResponseCode", $value, true);
    }
    /**
     * @return string
     */
    public function getSiteId()
    {
        if (!$this->isPropertyAvailable("SiteId")) {
            return null;
        }
        return $this->getProperty("SiteId");
    }
    /**
     * @var string
     */
    public function setSiteId($value)
    {
        $this->setProperty("SiteId", $value, true);
    }
    /**
     * @return string
     */
    public function getThumbnailUrl()
    {
        if (!$this->isPropertyAvailable("ThumbnailUrl")) {
            return null;
        }
        return $this->getProperty("ThumbnailUrl");
    }
    /**
     * @var string
     */
    public function setThumbnailUrl($value)
    {
        $this->setProperty("ThumbnailUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getTitle()
    {
        if (!$this->isPropertyAvailable("Title")) {
            return null;
        }
        return $this->getProperty("Title");
    }
    /**
     * @var string
     */
    public function setTitle($value)
    {
        $this->setProperty("Title", $value, true);
    }
    /**
     * @return string
     */
    public function getType()
    {
        if (!$this->isPropertyAvailable("Type")) {
            return null;
        }
        return $this->getProperty("Type");
    }
    /**
     * @var string
     */
    public function setType($value)
    {
        $this->setProperty("Type", $value, true);
    }
    /**
     * @return string
     */
    public function getUniqueId()
    {
        if (!$this->isPropertyAvailable("UniqueId")) {
            return null;
        }
        return $this->getProperty("UniqueId");
    }
    /**
     * @var string
     */
    public function setUniqueId($value)
    {
        $this->setProperty("UniqueId", $value, true);
    }
    /**
     * @return string
     */
    public function getUrl()
    {
        if (!$this->isPropertyAvailable("Url")) {
            return null;
        }
        return $this->getProperty("Url");
    }
    /**
     * @var string
     */
    public function setUrl($value)
    {
        $this->setProperty("Url", $value, true);
    }
    /**
     * @return string
     */
    public function getVideoId()
    {
        if (!$this->isPropertyAvailable("VideoId")) {
            return null;
        }
        return $this->getProperty("VideoId");
    }
    /**
     * @var string
     */
    public function setVideoId($value)
    {
        $this->setProperty("VideoId", $value, true);
    }
    /**
     * @return string
     */
    public function getWebId()
    {
        if (!$this->isPropertyAvailable("WebId")) {
            return null;
        }
        return $this->getProperty("WebId");
    }
    /**
     * @var string
     */
    public function setWebId($value)
    {
        $this->setProperty("WebId", $value, true);
    }
}
