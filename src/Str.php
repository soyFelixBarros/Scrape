<?php

namespace Felix\Scraper;

class Str
{
    /**
     * Limpiar la cadena y almacenar.
     *
     * @param $str string Cadena de caracteres a limpiar.
     * @return string
     */
    public static function clean($str)
    {
        $str = html_entity_decode($str);
        $str = str_replace("\xc2\xa0", "", $str);
        $str = trim($str);
        $str = preg_replace("!\s+!", " ", $str);
        
        return $str;
    }
}
