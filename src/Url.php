<?php

namespace Felix\Scraper;

class Url
{
    /** @var string */
    private $url;

    /** @var array */
    private $parts;

    /** @var string */
    private $hash;

    public function __construct($url)
    {
        $this->setParts($url);
    }

    public function __toString()
    {
        return $this->url;
    }

    /**
     * Parsear URL.
     *
     * @param $url string Toda la url.
     *
     * @return void
     */
    public function setParts($url)
    {
        $parts = parse_url($url);

        if ($parts === false) {
            throw new \Exception($url.' es una URL mal formada y no se puede procesar');
        }

        $this->url = $url;
        $this->parts = $parts;
        $this->hash = md5($url);
    }

    /**
     * Retornar hash url.
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
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
     * Url tiene una parte.
     *
     * @return bool true|false
     */
    public function has($part)
    {
        return $this->part($part) !== null;
    }

    /**
     * Decodificación URL.
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
        if (!$this->has('host') || !$this->has('scheme')) {
            $this->url = $schemeAndHost.$this->url;
        }

        return $this->url;
    }
}
