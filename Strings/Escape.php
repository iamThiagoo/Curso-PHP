<?php

    // Podemos utilizar valores especiais que executam algumas funções nas nossas strings
    // Para utilizá-las elas precisam estar em aspas duplas; 
    // Alguns exemplos de valores escape: "\n": nova linha
    //                                    "\\": barra invertida
    //                                    "\t": tab
    //                                    "\$": dolar

    header("content-type: text-plain"); // Com isso nós estamos falando pro navegador que o que tem aqui é texto puro
    // Sem ele nós não veríamos o efeito dos valores de escape
    // Por isso esses valores são indicados para sistemas internos e não para a web.

    echo "Oi eu estou na primeira linha \nE eu estou na segunda linha";

    echo "\nTestando o \t tab";