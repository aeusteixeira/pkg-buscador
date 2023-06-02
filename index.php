#!/usr/bin/env php

<?php

require './vendor/autoload.php';

use Aeusteixeira\Buscador\Pesquisa;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;


$client = new Client(['base_uri' => 'https://www.alura.com.br/']);

$crawler = new Crawler();
$buscador = new Pesquisa($client, $crawler);

$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso){
    echo $curso . PHP_EOL;
}