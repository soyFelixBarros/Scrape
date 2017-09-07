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
}