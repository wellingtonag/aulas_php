<?php include "includes/cabecalho.php"; ?> 

<main>
<div class="container">
        <h2>Entre em Contato</h2>

        <form action="processa_contato.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>
</main>

<?php include "includes/rodape.php"; ?>
