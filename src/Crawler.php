<?php

namespace Felix\Scraper;

class Crawler
{
    protected $timeout = 60;
    protected $url = '';
    protected $xpath = '';
    protected $html = '';
    protected $content = '';

    public function start(string $url, string $xpath)
    {
        $html = $this->getHtml($url);

        $this->setContent($html, $xpath);

        return $this->content;
    }

    /**
     * Obtener el contenido HTML de una página.
     *
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

    /**
     * Almacenar el codigo HTML.
     */
    public function setContent(string $html, string $xpath)
    {
        $crawler = new \Symfony\Component\DomCrawler\Crawler($html);
        $this->content = $crawler->evaluate($xpath);
    }

    /**
     * Obtner el contenido.
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Obtner la URL.
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Guardar el tiempo de espera de una página.
     */
    public function setTimeout(int $timeout)
    {
        $this->timeout = $timeout;
    }
}