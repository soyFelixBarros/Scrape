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

	public function testSimilarStr()
	{
		$int = $this->helpers->similar_str('string1', 'string2');

		$this->assertEquals(0, $int);
	}
}
