<?php

use Felix\Scraper\Url;

class UrlTest extends PHPUnit_Framework_TestCase
{
    protected $url;
    
    public function __construct()
    {
        $this->url = new Url('http://www.datachaco.com/noticias/index_seccion/Polit%C3%ADca');
    }

    /**
     * example.com = true
     * 
     * @see http://php.net/manual/es/function.parse-url.php
     */
    public function testGetPart()
    {
        $this->assertEquals('/noticias/index_seccion/Polit%C3%ADca', $this->url->part('path'));
    }

    /**
     * Url tiene un esquema.
     */
	public function testHasScheme()
	{
        $this->assertEquals(true,  $this->url->hasScheme());
    }

    /**
     * Url tiene un dominio.
     */
	public function testHasHost()
	{
        $this->assertEquals(true,  $this->url->hasHost());
    }

    /**
     * Decodificación url
     */
	public function testUrlDecode()
	{
        $this->assertEquals('http://www.datachaco.com/noticias/index_seccion/Politíca',  $this->url->decode());
    }

    /**
     * /post-title -> http://example.com/post-title
     */
    public function testNormalizeUrl()
    {
        $schemeAndHost = 'http://www.datachaco.com';

        $this->assertEquals('http://www.datachaco.com/noticias/index_seccion/Polit%C3%ADca',  $this->url->normalize($schemeAndHost));
    }
}