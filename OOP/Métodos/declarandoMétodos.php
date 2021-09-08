<?php

    // Para declarar um método, iremos utilizar a sintaxe da function porém dentro de uma class

    class Pessoa{

        function falar(){
            echo "Hello world! <br>";
        } 

        function calculando($a, $b){
            echo $a + $b . "<br>";
        }

    }

    $thiago = new Pessoa; // Instanciamos um novo objeto
    $thiago -> falar(); // Chamamos o método que queríamos usar no objeto

    $maria = new Pessoa;
    $maria -> falar();
    $maria -> calculando(10,20); // É apenas UM traço na flecha


?>