<?php 
    // Array multidimensional
    $produtos = [
        ["Nome" => "Notebook", "Preço" => 3500, "Estoque" => 5], // indice 0
        ["Nome" => "Mouse", "Preço" => 150, "Estoque" => 10], // indice 1
        ["Nome" => "Teclado", "Preço" => 500, "Estoque" => 30] //indice 2
    ];
    echo "<pre>";
    print_r($produtos);
    echo "</pre>";
    
    echo "<br>";
    echo "-------------";
    echo "<br>";

    echo "Produto: " . $produtos[0]["Nome"] . " - Preço: R$" . $produtos[0]["Preço"] . "<br>";
    echo "Produto: " . $produtos[1]["Nome"] . " - Preço: R$" . $produtos[1]["Preço"] . "<br>";
    echo "Produto: " . $produtos[2]["Nome"] . " - Preço: R$" . $produtos[2]["Preço"];
    
    echo "<br>";
    echo "-------------";
    echo "<br>";
    
    foreach($produtos as $produto){
        echo "Nome: " .$produto["Nome"] . 
             " | Preço: " .$produto["Preço"] . 
             " | Estoque: " .$produto["Estoque"] . "<br>";
    };

?>