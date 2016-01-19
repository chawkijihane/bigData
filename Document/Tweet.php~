<?php
namespace BDApp\SLBundle\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Tweet
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(name="create_at", type="date")
     */
    protected $create_at;

    /**
     * @MongoDB\Field(name="text", type="string")
     */
    protected $text;

    /**
     * @MongoDB\Field(name="retweet_count", type="int")
     */
    protected $retweet_count;

    /**
     * @MongoDB\Field(name="favorite_count", type="int")
     */
    protected $favorite_count;

    /**
     * @MongoDB\Field(name="geo", type="string")
     */
    protected $geo;

    /**
     * @MongoDB\Field(name="id_str", type="string")
     */
    protected $id_str;

    /**
     * @MongoDB\Field(name="coordonates", type="string")
     */
    protected $coordonates;

    /**
     * @MongoDB\Field(name="place", type="string")
     */
    protected $place;

    /**
     * @MongoDB\Field(name="user_sreen_name", type="string")
     */
    protected $user_sreen_name;

    /**
     * @MongoDB\Field(name="user_name", type="string")
     */
    protected $user_name;

    /**
     * @MongoDB\Field(name="user_location", type="string")
     */
    protected $user_location;

    /**
     * @MongoDB\Field(name="tags", type="collection")
     */
    protected $hashtags;

  
    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set createAt
     *
     * @param date $createAt
     * @return self
     */
    public function setCreateAt($createAt)
    {
        $this->create_at = $createAt;
        return $this;
    }

    /**
     * Get createAt
     *
     * @return date $createAt
     */
    public function getCreateAt()
    {
        return $this->create_at;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Get text
     *
     * @return string $text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set retweetCount
     *
     * @param int $retweetCount
     * @return self
     */
    public function setRetweetCount($retweetCount)
    {
        $this->retweet_count = $retweetCount;
        return $this;
    }

    /**
     * Get retweetCount
     *
     * @return int $retweetCount
     */
    public function getRetweetCount()
    {
        return $this->retweet_count;
    }

    /**
     * Set favoriteCount
     *
     * @param int $favoriteCount
     * @return self
     */
    public function setFavoriteCount($favoriteCount)
    {
        $this->favorite_count = $favoriteCount;
        return $this;
    }

    /**
     * Get favoriteCount
     *
     * @return int $favoriteCount
     */
    public function getFavoriteCount()
    {
        return $this->favorite_count;
    }

    /**
     * Set geo
     *
     * @param string $geo
     * @return self
     */
    public function setGeo($geo)
    {
        $this->geo = $geo;
        return $this;
    }

    /**
     * Get geo
     *
     * @return string $geo
     */
    public function getGeo()
    {
        return $this->geo;
    }

    /**
     * Set idStr
     *
     * @param string $idStr
     * @return self
     */
    public function setIdStr($idStr)
    {
        $this->id_str = $idStr;
        return $this;
    }

    /**
     * Get idStr
     *
     * @return string $idStr
     */
    public function getIdStr()
    {
        return $this->id_str;
    }

    /**
     * Set coordonates
     *
     * @param string $coordonates
     * @return self
     */
    public function setCoordonates($coordonates)
    {
        $this->coordonates = $coordonates;
        return $this;
    }

    /**
     * Get coordonates
     *
     * @return string $coordonates
     */
    public function getCoordonates()
    {
        return $this->coordonates;
    }

    /**
     * Set place
     *
     * @param string $place
     * @return self
     */
    public function setPlace($place)
    {
        $this->place = $place;
        return $this;
    }

    /**
     * Get place
     *
     * @return string $place
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set userSreenName
     *
     * @param string $userSreenName
     * @return self
     */
    public function setUserSreenName($userSreenName)
    {
        $this->user_sreen_name = $userSreenName;
        return $this;
    }

    /**
     * Get userSreenName
     *
     * @return string $userSreenName
     */
    public function getUserSreenName()
    {
        return $this->user_sreen_name;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * @return self
     */
    public function setUserName($userName)
    {
        $this->user_name = $userName;
        return $this;
    }

    /**
     * Get userName
     *
     * @return string $userName
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * Set userLocation
     *
     * @param string $userLocation
     * @return self
     */
    public function setUserLocation($userLocation)
    {
        $this->user_location = $userLocation;
        return $this;
    }

    /**
     * Get userLocation
     *
     * @return string $userLocation
     */
    public function getUserLocation()
    {
        return $this->user_location;
    }

    /**
     * Set hashtags
     *
     * @param collection $hashtags
     * @return self
     */
    public function setHashtags($hashtags)
    {
        $this->hashtags = $hashtags;
        return $this;
    }

    /**
     * Get hashtags
     *
     * @return collection $hashtags
     */
    public function getHashtags()
    {
        return $this->hashtags;
    }
}
