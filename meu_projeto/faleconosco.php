<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Fale Conosco</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include_once('TEMPLATES/topo.php'); ?>
    <?php include_once('TEMPLATES/menu.php'); ?>

    <div class="container">
        <h1>Fale Conosco</h1>
        <form action="enviar.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" required></textarea>
            
            <input type="submit" value="Enviar">
        </form>
    </div>

    <?php include_once('TEMPLATES/rodape.php'); ?>

</body>
</html>
