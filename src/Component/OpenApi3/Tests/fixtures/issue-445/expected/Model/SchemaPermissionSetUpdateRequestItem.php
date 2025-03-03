<?php

namespace PicturePark\API\Model;

class SchemaPermissionSetUpdateRequestItem extends \ArrayObject
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
     * Language specific permission set names.
     *
     * @var mixed
     */
    protected $names;
    /**
     * A list of content or metadata rights authorizing operations on Content Items or List Items.
     *
     * @var UserRoleRightsOfMetadataRight[]|null
     */
    protected $userRolesRights;
    /**
     * A list of permission set rights authorizing operations on this permission set.
     *
     * @var UserRoleRightsOfPermissionSetRight[]|null
     */
    protected $userRolesPermissionSetRights;
    /**
     * The permission set ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Language specific permission set names.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific permission set names.
     *
     * @param mixed $names
     *
     * @return self
     */
    public function setNames($names) : self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
    /**
     * A list of content or metadata rights authorizing operations on Content Items or List Items.
     *
     * @return UserRoleRightsOfMetadataRight[]|null
     */
    public function getUserRolesRights() : ?array
    {
        return $this->userRolesRights;
    }
    /**
     * A list of content or metadata rights authorizing operations on Content Items or List Items.
     *
     * @param UserRoleRightsOfMetadataRight[]|null $userRolesRights
     *
     * @return self
     */
    public function setUserRolesRights(?array $userRolesRights) : self
    {
        $this->initialized['userRolesRights'] = true;
        $this->userRolesRights = $userRolesRights;
        return $this;
    }
    /**
     * A list of permission set rights authorizing operations on this permission set.
     *
     * @return UserRoleRightsOfPermissionSetRight[]|null
     */
    public function getUserRolesPermissionSetRights() : ?array
    {
        return $this->userRolesPermissionSetRights;
    }
    /**
     * A list of permission set rights authorizing operations on this permission set.
     *
     * @param UserRoleRightsOfPermissionSetRight[]|null $userRolesPermissionSetRights
     *
     * @return self
     */
    public function setUserRolesPermissionSetRights(?array $userRolesPermissionSetRights) : self
    {
        $this->initialized['userRolesPermissionSetRights'] = true;
        $this->userRolesPermissionSetRights = $userRolesPermissionSetRights;
        return $this;
    }
    /**
     * The permission set ID.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The permission set ID.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
}