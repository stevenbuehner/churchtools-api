<?php

namespace ChurchTools\Api2\Exception;

class GetGroupByIdForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Forbidden to see group', 403);
    }
}
