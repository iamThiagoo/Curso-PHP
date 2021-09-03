<?php
    include_once "script.php";  
?>

<!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ordenando Arrays - Lista</title>
        <style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                -webkit-user-select: none;
            }
            body{
                width: 100%;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #DA0037;
            }
            .box{
                padding: 15px;
                border-radius: 8px;
                display: grid;
                place-items: center;
                background-color: #EDEDED;
            }
            .box h1{
                margin-bottom: 20px;
            }
            .box ol li{
                font-size: 18px;
                margin-bottom: 5px;
                font-weight: bold;
            }
            .box:hover{
                box-shadow: 10px 10px black;
                background-color: #E1E5EA;
                transition: 1s;
            }

        </style>
    </head>
    <body>
        <div class="box">
            <h1>Ranking do jogo de basquete</h1>
            <ol>
                <?php foreach($pontuação as $nome => $valor): ?>
                    <li><?= $nome ?> <?= $valor ?> pts</li>
                <?php endforeach; ?>
            </ol>
        </div>
    </body>
</html>