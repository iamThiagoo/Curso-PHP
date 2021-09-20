<?php

    // Para você definir uma constante em uma classe deve ser da seguinte forma:
        // EX: public const CHAVE_API = "ASO793mj891";
            // Precisa ter a palavra const e a geralmente seu nome ser escrita em letras maiúsculas;

    class Humano{
        
        public const BRACOS = 2;
        public const PERNAS = 2;
        public const OLHOS = 2;

        public function mostrandoConstantes(){

            echo self::BRACOS . "<br>"; // Para mostrar uma constante em um método é preciso do SELF::

        }
    
    }

    $thiago = new Humano;
    echo $thiago::BRACOS . "<br>"; // Para acessar uma constante é preciso dos dois pontos e não da flechinha
    echo $thiago::OLHOS . "<br>";

    $thiago-> mostrandoConstantes();