<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio de Grupos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 py-10">
    <div class="max-w-3xl mx-auto bg-white shadow-md rounded-md p-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Sorteio de Grupos</h1>
        <form method="post" enctype="multipart/form-data" class="mb-6">
            <div class="mb-4">
                <label for="arquivo_alunos" class="block text-gray-700 text-sm font-bold mb-2">
                    Selecione o arquivo de texto com a lista de alunos
                    <span class="text-gray-500">(um nome por linha)</span>:
                </label>
                <input type="file" name="arquivo_alunos" id="arquivo_alunos"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="tamanho_grupo" class="block text-gray-700 text-sm font-bold mb-2">
                    Tamanho dos Grupos:
                </label>
                <input type="number" id="tamanho_grupo" name="tamanho_grupo" min="1" value="4"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Sortear Grupos
            </button>
        </form>

        <div class="mt-8">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["arquivo_alunos"])) {
                $arquivo = $_FILES["arquivo_alunos"];
                $tamanho_grupo = intval($_POST["tamanho_grupo"]);

                if ($arquivo["error"] == 0) {
                    $nome_arquivo = $arquivo["tmp_name"];
                    $alunos = file($nome_arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                    $num_alunos = count($alunos);

                    if ($num_alunos < $tamanho_grupo || $tamanho_grupo <= 0) {
                        echo "<p class='text-red-500 font-semibold'>Erro: O tamanho do grupo é inválido ou há menos alunos do que o tamanho do grupo.</p>";
                    } elseif ($num_alunos > 0) {
                        shuffle($alunos);

                        $num_grupos = ceil($num_alunos / $tamanho_grupo);
                        echo "<h2 class='text-xl font-semibold text-gray-800 mb-4'>Grupos Sorteados:</h2>";

                        for ($i = 0; $i < $num_grupos; $i++) {
                            echo "<div class='mb-4'>";
                            echo "<h3 class='text-lg font-semibold text-gray-700 mb-2'>Grupo " . ($i + 1) . ":</h3>";
                            $grupo = array_slice($alunos, $i * $tamanho_grupo, $tamanho_grupo);
                            if (!empty($grupo)) {
                                echo "<ul class='list-disc pl-5'>";
                                foreach ($grupo as $aluno) {
                                    echo "<li class='text-gray-600'>" . htmlspecialchars($aluno) . "</li>";
                                }
                                echo "</ul>";
                            }
                            echo "</div>";
                        }
                    } else {
                        echo "<p class='text-gray-700'>O arquivo está vazio ou não contém nomes de alunos.</p>";
                    }
                } else {
                    echo "<p class='text-red-500 font-semibold'>Erro no upload do arquivo.</p>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>