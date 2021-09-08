<?php

    class Cachorro{

        function latindo(){
            echo "au au... <br>";
        }

        function comendo($porção){
            echo "O cachorro comeu $porção potes até agora! <br>";
        }

        function caminhando($m){
            echo "O cachorro andou $m metros até agora! <br>";
        }

    }

    $jake = new Cachorro; // A partir do momento que eu faço isso, ele passa a ter acesso a todas aquelas funções
    $jake -> caminhando(13);
    $jake -> comendo(1);
    $jake -> latindo();

    echo "<br>";

    $amora = new Cachorro; // Esse objeto está compartilhando as mesmas funções que o outro
    $amora -> caminhando(30);
    $amora -> latindo();
    $amora -> comendo(2);

