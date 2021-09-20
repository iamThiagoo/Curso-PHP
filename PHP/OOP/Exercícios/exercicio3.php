<?php 

    class Pessoa {
        public $nome;
        public $idade;

        function andar($passos){
            echo "A pessoa andou mais de $passos passos naquele ano.<br>";
        }
    }

    $thiago = new Pessoa;
    $thiago -> nome = "Thiago";
    $thiago -> idade = 17;

    echo "O nome dele é $thiago->nome e ele tem $thiago->idade anos. ";
    echo "<br>";

    $thiago -> andar(80000);

    echo "<br>";

    $joao = new Pessoa;
    $joao -> nome = "João";
    $joao -> idade = 25;

    echo "O $joao->nome vai fazer $joao->idade anos nesse ano. <br>";
    $joao -> andar(100000);