<?php

use Getapp\Client;
use Getapp\Services\Account;

$client = (new Client())
    ->setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('5df5acd0d48c2') // Your project ID
    ->setSession(''); // The user session to authenticate with

$account = new Account($client);

$result = $account->createRecovery(
    email: 'email@example.com',
    url: 'https://example.com'
);