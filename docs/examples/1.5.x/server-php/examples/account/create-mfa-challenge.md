<?php

use Getapp\Client;
use Getapp\Services\Account;
use Getapp\Enums\AuthenticationFactor;

$client = (new Client())
    ->setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('5df5acd0d48c2'); // Your project ID

$account = new Account($client);

$result = $account->createMfaChallenge(
    factor: AuthenticationFactor::EMAIL()
);