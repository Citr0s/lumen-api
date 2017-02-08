<?php

namespace App\Http\Controllers;

use App\Common\HttpClient;
use App\Spotify\SpotifyAdapter;

class ArtistController extends Controller
{
    private $api;

    public function __construct()
    {
        $this->api = new SpotifyAdapter(new HttpClient());
    }

    public function get($artist)
    {
        return json_decode($this->api->search($artist, 'artist'));
    }
}
