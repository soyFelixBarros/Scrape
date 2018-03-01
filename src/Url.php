<?php

namespace Felix\Scraper;

class Url
{
    /** @var array */
    private static $parts;

    /**
     * Obtener una parte de la URL.
     *
     * @param $part string Parte de la URL (Ej: host).
     *
     * @return string|null
     */
    public static function part($part)
    {
        return array_key_exists($part, self::$parts) ? self::$parts[$part] : null;
    }

    /**
     * Url tiene una parte.
     *
     * @return bool true|false
     */
    public static function has($part)
    {
        return self::part($part) !== null;
    }

    /**
     * Agregar host a url.
     *
     * @param $url string Url
     * @param $host string Dominio
     *
     * @return string
     */
    public static function addHost($url, $host)
    {
        return rtrim($host, '/') . '/' . $url;
    }

    /**
     * Agregar http a url.
     *
     * @param $url string Url
     * @param $scheme string Esquema
     *
     * @return string $url
     */
    public static function addScheme($url, $scheme = 'http://')
    {
        return $scheme . ltrim($url, '/');
    }

    /**
     * Decode unreserved characters
     *
     * @param $url string Url.
     *
     * @return string
     */
    public static function encode($url)
    {
        $components = explode("/", $url);
        $end = array_pop($components);
        array_push($components, rawurlencode($end));
        $url = implode("/", $components);

        return $url;
    }

    /**
     * Normalizar URL.
     *
     * @param $url string Url a normalizar.
     * @param $schemeAndHost string Esquema y dominio base (Ej. http://example.com)
     *
     * @return string
     */
    public static function normalize($url, $host = null)
    {
        self::$parts = parse_url($url);

        if (self::$parts === false) {
            throw new \Exception($url.' es una URL mal formada y no se puede procesar');
        }

        if (! self::part('host') && $host !== null) {
            $url = self::addHost($url, $host);
        }

        if (! self::part('scheme') && self::part('host')) {
            $url = self::addScheme($url);
        }

        $url = self::encode($url);
        
        return $url;
    }
}
