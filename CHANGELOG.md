# Registro de cambios

Todos los cambios importantes en `felix/scraper` se documentarán en este archivo.

## v1.4.14 - 2018-02-23
- 14 Mejoramos el metodo para la codificación URL.
- 13 Metodo para normalizar URLs: `Url::normalize(string $url)`.

## v1.4.12 - 2018-02-22
- Metodo para agregar http a url: `$url->addScheme(string $scheme = "http://")`.

## v1.4.9 - 2018-02-16
- Nuevo metodo para limpiar una cadena de caracteres: `Str::clean($str)->get()` - [#3](https://github.com/soyFelixBarros/Scraper/issues/3)

## v1.4.7 - 2018-02-12
- Nuevo metodo `extracting($url, $xpath)` para extraer los datos de una web.
- Agregamos la librería [fabpot/goutte](https://github.com/FriendsOfPHP/Goutte) para el manejo HTTP y cralwer.

## v1.4.5 - 2018-02-06
- Agregado métodos para normalizar url [#1](https://github.com/soyFelixBarros/Scraper/issues/1)
- Agregado estilo de codificación [#2](https://github.com/soyFelixBarros/Scraper/issues/2)

## v1.4.* - 2018-01-30
- 4 - Método para limpiar una cadena de caracteres `Str:clean($str)`.
- 3 - Estabilidad mínima en el `composer.json`.
- 2 - Cambiamos el nombre de los namespaces.
- 1 - Cambiamos el nombre de la  librería a `felix/scraper`
- 0 - Primer lanzamiento