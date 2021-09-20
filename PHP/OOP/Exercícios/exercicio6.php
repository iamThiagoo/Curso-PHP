<?php

    class Professor{

        public $nome;
        public $idade;
        public $sexo;
        public $materia;
        public $instituicao;

        function dados($nome, $idade, $sexo, $materia, $instituicao){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->materia = $materia;
            $this->sexo = $sexo;
            $this->instituicao = $instituicao;
        }

        function apresentacao(){
            if($this->sexo === "Homem" || $this->sexo === "homem"){
                $this->sexo = "professor";
            }
            if($this->sexo === "Mulher" || $this->sexo === "mulher"){
                $this->sexo = "professora";
            }

            echo "Olá, meu chamo $this->nome, tenho $this->idade anos e sou $this->sexo de $this->materia em uma $this->instituicao. <br><br>";
        }
    }

    $thiago = new Professor;
    $thiago-> dados("Thiago", 25, "homem", "Geografia", "escola");
    $thiago-> apresentacao();

    $mara = new Professor;
    $mara-> dados("Mara", 40, "mulher", "Português", "faculdade");
    $mara-> apresentacao();

    $roger = new Professor;
    $roger -> dados("Roger", 32, "homem", "Economia", "faculdade");
    $roger -> apresentacao();

?>