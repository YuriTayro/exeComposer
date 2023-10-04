<?php

namespace App;

class Produto {
    
    public $id;
    public $nome;
    public $preco; 

    public function __construct($id, $nome, $preco)
    {

        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        
    }

    public function exibirDetalhes(){
        return "Id: $this->id, Nome: $this->nome e preço: $this->preco.";
    }




}

