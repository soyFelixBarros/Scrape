<?php

use Felix\Scraper\Str;
use Felix\Scraper\Crawler;

class CrawlerTest extends PHPUnit_Framework_TestCase
{
    /**
     * Obtener el HTML de una página web.
     */
    public function testGetHtml()
    {
        $crawler = new Crawler;

        $html = $crawler->getHtml('https://example.com');
        
        $this->assertContains('<h1>Example Domain</h1>', $html);
    }

    /**
     * Ejecutar el crawler.
     */
    public function testCrawlerStart()
    {
        $crawler = new Crawler;
        $content = $crawler->start('https://example.com', '/html/body/div/h1');
        
        $this->assertContains('Example Domain', $content->text());
    }

    /**
     * Obtener la cadena de caracteres entre dos etiquetas y limpiarla.
     */
    public function testGetTitleAndClear()
    {
        $crawler = new Crawler;
        $html = "<html><body><h3> &nbsp; Example  Domain</h3></body></html>";
        $crawler->setContent($html, '//h3');
        $str = Str::clean($crawler->getContent()->text());
        
        $this->assertEquals('Example Domain', $str);
    }
}
