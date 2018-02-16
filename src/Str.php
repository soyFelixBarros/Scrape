<?php

namespace Felix\Scraper;

class Str
{
    private $str = null;
    private static $instance = null;
    
    private function __construct($str = '')
    {
        $this->set($str);
    }

    public static function clean($str = '')
    {
        if (! isset(static::$instance)) {
            self::$instance = new Str($str);
        }
        
        return self::$instance;
    }

    /**
     * Limpiar la cadena y almacenar.
     *
     * @param $str string Cadena de caracteres a limpiar.
     *
     * @return void
     */
    private function set($str)
    {
        $str = html_entity_decode($str);
        $str = str_replace("\xc2\xa0", "", $str);
        $str = trim($str);
        $str = preg_replace("!\s+!", " ", $str);

        $this->str = $str;
    }
    
    /**
     * Limpiar una cadena de caracteres.
     * 
     * @param string $str Cadena de caracteres a limpiar.
     * @return string
     */
    public function get()
    {
        return $this->str;
    }
}