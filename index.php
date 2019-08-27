<?php

require 'vendor/autoload.php';

$url = 'https://google.com/api.php';
$params = [
            'action' => '',
        ];

$client = new \GuzzleHttp\Client();
$response = $client->request('POST', $url,[
  'form_params' => $params
]);

echo "<pre>";
print_r($response->getBody()->getContents());
die();

 ?>
