<?php

namespace Felix\Scraper;

class Url
{
    protected $url;
    protected $parts;

    public function __construct($url)
    {
        $this->url = $url;
        $this->parts = parse_url($url);
    }

    /**
     * Obtener una parte de la URL.
     * 
     * @param $part string Parte de la URL (Ej: host).
     * 
     * @return string|null
     */
    public function getPart($part)
    {
        return array_key_exists($part, $this->parts) ? $this->parts[$part] : null;
    }

    /**
     * Url tiene un esquema.
     * 
     * @return boolean true|false
     */
    public function hasScheme()
    {
        return $this->getPart('scheme') !== null;
    }

    /**
     * Url tiene un dominio.
     * 
     * @return boolean true|false
     */
    public function hasHost()
    {
        return $this->getPart('host') !== null;
    }

    /**
     * Dada una URL, normaliza esa URL.
     * 
     * @param $url string Url base (Ej. http://example.com)
     * 
     * @return string  
     */
    public function normalize($schemeAndHost)
    {
        $url = urldecode($this->url);

        if (! $this->hasScheme()) {
            $url = $schemeAndHost.$url;
        }

        return $url;
    }
}