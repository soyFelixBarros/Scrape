<?php

namespace Felix\Scraper;

class Url
{
    /** @var string */
    protected $url;

    /** @var array */
    protected $parts;

    public function __construct($url)
    {
        $this->url = $url;
        $this->parts = parse_url($url);
    }

    public function __toString()
    {
        return $this->url;
    }
    
    /**
     * Obtener una parte de la URL.
     * 
     * @param $part string Parte de la URL (Ej: host).
     * 
     * @return string|null
     */
    public function part($part)
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
        return $this->part('scheme') !== null;
    }

    /**
     * Url tiene un dominio.
     * 
     * @return boolean true|false
     */
    public function hasHost()
    {
        return $this->part('host') !== null;
    }

    /**
     *  Decodificación URL.
     * 
     * @return object
     */
    public function decode()
    {
        $this->url = urldecode($this->url);
        
        return $this;
    }

    /**
     * Dada una URL, normaliza esa URL.
     * 
     * @param $schemeAndHost string Esquema y dominio base (Ej. http://example.com)
     * 
     * @return string  
     */
    public function normalize($schemeAndHost)
    {
        if (! $this->hasScheme()) {
            $this->url = $schemeAndHost.$this->url;
        }

        return $this;
    }
}