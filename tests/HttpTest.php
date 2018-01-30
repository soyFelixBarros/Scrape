<?php

use Felix\Scraper\Http;

class HttpTest extends PHPUnit_Framework_TestCase 
{
	protected $http;

	public function __construct()
	{
		$this->http = new Http;
	}

	public function testLinkIsOk()
	{
		$linkIsOk = $this->http->linkIsOk('http://cablera.online/');

		$this->assertTrue($linkIsOk);
	}
}
