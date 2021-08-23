<?php

    // Com o include_once e require_once nós podemos colocar o arquivo apenas uma vez na página
    // Esse método acaba sendo o mais indicado em projetos WEB

    require_once "teste.php";
    include_once "teste2.php";

?>

<p>Resto do código</p>