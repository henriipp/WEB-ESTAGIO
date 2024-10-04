

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Carrinho - Meu Projeto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include_once('TEMPLATES/topo.php'); ?>
    <?php include_once('TEMPLATES/menu.php'); ?>

    <div class="container">
        <h1>Carrinho</h1>
        <div class="carrinho">
            <?php if (empty($_SESSION['carrinho'])): ?>
                <p>Seu carrinho está vazio.</p>
            <?php else: ?>
                <ul>
                    <?php foreach ($_SESSION['carrinho'] as $item): ?>
                        <li>
                            <?php echo $item['nome']; ?> - R$ <?php echo number_format($item['preco'], 2, ',', '.'); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <a href="checkout.php" class="botao">Finalizar Compra</a>
            <?php endif; ?>
        </div>
    </div>

    <?php include_once('TEMPLATES/rodape.php'); ?>

</body>
</html>
