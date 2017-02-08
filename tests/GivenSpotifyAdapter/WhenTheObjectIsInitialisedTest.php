<?php

namespace Tests\GivenSpotifyAdapter;
use App\Spotify\SpotifyAdapter;
use TestCase;

class WhenTheObjectIsInitialisedTest extends TestCase
{
    public function testThenTheUrlIsSetCorrectly()
    {
        $subject = $this->createMock(\App\Spotify\SpotifyAdapter::class);
        $subject->method('getUrl')->willReturn('spotifyApiUrl');

        $this->assertEquals('spotifyApiUrl', $subject->getUrl());
    }
}