<?php

class Catalogo{

    public $produtos = [];

    function addProdutos($produto){
        $this->produtos[] = $produto;
    }

    function listarProdutos(){
        foreach($this->produtos as $produto){
            echo $produto->exibirDetalhes().PHP_EOL;
        }
    }

}