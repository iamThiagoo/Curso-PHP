<?php

    class Pessoa{

        public $nome;
        public $idade;
        public $peso;
        public $user;
        public $senha;

        function dados($nome, $idade, $peso, $user, $senha){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->peso = $peso;
            $this->user = $user;
            $this->senha = $senha;
        }

        function fala(){
            echo "Olá eu sou o $this->nome, tenho $this->idade e tenho $this->peso kg. <br> Meu user é $this->user e minha senha é $this->senha <br><br>";
        }
    }

    $thiago = new Pessoa;
    $thiago-> dados("Thiago", 17, 66, "Thiaguin", 1234);    
    echo $thiago->fala();

    $joao = new Pessoa;
    $joao-> dados("João", 25, 75, "Joaoo", 2354);
    echo $joao->fala();

    $maria = new Pessoa;
    $maria-> dados("Maria", 20, 55, "MariaF", "mariaF9999");
    echo $maria->fala();