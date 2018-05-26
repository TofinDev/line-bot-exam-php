<?php
require "vendor/autoload.php";
$access_token = 'nUti9TekBwl7st0oLlcygSqX+B+QuBlXRBHH2q54EsAJmh94aIVfT4RpRmLDSJ9Hh7a3IQJbmLfSQ0hOlQE2KXSu9UqNFle34Ls4vQv4UfEBE8g0OKQGoGfcT0dJfffcpo/Tlygqbox33LogS/dHKQdB04t89/1O/w1cDnyilFU=';
$channelSecret = '9eeaf0ea29ba2abd871b46b8ffcd097f';
$idPush = 'U231c3056a60e6bc8876929a0e84b3b4e'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage('U7ef7a449f2a5c2057eacfc02ba2eb286', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
