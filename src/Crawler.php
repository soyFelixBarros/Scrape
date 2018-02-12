<?php

namespace Felix\Scraper;

use Goutte\Client;

class Crawler
{
    /**
     * Obtener el HTML y parsear su contenido.
     * 
     * @return object
     */
    public static function extracting($url, $xpath = "//")
    {
        $client = new Client();
        $crawler = $client->request('GET', $url);
        
        return $crawler->filterXPath($xpath);
    }
}
