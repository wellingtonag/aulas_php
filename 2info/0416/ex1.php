<?php
    $a = 10;
    $b = 8;

    if($a == $b){
        echo "São iguais.";
    }else{
        echo "São Diferentes";
    }

    echo "<br>";
    echo "---------";
    echo "<br>";

    if ($a === $b){
        echo "São idênticos";
    }else{
        echo "Não são idênticos";
    }

    echo "<br>";
    echo "---------";
    echo "<br>";

    if($a != $b){
        echo "$a é diferente de $b";
    }else{
        echo "$a não é diferente de $b";
    }

    echo "<br>";
    echo "---------";
    echo "<br>";

    if($a !== $b){
        echo "$a é diferente de $b";
    }else{
        echo "$a não é diferente de $b";
    }

    echo "<br>";
    echo "---------";
    echo "<br>";

    if($a > $b){
        echo "$a é maior do que $b";
    }else{
        echo "$a não é maior do que $b";
    }

    echo "<br>";
    echo "---------";
    echo "<br>";

    if($a >= $b){
        echo "$a é maior ou igual a $b";
    }else{
        echo "$a não é maior ou igual $b";
    }

    
?>