<?php
// Get the PHP helper library from https://twilio.com/docs/libraries/php
require_once '/path/to/vendor/autoload.php'; // Loads the library
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "ACc34dc91ef3e06c3ab9090d4f15f50948";
$token = "your_auth_token";
$client = new Client($sid, $token);

$client->messages->create(
    '+15558675310',
    array(
        'from' => '+15017122661',
        'body' => "This is the ship that made the Kessel Run in fourteen parsecs?"
    )
);
