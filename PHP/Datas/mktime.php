<?php

    // Com a função mktime() iremos criar um tempo com os valores que passaremos em seu parâmetro
    // mktime("hora", "minutos", "segundos", "mês", "dia", "ano");

    $date = mktime(12, 30, 0, 12, 6, 2003);
    echo date("d/M- Y", $date);