<?php

use Felix\Scraper\Url;

class UrlTest extends PHPUnit_Framework_TestCase
{
    public function testGetPart()
    {
        $url = new Url('/post-title');

        $this->assertEquals('/post-title', $url->part('path'));
    }

    public function testHasPart()
    {
        $url = new Url('//example.com');

        $this->assertEquals(false, $url->has('scheme')); // Ej. scheme, host, path, etc.
    }

    public function testUrlDecode()
    {
        $path = '/post?title=example';
        $url = new Url(urlencode($path));

        $this->assertEquals($path, $url->decode());
    }

    public function testNormalizeUrl()
    {
        $schemeAndHost = 'http://example.com';
        $url = new Url('/post-title');

        $this->assertEquals('http://example.com/post-title', $url->normalize($schemeAndHost));
    }
}
