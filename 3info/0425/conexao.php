<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "meubanco";

    $conexao = null;

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    if(!$conexao){
        $mensagem_conexao = "<p style='color: red;'>
        Erro ao conectar com o banco de dados: " . mysqli_connect_error() . "</p>";
    }else {
        $mensagem_conexao = "<p style='color: green;'>
        Conexão com o banco de dados realizada com Mysqli!</p>";
    }
    // função que irá obter a conexão 
    function obterConexaoMySQLi() {
        global $conexao;
        return $conexao;
    }

    // função que exibe a mensagem de conexão
    function exibirMensagemConexaoMySQLi() {
        global $mensagem_conexao;
        echo $mensagem_conexao;
    }

?>