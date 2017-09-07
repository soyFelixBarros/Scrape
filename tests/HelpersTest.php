<?php

use Felix\Scrape\Helpers;

class HelpersTest extends PHPUnit_Framework_TestCase 
{
	protected $helpers;

	public function __construct()
	{
		$this->helpers = new Helpers;
	}

	public function testClearText()
	{
		$str = $this->helpers->clear_text(' string &nbsp; ');

		$this->assertEquals('string', $str);
	}
}
