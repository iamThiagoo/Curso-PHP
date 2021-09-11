<?php

    // Também podemos unir os arrays, essa ação também é conhecida como merge
    // A função é arrat_merge() e como parâmetro passaremos todos os arrays que queremos unir

    $numeros = range(1,20);
    $nomes = ["Leticia", "Renato", "Lucas", "Vilson", "Norberto", "Fernanda", "Gabriela", "Morgana"];
    $cidades = ["São Paulo", "Caxias do Sul", "Rio de Janeiro", "Recife", "Macapá", "Manaus", "São Luís"];

    echo "Arrays separados: <br>";
    print_r($numeros);
    echo "<br>";
    
    print_r($nomes);
    echo "<br>";

    print_r($cidades);
    echo "<br><br>";

    $arrays = array_merge($numeros, $nomes, $cidades);
    echo "Arrays em um único array: <br>";
    print_r($arrays);

    // Eles irão seguir a ordem onde foram colocados