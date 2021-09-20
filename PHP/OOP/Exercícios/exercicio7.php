<?php

    class Dog{
        public $nome;
        public $idade;
        public $cor;
        public $raca;
        public $sexo;

        public function __construct($nome, $idade, $cor, $raca, $sexo){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->cor = $cor;
            $this->raca = $raca;
            $this->sexo = $sexo;
        }

        public function apresentacao(){
            if($this->sexo === "macho" || $this->sexo === "Macho"){
                $this->sexo = "ele";
            }
            if($this->sexo === "Femea" || $this->sexo === "femea"){
                $this->sexo = "ela";
            }

            echo "Esse é $this->nome, $this->sexo tem $this->idade anos, possui a cor $this->cor e é da raça $this->raca. <br>";
        }
    }

    $lucy = new Dog("Lucy", 7, "marrom", "vira-lata", "femea");
    $lucy -> apresentacao();

    $jake = new Dog("Jake", 4, "branco e preto", "Golden", "macho");
    $jake -> apresentacao();