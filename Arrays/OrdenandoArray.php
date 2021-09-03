<?php

    // Podemos ordenar um array de forma crescente com a função sort()
    // E também podemos ordenar o array de forma decrescente com a função rsort()
    // Lembrando que vale tanto para números quanto para palavras pois aí ele vai ordenar de forma crescente (CUIDADO COM OS ACENTOS
    // POIS ACABAM AFETANDO AO ORDENAR O ARRAY);

    $numeros = [1,57,44,92,7882,8441,3669,1448,14488221,699554,7888112,8444,58,99624,1000,14447,74489,332,44569,77,899,612];

    // Não é preciso colocá-lo em uma variável
    sort($numeros);
    echo "O array em forma crescente: <br>";
    print_r($numeros);
    echo "<br><br>";


    rsort($numeros);
    echo "O array em forma decrescente: <br>";
    print_r($numeros);
    echo "<br><br>";


    $nomes = ["Thiago", "Fernanda", "Rebecca", "Carlos", "Mario", "José", "Giovana", "Gabriel", "Jonas", "Tales"];
    sort($nomes);
    echo "O array de nomes em ordem crescente (A - Z): <br>";
    print_r($nomes);