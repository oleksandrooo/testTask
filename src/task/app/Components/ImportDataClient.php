<?php

namespace App\Components;

use GuzzleHttp\Client;

class ImportDataClient
{
    public $client;

    /**
     * @param $client
     */
    public function __construct()
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://api.nasa.gov/neo/rest/v1/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
            'verify' => false
        ]);
    }


}
