<?php

    // No mesmo modo que a gente tem com as classes, também temos com os objetos. Como:
    // is_object() => verifica se a variável é um objeto
    // get_class() => verifica a classe do objeto
    // method_exists() => verifica se um método existe em um objeto

    class Pessoa{
        public $nome;

        public function apresentacao(){
            echo "Olá, tudo bem?";
        }
    }

    $thiago = new Pessoa;

    if(is_object($thiago)){ // Retorna se é objeto ou não
        echo "É um objeto! <br>";
    }
    else{
        echo "Não é um objeto! <br>";
    }

    $maria = "Maria";

    if(is_object($maria)){
        echo "É um objeto! <br>";
    }
    else{
        echo "Não é um objeto! <br>";
    }


    echo get_class($thiago) . "<br>"; // Retorna a classe do objeto

    if(method_exists($thiago, "ligando")){ // Imprime se a função existe no objeto
        echo "O método existe! <br>";
    }   
    else{
        echo "O método não existe! <br>";
    } 

    if(method_exists($thiago, "apresentacao")){
        echo "O método existe! <br>";
    }
    else{
        echo "O método não existe! <br>";
    }