<?php

use Felix\Scrape\Crawler;

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
}
