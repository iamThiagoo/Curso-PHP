<?php
    include_once "backend.php";
?>

<h1>Concessionária do seu Zé</h1>
<h2><?= $nome ?>, seja muito bem-vindo!</h2>

<h3>Confira os nossos carros:</h3>
    <ul>
        <?php foreach($carros as $carro): ?> 
            <li><?= $carro ?></li>
        <?php endforeach; ?>
    </ul>

<h3>Confira as nossas motos:</h3>
    <ul>
        <?php foreach($motos as $moto): ?>
            <li><?= $moto ?></li>
        <?php endforeach; ?>
    </ul>