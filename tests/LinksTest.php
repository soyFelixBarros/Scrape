<?php

use Symfony\Component\DomCrawler\Crawler;

class LinksTest extends PHPUnit_Framework_TestCase 
{
	public function testGetLinks()
	{
		// Decodifica una cadena cifrada como URL
		$url = urldecode('http://www.diarionorte.com');

		// Transmite un fichero entero a una cadena
		$html = @file_get_contents($url);

		// Buscamos el contenido en el html
		$crawler = new Crawler($html);
		return $crawler->count();
		// $this->assertTrue(true);
	}
}
