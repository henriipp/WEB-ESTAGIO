<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Home - Meu Projeto </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include_once('TEMPLATES/topo.php'); ?>
    <?php include_once('TEMPLATES/menu.php'); ?>

    <div class="container">
        <h1>Bem-vindo!</h1>
        <p>Explore nossos produtos e serviços.</p>
        
        <!-- Seção de Destaque de Produtos -->
        <section class="destaque-produtos">
            <h2>Destaques do Mês</h2>
            <div class="produtos">
                <?php
                $produtos = json_decode(file_get_contents('produtos.json'), true);
                foreach ($produtos as $produto) {
                    echo "<div class='produto'>";
                    echo "<img src='{$produto['imagem']}' alt='{$produto['nome']}'>";
                    echo "<h3>{$produto['nome']}</h3>";
                    echo "<p>R$ " . number_format($produto['preco'], 2, ',', '.') . "</p>";
                    echo "<a href='carrinho.php?id={$produto['id']}' class='botao'>Adicionar ao Carrinho</a>";
                    echo "</div>";
                }
                ?>
            </div>
        </section>


        <!-- Seção de Depoimentos -->
        <section class="depoimentos">
            <h2>O que nossos clientes dizem</h2>
            <blockquote>
                <p>"Excelente atendimento e produtos de alta qualidade!"</p>
                <cite>- Cliente Satisfeito</cite>
            </blockquote>
            <blockquote>
                <p>"Adorei a experiência de compra, tudo muito fácil e rápido!"</p>
                <cite>- Outro Cliente</cite>
            </blockquote>
        </section>

    </div>

    <?php include_once('TEMPLATES/rodape.php'); ?>

</body>
</html>
