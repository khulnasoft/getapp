<?php

namespace Getapp\GraphQL;

use Getapp\Extend\Exception as AppwriteException;
use GraphQL\Error\ClientAware;

class Exception extends AppwriteException implements ClientAware
{
    public function isClientSafe(): bool
    {
        return true;
    }

    public function getCategory(): string
    {
        return 'appwrite';
    }
}
