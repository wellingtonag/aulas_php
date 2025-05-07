<?php
$paginas = ["Home", "Produtos", "Contato", "Blog"]; // Definição das páginas do site

echo "<nav><ul>";
foreach ($paginas as $pagina) { // Loop para criar os links do menu
    $link = strtolower($pagina) . ".php"; // Convertendo para minúsculas e adicionando ".php"
    echo "<li><a href='$link'>$pagina</a></li>"; // Exibindo cada item do menu
}
echo "</ul></nav>";
?>
