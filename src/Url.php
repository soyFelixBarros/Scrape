<?php

namespace Felix\Scrape;

class Url
{
	/**
	 * Devuelve el host de una url.
	 *
	 * @param  string $url Enlace de un sitio web.
	 * @return string
	 */
	public function getHost(string $url) {
		$parts = array_merge(parse_url($url));

		return $parts['host'] ?? '';
	}
}