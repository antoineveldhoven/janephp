<?php

namespace Github\Model;

class CodeSearchResultItem extends \ArrayObject
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
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $path;
    /**
     * 
     *
     * @var string
     */
    protected $sha;
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
    protected $gitUrl;
    /**
     * 
     *
     * @var string
     */
    protected $htmlUrl;
    /**
     * Minimal Repository
     *
     * @var MinimalRepository
     */
    protected $repository;
    /**
     * 
     *
     * @var int
     */
    protected $score;
    /**
     * 
     *
     * @var int
     */
    protected $fileSize;
    /**
     * 
     *
     * @var string|null
     */
    protected $language;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $lastModifiedAt;
    /**
     * 
     *
     * @var string[]
     */
    protected $lineNumbers;
    /**
     * 
     *
     * @var SearchResultTextMatchesItem[]
     */
    protected $textMatches;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * 
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSha() : string
    {
        return $this->sha;
    }
    /**
     * 
     *
     * @param string $sha
     *
     * @return self
     */
    public function setSha(string $sha) : self
    {
        $this->initialized['sha'] = true;
        $this->sha = $sha;
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
    public function getGitUrl() : string
    {
        return $this->gitUrl;
    }
    /**
     * 
     *
     * @param string $gitUrl
     *
     * @return self
     */
    public function setGitUrl(string $gitUrl) : self
    {
        $this->initialized['gitUrl'] = true;
        $this->gitUrl = $gitUrl;
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
     * Minimal Repository
     *
     * @return MinimalRepository
     */
    public function getRepository() : MinimalRepository
    {
        return $this->repository;
    }
    /**
     * Minimal Repository
     *
     * @param MinimalRepository $repository
     *
     * @return self
     */
    public function setRepository(MinimalRepository $repository) : self
    {
        $this->initialized['repository'] = true;
        $this->repository = $repository;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getScore() : int
    {
        return $this->score;
    }
    /**
     * 
     *
     * @param int $score
     *
     * @return self
     */
    public function setScore(int $score) : self
    {
        $this->initialized['score'] = true;
        $this->score = $score;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFileSize() : int
    {
        return $this->fileSize;
    }
    /**
     * 
     *
     * @param int $fileSize
     *
     * @return self
     */
    public function setFileSize(int $fileSize) : self
    {
        $this->initialized['fileSize'] = true;
        $this->fileSize = $fileSize;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLanguage() : ?string
    {
        return $this->language;
    }
    /**
     * 
     *
     * @param string|null $language
     *
     * @return self
     */
    public function setLanguage(?string $language) : self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getLastModifiedAt() : \DateTime
    {
        return $this->lastModifiedAt;
    }
    /**
     * 
     *
     * @param \DateTime $lastModifiedAt
     *
     * @return self
     */
    public function setLastModifiedAt(\DateTime $lastModifiedAt) : self
    {
        $this->initialized['lastModifiedAt'] = true;
        $this->lastModifiedAt = $lastModifiedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getLineNumbers() : array
    {
        return $this->lineNumbers;
    }
    /**
     * 
     *
     * @param string[] $lineNumbers
     *
     * @return self
     */
    public function setLineNumbers(array $lineNumbers) : self
    {
        $this->initialized['lineNumbers'] = true;
        $this->lineNumbers = $lineNumbers;
        return $this;
    }
    /**
     * 
     *
     * @return SearchResultTextMatchesItem[]
     */
    public function getTextMatches() : array
    {
        return $this->textMatches;
    }
    /**
     * 
     *
     * @param SearchResultTextMatchesItem[] $textMatches
     *
     * @return self
     */
    public function setTextMatches(array $textMatches) : self
    {
        $this->initialized['textMatches'] = true;
        $this->textMatches = $textMatches;
        return $this;
    }
}