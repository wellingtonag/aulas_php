<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão MySQLi</title>
</head>
<body>
    <h1>Verificando conexão com DB (MySQLi)</h1>

    <?php
        // incluir o meu arquivo de conexão
        require_once 'conexao.php';

        // exibir a mensagem de conexão
        exibirMensagemConexaoMySQLi();

        // opcional - exibir a lista de usuarios
        $conexao = obterConexaoMySQLi();

        if($conexao){
            echo "<h2>Lista de usuários</h2>";
            $sql = "SELECT id, nome, email FROM usuarios";
            $resultado = mysqli_query($conexao, $sql);

            if($resultado){
                echo "<ul>";
                //motivo do erro - eu não declarei a variavel linha no "while"
                while($linha = mysqli_fetch_assoc($resultado)){
                    echo "<li>ID: " . $linha['id'] . 
                    ", Nome: " . $linha['nome'] . 
                    ", Email: " . $linha['email'] . "</li>";
                }
                echo "</ul>";
                // motivo do erro escrevi $result ao invés de resultado
                mysqli_free_result($resultado);
            } else{
                //motivo do erro - excrevi conxeao
                echo "erro ao conectar" . mysqli_error($conexao);
            }

            mysqli_close($conexao);
        }

    ?>

</body>
</html>