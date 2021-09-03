<?php
    include_once "script.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dados de usuários</title>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: Arial, Helvetica, sans-serif;
                -webkit-user-select: none;
            }
            body{
                height: 100vh;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #DA0037;
            }
            table{
                padding: 10px;
                border: 0;
                background: #EEEEEE;
                border-radius: 10px;
            }
            caption{
                font-size: 25px;
                margin-bottom: 10px;
                color: #fff;
            }
            td, th{
                padding: 5px;
                border: 0;
                border-right: 1px solid black;
                text-align: center;
            }
            th{
                border-bottom: 1px solid black;
            }
        </style>
    </head>
    <body>
        <table border="1">
            <caption><strong>Nossos usuários</strong></caption>
            <tr>
                <?php foreach($dados as $dado): ?>
                <th><?= $dado; ?></th>
                <?php endforeach; ?>
            </tr>  
            <tr>
                <?php foreach($pessoa1 as $value): ?>
                <td><?= $value; ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <?php foreach($pessoa2 as $value): ?>
                <td><?= $value; ?></td>
                <?php endforeach; ?>
            </tr>  
            <tr>
                <?php foreach($pessoa3 as $value): ?>
                <td><?= $value; ?></td>
                <?php endforeach ?>
            </tr>
            <tr>
                <?php foreach($pessoa4 as $value): ?>
                <td><?= $value; ?></td>
                <?php endforeach ?>
            </tr>
            <tr>
                <?php foreach($pessoa5 as $value): ?>
                <td><?= $value ?></td>
                <?php endforeach; ?>
            </tr>
        </table>
    </body>
</html>