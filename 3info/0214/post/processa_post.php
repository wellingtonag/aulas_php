<?php
    if(isset($_POST['nome']) && !empty($_POST['nome'])){
        $nome = htmlspecialchars($_POST['nome']);
        echo "<h1>Olá, $nome</h1>";
    } else{
        echo "<h1>Por favor, informe o seu nome!</h1>";
    }
?>