<?php

    // Com a função strpos() podemos encontrar algum texto na string, irá nos retornar a PRIMEIRA OCORRÊNCIA;
    // Ela receberá dois parâmetros: a string que ela irá procurar e o que ela vai procurar.
    // Se recebermos um valor será o índice inicial;
    // Se retornar false, é que o texto não existe naquela string;

    $sobreMim = "Meu nome é Thiago, tenho 17 anos e tenho estudado bastante a linguagem PHP.";
    $buscando = strpos($sobreMim, "PHP");
    echo $buscando; // Retorna o índice 72, que é quando começa a palavra
    
    echo "<br>";

    $buscando2 = strpos($sobreMim, "JavaScript");
    echo $buscando2; // Não retornou nada, ou seja, false. Para resolvermos isso, basta criar um if com alguma mensagem

    if($buscando2 === false){
        echo "Palavra não encontrada.";
    }