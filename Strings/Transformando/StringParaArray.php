<?php

    // Para converter uma string para array é utilizado a função explode();
    // Seu parâmetro é dividido em dois valores: o separador e qual string vai ser convertida;

    $frase = "O gato está todo molhado por causa da chuva!";
    $fraseEmArray = explode(" ", $frase); // O separador precisa existir na string para poder separar.
    // Se ele não existir, ele vai juntar tudo em um único índice. 

    print_r($fraseEmArray);

    echo "<br>";

    $bens = "Carro, Avião, Mansão, Tanque, Televisão, Apartamento, Navio";
    $bensArray = explode(",", $bens); // Aqui ele vai separar por vírgula pois ele irá encontrar vírgulas na nossa string
    print_r($bensArray);