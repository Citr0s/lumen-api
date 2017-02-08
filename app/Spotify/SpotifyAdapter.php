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
        return $this->httpClient->send($this->url . '/v1/search?q=' . $query . '&type=' . $type, "");
    }

    public function getUrl()
    {
        return $this->url;
    }
}