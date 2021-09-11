<?php

    // Os métodos format e modify são métodos do DateTime() e nos ajudam a manipular os dados;
    // format => formata a data;
    // modify => altera a data;

    $data = new DateTime();

    echo $data->format("D - F, Y") . "<br>";
    echo $data->format("d - m - y") . "<br>";


    $data->modify("+15 days");
    echo $data->format("d/m/y") . "<br>";