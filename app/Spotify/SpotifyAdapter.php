<?php

namespace App\Spotify;

class SpotifyAdapter
{
    public $url;
    public $httpClient;

    public function __construct($httpClient)
    {
        $this->url = 'https://api.spotify.com';
        $this->httpClient = $httpClient;
    }

    public function search($query, $type)
    {
        return $this->httpClient($this->url . '/v1/search?q='. $query . '&type=' . $type, HTTP_METH_GET)->send();
    }

    public function getUrl()
    {
        return $this->url;
    }
}