# Scraper

[![Latest Version on Packagist](https://img.shields.io/packagist/v/felix/scraper.svg?style=flat-square)](https://packagist.org/packages/felix/scraper)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/soyFelixBarros/Scraper/master.svg?style=flat-square)](https://travis-ci.org/soyFelixBarros/Scraper)
[![Quality Score](https://img.shields.io/scrutinizer/g/soyFelixBarros/Scraper.svg?style=flat-square)](https://scrutinizer-ci.com/g/soyFelixBarros/Scraper)
[![StyleCI](https://styleci.io/repos/102618762/shield)](https://styleci.io/repos/102618762)
[![Total Downloads](https://img.shields.io/packagist/dt/felix/scraper.svg?style=flat-square)](https://packagist.org/packages/felix/scraper)

> Raspar una web y obtener su contenido.

## Instalar

Necesitas *PHP >= 7.0*, pero se recomienda la última versión estable de PHP.

La forma recomendada de instalar Scraper en tu proyecto es a través de [Composer](https://getcomposer.org/). Ejecute el siguiente comando para instalar la última versión estable de Scraper:

```bash
composer require felix/scraper
```

## Usar

```php
use Felix\Scraper\Crawler;

$crawler = Crawler('https://example.com', '/html/body/div/h1');
$crawler->start();

return $crawler->getContent()->text(); // Example Domain

```

## Desarrolladores

### Instalación

Clonando el proyecto e instalando las dependencias:

```bash
git clone https://github.com/soyFelixBarros/Scraper.git
cd scraper
composer install
```

### Cambios

Por favor, vea [CHANGELOG](CHANGELOG.md) para más información sobre lo que ha cambiado recientemente.

### Pruebas

```bash
vendor/bin/phpunit
```

## Licencia MIT

Por favor, consulte el [archivo de licencia](LICENSE.md) para obtener más información.

------

Desarrollado por [Felix Barros](https://twitter.com/soyFelixBarros)