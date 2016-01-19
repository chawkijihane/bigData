<?php
namespace BDApp\SLBundle\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Request_builder
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(name="key_words", type="string")
     */
    protected $key_words;

    /**
     * @MongoDB\Field(name="hashtags", type="string")
     */
    protected $hashtags;

    /**
     * @MongoDB\Field(name="user_opt", type="bool")
     */
    protected $users;

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
     * Set keyWords
     *
     * @param string $keyWords
     * @return self
     */
    public function setKeyWords($keyWords)
    {
        $this->key_words = $keyWords;
        return $this;
    }

    /**
     * Get keyWords
     *
     * @return string $keyWords
     */
    public function getKeyWords()
    {
        return $this->key_words;
    }

    /**
     * Set hashtags
     *
     * @param string $hashtags
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
     * @return string $hashtags
     */
    public function getHashtags()
    {
        return $this->hashtags;
    }

    /**
     * Set users
     *
     * @param bool $users
     * @return self
     */
    public function setUsers($users)
    {
        $this->users = $users;
        return $this;
    }

    /**
     * Get users
     *
     * @return bool $users
     */
    public function getUsers()
    {
        return $this->users;
    }
}
