<?php

    // Por padrão, o PHP usa o fuso horário da máquina em uso, ou seja, o servidor;
    // Porém podemos alterar manualmente o fuso horário com a função date_default_timezone_set;
    // Que irá receber como parãmetro o novo fuso horário em string;

    date_default_timezone_set("America/Sao_Paulo");

    $data = new DateTime();
    print_r ($data);
    echo "<br>";