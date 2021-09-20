<?php

    // Pelos construtores podemos iniciar as classes já com alguns objetos com valores de propriedas únicos para cada 
    // objeto
    // Passamos como argumentos os valores das propriedades

    // EX: function __constructor($portas, $pneus, $motor){

    // }

    class Car{
        public $marca;
        public $valor;
        public $cor;

        public function __construct($marca, $valor, $cor){
            $this->marca = $marca;
            $this->valor = $valor;
            $this->cor = $cor;
        }
    }

    $porsche = new Car("Porsche", 300000, "vermelha");
    echo "O carro da marca $porsche->marca de cor $porsche->cor está a venda a partir de R$ $porsche->valor.";

    echo "<br>";

    $ferrari = new Car("Ferrari", 500000, "vermelha");
    echo "O carro da marca $ferrari->marca de cor $ferrari->cor está a venda a partir de R$ $ferrari->valor.";