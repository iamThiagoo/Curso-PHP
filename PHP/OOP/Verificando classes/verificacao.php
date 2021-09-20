<?php

    // No PHP temos funções que nos ajudam a entender as classes, por exemplo:
    // class_exists() => verifica se a classe existe
    // get_class_methods() => verifica os métodos de uma classe
    // get_class_vars() => mapeamento das propriedades de uma classe
    
    class Humano{

        public $nome;
        public $peso;
        public $idade;

        public function falar(){}

        public function apresentacao(){}

    }

    if(class_exists("Humano")){
        echo "A classe existe! <br>";
    }

    if(class_exists("Cachorro")){
        echo "A classe existe! <br>";
    }
    else{
        echo "A classe não existe! <br>";
    }


    print_r(get_class_vars("Humano")); // Retornará um array com as variáveis existentes na class

    echo "<br>";

    print_r(get_class_methods("Humano")); // Retornará um array com os métodos existentes na class