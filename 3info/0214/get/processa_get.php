<?php
    //
    if(isset($_GET['nome']) && !empty($_GET['nome'])){
        $nome = htmlspecialchars($_GET['nome']);
        echo "<h1>Olá, $nome</h1>";
    } else{
        echo "<h1>Por favor, informe o seu nome!</h1>";
    }
?>