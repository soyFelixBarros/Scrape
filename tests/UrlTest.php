<?php

use Felix\Scraper\Url;

class UrlTest extends PHPUnit_Framework_TestCase
{
    /**
     * example.com = true
     * 
     * @see http://php.net/manual/es/function.parse-url.php
     */
    public function testGetPart()
    {
        $url = new Url('/post-title');

        $this->assertEquals('/post-title', $url->part('path'));
    }

    /**
     * Url tiene una parte.
     */
	public function testHasPart()
	{
        $url = new Url('//example.com');

        $this->assertEquals(false, $url->has('scheme')); // Ej. scheme, host, path, etc.
    }

    /**
     * Decodificación url
     */
	public function testUrlDecode()
	{
        $path = '/post?title=example';
        $url = new Url(urlencode($path));

        $this->assertEquals($path,  $url->decode());
    }

    /**
     * /post-title -> http://example.com/post-title
     */
    public function testNormalizeUrl()
    {
        $schemeAndHost = 'http://example.com';
        $url = new Url('/post-title');

        $this->assertEquals('http://example.com/post-title',  $url->normalize($schemeAndHost));
    }
}