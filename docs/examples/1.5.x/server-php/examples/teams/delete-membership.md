<?php

use Getapp\Client;
use Getapp\Services\Teams;

$client = (new Client())
    ->setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('5df5acd0d48c2') // Your project ID
    ->setSession(''); // The user session to authenticate with

$teams = new Teams($client);

$result = $teams->deleteMembership(
    teamId: '<TEAM_ID>',
    membershipId: '<MEMBERSHIP_ID>'
);