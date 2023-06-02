<?php

namespace Aeusteixeira\Buscador;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Pesquisa
{
    private $client;
    private $crawler;

    public function __construct(ClientInterface $client, Crawler $crawler)
    {
        $this->client = $client;
        $this->crawler = $craawler;
    }

    public function buscar(string $url): array
    {
        $resposta = $this->client->request('GET', $url);
        $html = $resposta->getBody();
        $this->crawler->addHtmlContent($html);

        $elementosCursos = $this->crawler->filter('span.card-curso__nome');

        $cursos = [];

        foreach ($elementosCursos as $elemento) {
            $cursos[] = $elemento->textContent;
        }

        return $cursos;
    }
}
