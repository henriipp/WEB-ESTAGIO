<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Loja - Meu Projeto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include_once('TEMPLATES/topo.php'); ?>
    <?php include_once('TEMPLATES/menu.php'); ?>

    <div class="container">
        <h1>Loja</h1>
        <div class="produtos">
            <?php
            $produtos = json_decode(file_get_contents('produtos.json'), true);
            foreach ($produtos as $produto) {
                echo "<div class='produto'>";
                echo "<img src='{$produto['imagem']}' alt='{$produto['nome']}'>";
                echo "<h2>{$produto['nome']}</h2>";
                echo "<p>{$produto['descricao']}</p>";
                echo "<p>Preço: R$ " . number_format($produto['preco'], 2, ',', '.') . "</p>";
                echo "<a href='carrinho.php?id={$produto['id']}' class='botao'>Adicionar ao Carrinho</a>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

    <?php include_once('TEMPLATES/rodape.php'); ?>

</body>
</html>
