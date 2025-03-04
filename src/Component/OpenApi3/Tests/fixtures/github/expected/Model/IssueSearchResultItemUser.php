<?php

namespace Github\Model;

class IssueSearchResultItemUser extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $login;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $nodeId;
    /**
     * 
     *
     * @var string
     */
    protected $avatarUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $gravatarId;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $htmlUrl;
    /**
     * 
     *
     * @var string
     */
    protected $followersUrl;
    /**
     * 
     *
     * @var string
     */
    protected $followingUrl;
    /**
     * 
     *
     * @var string
     */
    protected $gistsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $starredUrl;
    /**
     * 
     *
     * @var string
     */
    protected $subscriptionsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $organizationsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $reposUrl;
    /**
     * 
     *
     * @var string
     */
    protected $eventsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $receivedEventsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var bool
     */
    protected $siteAdmin;
    /**
     * 
     *
     * @var string
     */
    protected $starredAt;
    /**
     * 
     *
     * @return string
     */
    public function getLogin() : string
    {
        return $this->login;
    }
    /**
     * 
     *
     * @param string $login
     *
     * @return self
     */
    public function setLogin(string $login) : self
    {
        $this->initialized['login'] = true;
        $this->login = $login;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNodeId() : string
    {
        return $this->nodeId;
    }
    /**
     * 
     *
     * @param string $nodeId
     *
     * @return self
     */
    public function setNodeId(string $nodeId) : self
    {
        $this->initialized['nodeId'] = true;
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAvatarUrl() : string
    {
        return $this->avatarUrl;
    }
    /**
     * 
     *
     * @param string $avatarUrl
     *
     * @return self
     */
    public function setAvatarUrl(string $avatarUrl) : self
    {
        $this->initialized['avatarUrl'] = true;
        $this->avatarUrl = $avatarUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGravatarId() : ?string
    {
        return $this->gravatarId;
    }
    /**
     * 
     *
     * @param string|null $gravatarId
     *
     * @return self
     */
    public function setGravatarId(?string $gravatarId) : self
    {
        $this->initialized['gravatarId'] = true;
        $this->gravatarId = $gravatarId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHtmlUrl() : string
    {
        return $this->htmlUrl;
    }
    /**
     * 
     *
     * @param string $htmlUrl
     *
     * @return self
     */
    public function setHtmlUrl(string $htmlUrl) : self
    {
        $this->initialized['htmlUrl'] = true;
        $this->htmlUrl = $htmlUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFollowersUrl() : string
    {
        return $this->followersUrl;
    }
    /**
     * 
     *
     * @param string $followersUrl
     *
     * @return self
     */
    public function setFollowersUrl(string $followersUrl) : self
    {
        $this->initialized['followersUrl'] = true;
        $this->followersUrl = $followersUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFollowingUrl() : string
    {
        return $this->followingUrl;
    }
    /**
     * 
     *
     * @param string $followingUrl
     *
     * @return self
     */
    public function setFollowingUrl(string $followingUrl) : self
    {
        $this->initialized['followingUrl'] = true;
        $this->followingUrl = $followingUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGistsUrl() : string
    {
        return $this->gistsUrl;
    }
    /**
     * 
     *
     * @param string $gistsUrl
     *
     * @return self
     */
    public function setGistsUrl(string $gistsUrl) : self
    {
        $this->initialized['gistsUrl'] = true;
        $this->gistsUrl = $gistsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStarredUrl() : string
    {
        return $this->starredUrl;
    }
    /**
     * 
     *
     * @param string $starredUrl
     *
     * @return self
     */
    public function setStarredUrl(string $starredUrl) : self
    {
        $this->initialized['starredUrl'] = true;
        $this->starredUrl = $starredUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSubscriptionsUrl() : string
    {
        return $this->subscriptionsUrl;
    }
    /**
     * 
     *
     * @param string $subscriptionsUrl
     *
     * @return self
     */
    public function setSubscriptionsUrl(string $subscriptionsUrl) : self
    {
        $this->initialized['subscriptionsUrl'] = true;
        $this->subscriptionsUrl = $subscriptionsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrganizationsUrl() : string
    {
        return $this->organizationsUrl;
    }
    /**
     * 
     *
     * @param string $organizationsUrl
     *
     * @return self
     */
    public function setOrganizationsUrl(string $organizationsUrl) : self
    {
        $this->initialized['organizationsUrl'] = true;
        $this->organizationsUrl = $organizationsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReposUrl() : string
    {
        return $this->reposUrl;
    }
    /**
     * 
     *
     * @param string $reposUrl
     *
     * @return self
     */
    public function setReposUrl(string $reposUrl) : self
    {
        $this->initialized['reposUrl'] = true;
        $this->reposUrl = $reposUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEventsUrl() : string
    {
        return $this->eventsUrl;
    }
    /**
     * 
     *
     * @param string $eventsUrl
     *
     * @return self
     */
    public function setEventsUrl(string $eventsUrl) : self
    {
        $this->initialized['eventsUrl'] = true;
        $this->eventsUrl = $eventsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReceivedEventsUrl() : string
    {
        return $this->receivedEventsUrl;
    }
    /**
     * 
     *
     * @param string $receivedEventsUrl
     *
     * @return self
     */
    public function setReceivedEventsUrl(string $receivedEventsUrl) : self
    {
        $this->initialized['receivedEventsUrl'] = true;
        $this->receivedEventsUrl = $receivedEventsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSiteAdmin() : bool
    {
        return $this->siteAdmin;
    }
    /**
     * 
     *
     * @param bool $siteAdmin
     *
     * @return self
     */
    public function setSiteAdmin(bool $siteAdmin) : self
    {
        $this->initialized['siteAdmin'] = true;
        $this->siteAdmin = $siteAdmin;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStarredAt() : string
    {
        return $this->starredAt;
    }
    /**
     * 
     *
     * @param string $starredAt
     *
     * @return self
     */
    public function setStarredAt(string $starredAt) : self
    {
        $this->initialized['starredAt'] = true;
        $this->starredAt = $starredAt;
        return $this;
    }
}