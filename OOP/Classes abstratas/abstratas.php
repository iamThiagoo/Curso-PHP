<?php

    // As classes abstratas não podem ser instanciadas
    // Podemos ter métodos abstratos, que devem ser implementados obrigatoriamente se uma classe herdar a abstrata
    // A palavra reservada tanto para métodos e classes é abstract;
    /* EX: 
        abstract class ClasseAbstrata{

        }
    */

    abstract class Testando{

        public static function testando(){
            echo "Esse método é de uma classe abstrata";
        }

    }

    // $t = new testando;  // não podemos instanciar, dará erro

    Testando::testando(); // A única maneira de chamar a função é de uma classe abstrata é usando o static junto