<?php
    //função que calcula do quadrado de numero que serão inseridos em um array
    function quadrados($numeros){
        $resultado = []; 
        
        foreach ($numeros as $numero){
            $resultado[] = $numero * $numero;
        }
        return $resultado;
    }
    $numeros = [1,2,3,4]; // array original 
    $quadrados = quadrados($numeros);
    
    echo "<pre>";
    print_r($quadrados);
    echo "</pre>";

    echo "<br>";
    echo "<h3>exibir valor do array com ECHO</h3>";

    echo implode(", " ,$quadrados);

    echo "<br>";
    echo "<h3>exibir valor do array com Foreach em uma lista</h3>";
    
    echo "<ul>";
    foreach($quadrados as $q){
        echo "<li> $q </li>";
    }
    echo "</ul>";
?>