<?php

require_once 'vendor/autoload.php';

use App\Produto;
use App\Catalogo;

$produto1 = new Produto(1, "camiseta", 20.0);
$produto2 = new Produto(1, "Calça Jeans", 50.0);
$produto3 = new Produto(1, "Tênis", 80.0);

$catalogo = new Catalogo();

$catalogo->addProdutos($produto1);
$catalogo->addProdutos($produto2);
$catalogo->addProdutos($produto3);

echo "Produtos no Catálogo: ".PHP_EOL;
$catalogo->listarProdutos();

//teste