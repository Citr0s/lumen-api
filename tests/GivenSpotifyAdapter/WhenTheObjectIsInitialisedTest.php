<?php

namespace Tests\GivenSpotifyAdapter;

use App\Spotify\SpotifyAdapter;
use TestCase;

class WhenTheObjectIsInitialisedTest extends TestCase
{
    protected $_subject;

    public function setUp()
    {
        $this->_subject = $this->createMock(SpotifyAdapter::class);
        $this->_subject->method('getUrl')->willReturn('spotifyApiUrl');
        $this->_subject->method('search')->willReturn('{ "artists" : { name: "someArtist" } }');
    }

    public function testThenTheUrlIsSetCorrectly()
    {
        $this->assertEquals('spotifyApiUrl', $this->_subject->getUrl());
    }

    public function testThenTheSearchReturnesValue()
    {
        $this->assertEquals('{ "artists" : { name: "someArtist" } }', $this->_subject->search('someArtist', 'artist'));
    }
}