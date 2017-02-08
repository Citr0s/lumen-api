<?php

namespace App\Http\Controllers;

use App\Common\HttpClient;
use App\Spotify\SpotifyAdapter;

class TrackController extends Controller
{
    private $api;

    public function __construct()
    {
        $this->api = new SpotifyAdapter(new HttpClient());
    }

    public function get($track)
    {
        return json_decode($this->api->search($track, 'track'));
    }
}
