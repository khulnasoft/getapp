<?php

use Getapp\Client;
use Getapp\Services\Users;

$client = new Client();

$client
    ->setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('5df5acd0d48c2') // Your project ID
    ->setKey('919c2d18fb5d4...a2ae413da83346ad2') // Your secret API key
;

$users = new Users($client);

$result = $users->deleteSessions('[USER_ID]');