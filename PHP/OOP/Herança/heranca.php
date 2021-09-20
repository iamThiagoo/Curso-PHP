<?php

    // A herança de classes funciona com a classe podendo herdar as propriedades e métodos de outra classe.
    // Isso se deve a palavra "extends" e tem que ser empregada na classe que herdará

    class Humano{

        public const BRACOS = 2;
        public const PERNAS = 2;
        public const OLHOS = 2;

        public function falar(){
            echo "Hello!";
        }

    }

    class Programador extends Humano{

        public $nome;
        public $idade;

        public function dados($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function apresentacao(){
            echo "Sou o $this->nome e tenho $this->idade anos. <br>";
        }

    }

    $thiago = new Programador;
    $thiago -> dados("Thiago", 17);
    $thiago -> apresentacao();