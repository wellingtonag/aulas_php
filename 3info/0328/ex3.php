<?php 
    // Array associativo
    $idade = [
        "Carlos" => 25,
        "Ana" => 19,
        "João" => 22

    ];

    echo "Carlos tem ". $idade["Carlos"] . " anos <br>";
    echo "Ana tem ". $idade["Ana"] . " anos <br>";
    echo "João tem ". $idade["João"] . " anos";

    echo "<br>";
    echo "------------------";
    echo "<br>";

    foreach($idade as $nome => $anos){
        // o que o php deve executar se for verdadeiro
        echo "$nome tem $anos anos de idade. <br>"; 
    }

?>