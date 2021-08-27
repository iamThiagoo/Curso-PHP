<?php

    // Para decompor uma URL usamos a função parse_url();
    // Quando decompormos uma URL será retornada um ARRAY;

    $url = "https://thiagoferreira.netlify.app/";
    print_r(parse_url($url));
    // Será retornado o protocolo HTTPS, o nosso host e o nosso path que foi definido como sendo o "/"

    echo "<br>";

    $arrayUrl = parse_url($url);
    echo $arrayUrl["host"]; // Retornará apenas o host