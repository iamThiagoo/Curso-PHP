<?php
    include_once "funcao.php";
?>

<h1>Resultados das somas da nossa função</h1>
<ul>
    <?php foreach($arr as $resultado): ?>
    <li><?= $resultado; ?></li>
    <?php endforeach; ?>
</ul>