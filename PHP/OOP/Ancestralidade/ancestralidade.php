<?php
 
    // Para checar se o objeto é herdeiro de uma classe podemos usar a palavra reservada instanceof dentro de um if

    class Humano{
        
        public const BRACOS = 2;
        public const PERNAS = 2;
        public const OLHOS = 2;

    }

    $thiago = new Humano;

    if($thiago instanceof Humano){
        echo "A variável é um HUMANO! <br>";
    }
    else{
        echo "A variável não é um HUMANO! <br>";
    }

    class Professor{
        public $nome;
        public $turma;
        public $materia;
    }

    $maria = new Professor;

    if($maria instanceof Professor){
        echo "A variável é um PROFESSOR! <br>";
    }
    else{
        echo "A variável não é um PROFESSOR! <br>";
    }


    $joao = new Humano;

    if($joao instanceof Professor){
        echo "A variável é um PROFESSOR! <br>";
    }
    else{
        echo "A variável não é um PROFESSOR! <br>";
    }