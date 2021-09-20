<?php

    // Com o INCLUDE nós podemos incluir arquivos PHP e até mesmo HTML em outro;
    // Ele não gera um erro se o arquivo não existir e sim um WARNING.
    // EX: include "arquivo.ext"

    include "testeInclude.php";
?>

<p>Realizado com sucesso!</p>
<p>O valor de C é igual a <?php echo $c; ?></p>