<?php
    $array = ["Notebook" => "/notebook.png", "Teclado", "Mouse"];
    echo"<pre>";
    print_r($array);
    echo"<pre>";

    echo "<---------------->";
    foreach ($array as $produto) { // Loop para criar os links do menu
        echo "<h1>$produto</h1>". "<br>"; // Exibindo cada item do menu
        } 
?>