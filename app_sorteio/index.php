<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio de Temas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>🎲 Sorteio de Temas 🎲</h1>

    <div class="grid">
        <?php
        // Nomes fixos dos grupos
        $grupos = ["Rihanny", "Vinner", "Matheus Henrique", "Lana", "Livia Carvalho", "Kayke"];

        // Lista de temas disponíveis
        $temas = [
            "Lentidão na rede de uma empresa",
            "Vazamento de dados suspeito em uma instituição",
            "Difculdade de conexão Wi-Fi em uma escola",
            "Ataques de Hacker a uma loja virtual",
            "Queda frequente da conexão em uma rede corporativa",
            "Desempenho ruim ao acessar serviços de nuvem",
            "Interferência de sinal Wi-fi em um prédio comercial",
            "Falta de controle de acesso a dispositivos na rede de uma universidade"
        ];

        // Embaralha os temas
        shuffle($temas);

        // Exibe os grupos com os temas sorteados
        for ($i = 0; $i < count($grupos); $i++) {
            echo "<div class='grupo'>";
            echo "<h2>{$grupos[$i]}</h2>";
            echo "<p>📌 <strong>{$temas[$i]}</strong></p>";
            echo "</div>";
        }
        ?>
    </div>

    <button onclick="window.location.reload()">🔄 Sortear Novamente</button>
</div>

</body>
</html>
