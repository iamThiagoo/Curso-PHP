<?php

    // Variáveis por referência estão interligadas, e o jeito de fazermos isso é usando "=&";

    $x = "O meu nome é Thiago";
    $y =& $x;

    echo $y;
    echo "<br>";
    echo $x;

    $y = "O meu nome é Msasasas";

    echo "<br><br>Atribuição após a mudança";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
?>