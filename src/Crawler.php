<?php

namespace Felix\Scraper;

class Crawler
{
    protected $timeout = 60;
    protected $url;
    protected $xpath;
    protected $html;
    protected $content;

    public function __construct($url, $xpath = '//')
    {
        $this->url = $url;
        $this->xpath = $xpath;
    }

    /**
     * Obtener el HTML y parsear su contenido.
     *
     * @return void
     */
    public function start()
    {
        $html = $this->html($this->url);

        $this->setContent($html, $this->xpath);
    }

    /**
     * Obtener el contenido HTML de una página.
     *
     * @param string $url Url de la página a scrapear
     *
     * @return string
     */
    public function html()
    {
        $this->html = @file_get_contents($this->url);

        return $this->html;
    }

    /**
     * Obtener el contenido.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Almacenar el codigo HTML.
     *
     * @param string $html
     * @param string $xpath
     */
    public function setContent($html, $xpath)
    {
        $crawler = new \Symfony\Component\DomCrawler\Crawler($html);
        $this->content = $crawler->evaluate($xpath);
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
