<?php 

    // Temos funções que limpam as strings, mas o que é limpar?
    // Limpar é remover os espaços em branco, e isso é muito importante quando recebemos informações dos usuários no nosso banco de dados.
    // Existe 3 tipos de funções que realizam essa limpeza:
    // trim: Remove na parte inicial e final da string.
    // ltrim: Remove na parte inicial da string.
    // rtrim: Remove na parte final da string.

    $nome = "               Thiago           ";
    echo "O meu nome é $nome. <br>"; // Mesmo que o PHP ignora os espaços em branco, nós conseguimos ver com a presença do ponto no final
    // um espacinho em branco.

    $nomeLimpo = trim($nome);
    echo "O meu nome é $nomeLimpo.";

?>