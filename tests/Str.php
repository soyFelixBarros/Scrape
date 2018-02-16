<?php

use Felix\Scraper\Str;

class StrTest extends PHPUnit_Framework_TestCase 
{
    public function testCleanAStringOfCharacters()
	{
		$str = "\n &nbsp; string1  string2 &nbsp; ";
		$str = Str::clean($str)->get();
		
		$this->assertEquals('string1 string2', $str);
	}
}