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
     * Url tiene un esquema.
     */
	public function testHasScheme()
	{
        $url = new Url('//example.com');

        $this->assertEquals(false, $url->hasScheme());
    }

    /**
     * Url tiene un dominio.
     */
	public function testHasHost()
	{
        $url = new Url('/post-title');

        $this->assertEquals(false, $url->hasHost());
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