<?php

use Felix\Scrape\Str;

class StrTest extends PHPUnit_Framework_TestCase 
{
	protected $str;

	public function __construct()
	{
		$this->str = new Str;
	}

	public function testRemoveSpaces()
	{
		$str = $this->str->remove_spaces(' &nbsp; string  &nbsp; ');

		$this->assertEquals('string', $str);
	}

	public function testRemoveMultiSpaces()
	{
		$str = $this->str->remove_multi_spaces('string1  string2');

		$this->assertEquals('string1 string2', $str);
	}
}
