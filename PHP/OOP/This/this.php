<?php

    class Apresentation{

        public $nome;
        public $sobrenome;
        public $idade;

        function dados($nomePessoa, $sobrenomePessoa, $idadePessoa){
            $this->nome = $nomePessoa;
            $this->sobrenome = $sobrenomePessoa;
            $this->idade = $idadePessoa;
        }
    }

    $thiago = new Apresentation;
    $thiago -> dados("Thiago", "Ferreira", 17);
    echo "Olá o meu nome é $thiago->nome $thiago->sobrenome, tenho $thiago->idade anos. <br>";
    
    class Animal {

        public $raça;
        public $nome;

        function animal($raça, $nome){
            $this->raça = $raça;
            $this->nome = $nome;
        }
    }

    $jake = new Animal;
    $jake-> animal("cachorro", "Jake");
    echo "O $jake->nome é um $jake->raça!!!";