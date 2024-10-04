

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Checkout - Meu Projeto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include_once('TEMPLATES/topo.php'); ?>
    <?php include_once('TEMPLATES/menu.php'); ?>

    <div class="container">
        <h1>Checkout</h1>
        <?php if (!empty($mensagem)): ?>
            <p><?php echo $mensagem; ?></p>
        <?php else: ?>
            <form action="checkout.php" method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>
                
                <input type="submit" value="Finalizar Compra">
            </form>
        <?php endif; ?>
    </div>

    <?php include_once('TEMPLATES/rodape.php'); ?>

</body>
</html>
