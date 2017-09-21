<?php

use Felix\Scrape\Url;

class UrlTest extends PHPUnit_Framework_TestCase 
{
	protected $url;

	public function __construct()
	{
		$this->url = new Url;
	}

	public function testGetHost()
	{
		$host = $this->url->getHost('http://www.cablera.online/');
		
		$this->assertEquals('www.cablera.online', $host);
	}
}
