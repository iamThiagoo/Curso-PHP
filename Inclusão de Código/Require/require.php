<?php

    // Com o require acontece a mesma coisa, podemos inserir um arquivo PHP e até mesmo HTML.
    // Esse por sua vez gera um erro se o arquivo não existir, parando o nosso script.
    // EX: require "teste.php"

    require "teste.php";

?>

<?php

    require "arquivos/outroTeste.php";
    
?>