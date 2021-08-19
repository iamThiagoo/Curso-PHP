<?php

    // A variável tem seu escopo definido dentro de uma função
    // Seu valor é sempre resetado quando a função é finalizada.

    $x = 15;
    echo "Variável global: $x";

    echo "<br>";

    function teste(){
        $x = 5;
        echo "Variável local: $x";
    }

    teste();
?>