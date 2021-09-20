<?php

    // Com a função strtotime() a gente recebe uma string como parâmetro, que é um texto sinalizando o tempo
    // A função irá interpretar e irá transformar em data;

    echo date("d/m/y", strtotime("10 years")) . "<br>";

    $cincoDias = strtotime("5 days"); // Retornará um valor de cinco dias a partir do nosso, como um valor unix
    echo $cincoDias . "<br>";

    $dataAtualMais5Dias = date("d, M - y", $cincoDias);
    echo $dataAtualMais5Dias . "<br>";

    $umMilhaoDeAnos = strtotime("1000000 years");
    echo $umMilhaoDeAnos . "<br>";