<?php

    print_r($_SERVER);
    echo "<br><br>";

    echo $_SERVER["MYSQL_HOME"] . "<br>";
    
    if($_SERVER["SERVER_NAME"] === "localhost"){
        echo "Você está acessando essa página através do localhost. <br>";
    }
    else{
        echo "Você não está acessando essa página através do localhost. <br>";
    }