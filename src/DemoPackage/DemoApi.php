<?php

namespace DemoPackage;

use GuzzleHttp\Client;

class DemoApi
{
    function excuteApi()
    {
        $client = new Client();
        $response = $client->get('https://jsonplaceholder.typicode.com/users');

        echo $response->getBody();
    }
}
