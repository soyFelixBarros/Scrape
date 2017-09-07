<?php

namespace Felix\Scrape;

class Helpers
{
	/**
	 * Eliminar espacios de una cadena.
	 * 
	 * @param  string $str Cada de texto.
	 * @return string
	 */
	public function clear_text($str)
	{
		$str = html_entity_decode($str);
		$str = str_replace("\xc2\xa0", '', $str);
		$str = trim($str);

		return $str;
	}

	/**
	 * Comparar dos cadenas y evaluar su similitud.
	 * 
	 * @param string $str1 Primer texto a comparar
	 * @param string $str2 Segundo text a comparar
	 */
	public function similar_str($str1, $str2)
	{
		return similar_text($str1, $str2);
	}
}