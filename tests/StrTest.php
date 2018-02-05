<?php

use Felix\Scraper\Str;

class StrTest extends PHPUnit_Framework_TestCase
{
	public function testRemoveSpaces()
	{
		$str = Str::remove_spaces(' &nbsp; string  &nbsp; ');

		$this->assertEquals('string', $str);
	}

	public function testRemoveMultiSpaces()
	{
		$str = Str::remove_multi_spaces('string1   string2');

		$this->assertEquals('string1 string2', $str);
	}

	public function testCleanAStringOfCharacters()
	{
		$str = ' &nbsp; string1  string2 &nbsp; ';
		$str = Str::clean($str);

		$this->assertEquals('string1 string2', $str);
	}
}
