<?php

    class Carro {

        public $nome;
        public $marcaCarro;
        public $anoCarro;
        public $kmCarro;
        public $velocidade;
        public $velocidadeMaxima;

        function setVelocidadeMaxima($velocidadeMaxima){
            $this->velocidadeMaxima = $velocidadeMaxima;
        }

        function getVelocidade($velocidade){
            $this->velocidade = $velocidade;
        }

    }

    $uno = new Carro;
    $uno -> nome = "Uno";
    $uno -> marcaCarro = "Fiat";
    $uno -> anoCarro = 2021;
    $uno -> km = 50000;
    $uno -> setVelocidadeMaxima(200);
    $uno -> getVelocidade(90);

    echo "Renato: 'O meu carro $uno->nome da marca $uno->marcaCarro está com $uno->km km rodados.' <br>";
    echo "Maicon: 'Bahh e de qual ano ele é?' <br>";
    echo "Renato: 'Ele é $uno->anoCarro, ele chega a $uno->velocidadeMaxima km/h mas geralmente dirijo a $uno->velocidade' <br>";