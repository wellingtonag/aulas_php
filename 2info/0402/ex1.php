<?php

    $idade = 0; 

    if($idade < 18){
       echo "<h3>Você é menor de idade</h3>";
    } elseif($idade >= 18 && $idade < 60){
        echo "<h3>adulto</h3>";
    }else{
        echo "<h3>idoso</h3>";
    }

?>