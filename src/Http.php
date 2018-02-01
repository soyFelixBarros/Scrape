<?php

namespace Felix\Scraper;

class Http
{

	/**
	 * Comprobar si un enlace devuelve un codigo 200 OK.
	 *
	 *
	 * @param  string $link Enlace a comprobar.
	 *
	 * @return boolean
	 */
	public function linkIsOk($link) {
		$headers = @get_headers($link);
		
		return 200 === (int) substr($headers[0], 9, 3);
	}
}