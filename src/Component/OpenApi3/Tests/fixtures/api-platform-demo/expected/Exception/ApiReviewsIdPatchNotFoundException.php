<?php

namespace ApiPlatform\Demo\Exception;

class ApiReviewsIdPatchNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}