<?php

    // Enquanto que com a função array_slice a gente resgatava elementos
    // Com a função array_splice() a gente vai remover elementos

    $arr = ["Bruno", "Sofia", "Breno", "Bruna", "Eduardo", "Marcela", "Fernanda", "Gabriela"];

    print_r(array_splice($arr, 2, 3)); // Estamos removendo o Breno até Eduardo
    echo "<br><br>";

    print_r($arr); // O nosso array agora vai ter o Bruno, Sofia, Marcela, Fernanda e Gabriela.