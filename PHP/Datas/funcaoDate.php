<?php

    // A função date irá receber um parâmetro e esse parâmetro será o formato da data.
    // Exemplo: date("d/m/y");

    $date = date("d/m/y");
    echo $date . "<br>"; // Retorna o dia em que estamos 

    $date2 = date("D/M/Y");
    echo $date2; // Retorna o dia em que estamos porém sinalizando o dia por escrito

    // Vale ressaltar que nós podemos misturar os dois tipos, podemos por exemplo usar: d, M - Y (11, set - 2021);