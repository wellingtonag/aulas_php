<?php
    $menu = [
        "Home" => "index.php",
        "Sobre" => "sobre.php",
        "Serviços" => "servicos.php",
        "Contato" => "contato.php"
    ];
?>
    <ul>
    <?php foreach($menu as $nome => $link) : ?>
        <li><a href="<?= $link ?>"><?= $nome ?></a></li>
        <?php endforeach; ?>
    </ul>    
