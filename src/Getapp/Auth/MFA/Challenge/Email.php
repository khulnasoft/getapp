<?php

namespace Getapp\Auth\MFA\Challenge;

use Getapp\Auth\MFA\Challenge;
use Getapp\Auth\MFA\Type;
use Utopia\Database\Document;

class Email extends Challenge
{
    public static function verify(Document $challenge, string $otp): bool
    {
        return $challenge->getAttribute('code') === $otp;
    }

    public static function challenge(Document $challenge, Document $user, string $otp): bool
    {
        if (
            $challenge->isSet('type') &&
            $challenge->getAttribute('type') === Type::EMAIL
        ) {
            return self::verify($challenge, $otp);
        }

        return false;
    }
}
