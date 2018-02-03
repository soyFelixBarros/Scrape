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
     * /Polit%C3%ADca -> /Politíca 
     */
    public function testUrlDecode()
    {
        $path = urldecode($this->url->getPart('path'));

        $this->assertEquals('/noticias/index_seccion/Politíca', $path);
    }

    /**
     * example.com = true
     * 
     * @see http://php.net/manual/es/function.parse-url.php
     */
    public function testGetPart()
    {
        $this->assertEquals('/noticias/index_seccion/Polit%C3%ADca', $this->url->getPart('path'));
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
}