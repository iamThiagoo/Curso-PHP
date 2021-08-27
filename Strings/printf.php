<?php

    // Mesma funcionalidade que o print porém podemos acrescentar valores dinâmicos utilizando "%";
    // EX: print("Número %d", 1);

    // %d ====> int;
    printf("Número %d <br>", 1);

    $num = 15;
    printf("Este foi o número escolhido: %d <br>", $num);

    // %f =====> float;
    $num2 = 12.55;
    printf("Esse foi o segundo número escolhido: %f <br>", $num2);  // Para diminuir o número coloque um ponto e o 
    // um numeral indicando quantas casas você quer após a vírgula
    printf("Esse foi o segundo número escolhido: %.2f <br>", $num2);

    // %s ====> string;
    $nome = "Thiago";
    printf("Ele me disse que o nome dele era %s", $nome);
