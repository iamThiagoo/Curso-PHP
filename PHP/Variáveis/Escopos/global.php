<?php

    // A principal caracteristica da variável global é ser declarada fora de funções;
    // Por comportamento padrão, elas não serão acessíveis dentro de funções;
    // Precisamos utilizar a palavra global para isso;

    $nome = "Thiago";

    function falaNome(){
        $nome = "Luis"; // Sem a palavra global, ele nos retornará UNDEFINED
        echo $nome;
    }

    falaNome();

    echo "<br>";

    function falaNome2(){
        global $nome; // Defini para usar o escopo global
        echo $nome;
    }

    falaNome2();
?>