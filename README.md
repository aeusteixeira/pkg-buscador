# Buscador de Cursos

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://opensource.org/licenses/MIT)

A PHP package for searching courses on Alura website.

## Description

This package provides a functionality to search for courses on Alura website. It uses the GuzzleHttp and Symfony Dom Crawler libraries to make HTTP requests and parse the HTML of the page.

## Requirements

- PHP >= 7.2
- Composer

## Installation

To install the package, use Composer. Run the following command in the root directory of your project:

```shell
composer require aeusteixeira/buscador-cursos
```

# Usage Example

```php
require 'vendor/autoload.php';

use Aeusteixeira\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();
$buscador = new Buscador($client, $crawler);

$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}
```

# Contribution
Contributions are welcome! Feel free to submit pull requests or report issues.

# License
This project is licensed under the terms of the MIT license. See the LICENSE file for more information.


Please make sure to customize the sections of the README.md with the relevant information for your project.

