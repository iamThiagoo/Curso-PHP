<?php

    // A função strip_tags() remove as tags do HTML para que por exemplo, posamos colocar o dado no banco;

    $textoHTML = "<h1>Loja do seu Zé</h1><h2>Os melhores produtos da sua região!!!</h2>";
    echo $textoHTML;
    
    // Caso queira salvar uma informação no banco, vou precisar transformar essa string em texto.
    $textoParaBanco = strip_tags($textoHTML); 
    echo $textoParaBanco; // Removeu as nossas tags, deixando o código em texto puro.