<?php

namespace ChurchTools\Api2\Exception;

class GetPersonTagsUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Unauthorized', 401);
    }
}
