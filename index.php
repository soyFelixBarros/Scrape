<?php

require_once __DIR__ . "/vendor/autoload.php";

use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

$fs = new Filesystem();
$dir = './tmp/pages/';
$file = $dir.mt_rand();

$fs->mkdir($dir);

// Decodifica una cadena cifrada como URL
$url = urldecode('https://www.diariotag.com/noticias/locales/la-utn-participo-del-6o-congreso-nacional-de-licenciatura-en-administracion-rural');

$fs->dumpFile($file, @file_get_contents($url));

// Transmite un fichero entero a una cadena
$html = @file_get_contents($file);

// Buscamos el contenido en el html
$crawler = new Crawler($html);

echo $crawler->evaluate('//*/div[1]/div[4]/div[1]/div/div/*[1]')->text();
// foreach ($crawler as $domElement) {
//     var_dump($domElement);
// }