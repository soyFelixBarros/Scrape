<?php

use Felix\Scraper\Crawler;

class CrawlerTest extends PHPUnit_Framework_TestCase
{
    /**
     * Extraer los datos de una web.
     */
    public function testExtractData()
    {
        $data = Crawler::extracting('https://example.com', '//html/body/div/h1');

        $this->assertContains('Example Domain', $data->text());
    }
}
