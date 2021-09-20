<?php

    // Para declarar uma propriedade dentro de uma class é bem simples, é só declarar uma variável
    // Porém precisamos definir sua privacidade, por exemplo sendo "public"
    // Com a privacidade public podemos acessar ela fora do escopo do objeto

    class Car{

        public $rodas = 4;
        public $aro = 20;
        public $cor = "Preta";

    }

    $fusca = new Car;
    echo $fusca -> rodas . "<br>";
    echo $fusca -> aro . "<br>";
    
    $fusca -> cor = "Azul"; // Podemos mudar o valor de uma variável de um objeto fazendo dessa forma
    echo $fusca -> cor;

?>