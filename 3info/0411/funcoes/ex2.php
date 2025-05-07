<?php
    $nome = "João";
    //função com parametros
    function saudacaoPersonalizada($nome){
        echo "Olá, $nome!"; //saudação personalizada
    }

    saudacaoPersonalizada($nome);
    echo "<br>";
    saudacaoPersonalizada("Anna");
    
    # chamada de função com padrão
    echo "<br>";
    echo "<h3>Função com padrão</h3>";

    function saudacaoOpcional($nome = "Visitante"){
        echo "Olá, $nome!";
    }
    saudacaoOpcional();


?>