<?php

    $arr = [
        ["Thiago", 17, "Caxias do Sul", "Solteiro", "Estudante", "gosto de viajar"],
        ["Maria Maria", 6, "São Paulo", "Solteira", "Estudante", "gosto de ir no cinema"],
        ["Neymar", 32, "Rio Branco", "Casado", "Professor", "gosto de ler livros"], 
        ["Antonia", 22, "Rio de Janeiro", "Comprometida", "Estudante de Filosofia", "gosto de sair com os amigos"]
    ];

    foreach($arr as $pessoa){
        echo "Mudando de array: <br>";
        echo "Olá eu sou $pessoa[0], tenho $pessoa[1] anos e moro em $pessoa[2]. Sou $pessoa[3], atualmente sou $pessoa[4] e no meu tempo livre $pessoa[5]." . "<br><br>";
    }