<?php

namespace Felix\Scrape;

class Crawler
{
    protected $timeout = 60;
    protected $url = '';
    protected $xpath = '';
    protected $html = '';
    protected $content = '';

    public function start(string $url = '', string $xpath = '')
    {
        $html = $this->getHtml($url);

        $this->setContent($html, $xpath);

        return $this->content;
    }

    /**
     * Obtener el contenido HTML de una página.
     * 
     * @param string $url Url de la página a scrapear
     * 
     * @return string
     */
    public function getHtml(string $url)
    {
        $this->html = @file_get_contents($url);

        return $this->html;
    }

    public function setContent(string $html, string $xpath)
    {
        $crawler = new \Symfony\Component\DomCrawler\Crawler($html);
        $this->content = $crawler->evaluate($xpath);
    }

    public function getContent()
    {
        return $this->content;
    }
    
    public function getUrl()
    {
        return $this->url;
    }
    
    public function setTimeout(int $timeout)
    {
        $this->timeout = $timeout;
    }
}