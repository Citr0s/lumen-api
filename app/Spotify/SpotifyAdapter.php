<?php

namespace App\Spotify;

class SpotifyAdapter
{
    public $url;

    public function __construct()
    {
        $this->url = 'https://api.spotify.com';
    }

    public function getUrl()
    {
        return $this->url;
    }
}