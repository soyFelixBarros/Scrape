<?php

use Felix\Scraper\Str;

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
		$str = $this->str->remove_multi_spaces('string1   string2');

		$this->assertEquals('string1 string2', $str);
	}

	/**
	 * Limpiar texto. 
	 */
	public function testCleanAStringOfCharacters()
	{
		$str = ' &nbsp; string1  string2 &nbsp; ';

		$str = Str::clean($str);
		
		$this->assertEquals('string1 string2', $str);
	}
}
