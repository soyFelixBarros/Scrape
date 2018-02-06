<?php

use Felix\Scraper\Crawler;

class CrawlerTest extends PHPUnit_Framework_TestCase
{
    /**
     * Obtener el HTML de una página web.
     */
    public function testGetHtml()
    {
        $crawler = new Crawler('https://example.com');

        $html = $crawler->html();

        $this->assertContains('<h1>Example Domain</h1>', $html);
    }

    /**
     * Ejecutar el crawler.
     */
    public function testCrawlerStart()
    {
        $crawler = new Crawler('https://example.com', '/html/body/div/h1');
        $crawler->start();

        $this->assertContains('Example Domain', $crawler->getContent()->text());
    }
}
