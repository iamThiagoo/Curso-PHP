<?php

    // Semelhantes as shorts tags, nós podemos exibir um conteúdo sem precisar do echo
    // Ela acaba sendo uma ótima estratégia para resumir chamadas apenas para exibição de valores
    // Algo que seria igual isso:  <?php echo $dados ? > 
    // Vira isso: <?= $dados ? >
    // ** ELE NÃO FOI FEITO PARA GUARDAR VALORES APENAS PARA EXIBIR UM VALOR**

    require_once "dados.php";
    
?>

<h1>Seus dados</h1>

<div>
    <label>Nome: </label>
    <input type="text" value="<?= $nome ?>">
</div>
<div>
    <label>Sobrenome: </label>
    <input type="text" value="<?= $sobrenome ?>">
</div>
<div>
    <label>Idade: </label>
    <input type="text" value="<?= $idade ?>">
</div>
<div>
    <label>Email: </label>
    <input type="email" value="<?= $email ?>">
</div>
<div>
    <label>Senha: </label>
    <input type="password" value="<?= $senha ?>">
</div>
<div>
    <input type="submit" value="Trocar dados">
</div>