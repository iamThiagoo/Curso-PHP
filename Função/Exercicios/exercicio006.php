<?php

    function parOuImpar($numero){
        if($numero % 2 === 0){
            echo "Par <br>";
        }
        else{
            echo "Ímpar <br>";
        }
    }

    parOuImpar(5);
    parOuImpar(2);
    parOuImpar(120);
    parOuImpar(121);