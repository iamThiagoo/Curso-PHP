<?php

    if(isset($_GET["nome"])){
        $nome = $_GET["nome"];
        $idade = $_GET["idade"];
    }
    else{
        $nome = "Nome não preenchido!";
        $idade =  "Idade não preenchida!";
    }

?>

<h2>O seu nome é <?= $nome ?></h2>
<h2>A sua idade é <?= $idade ?></h2>