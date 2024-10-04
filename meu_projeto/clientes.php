<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Nossos Clientes - Meu Projeto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include_once('TEMPLATES/topo.php'); ?>
    <?php include_once('TEMPLATES/menu.php'); ?>

    <div class="container">
        <h1>Nossos Clientes</h1>
        
        <!-- Seção de Depoimentos -->
        <section class="depoimentos-clientes">
            <h2>O que nossos clientes dizem</h2>
            <blockquote>
                <p>"A qualidade do serviço prestado é excepcional. Recomendo a todos!"</p>
                <cite>- Cliente 1</cite>
            </blockquote>
            <blockquote>
                <p>"Atendimento rápido e eficiente. Me senti valorizado!"</p>
                <cite>- Cliente 2</cite>
            </blockquote>
            <blockquote>
                <p>"Os produtos atendem todas as minhas expectativas. Com certeza voltarei!"</p>
                <cite>- Cliente 3</cite>
            </blockquote>
        </section>

        <!-- Seção de Logos de Clientes -->
        <section class="logos-clientes">
            <h2>Alguns de nossos clientes</h2>
            <div class="logos">
                <img src="https://down-br.img.susercontent.com/file/br-11134103-7r98o-lxzzn0ike9vabd.webp" alt="pattydss237">
                <img src="https://down-br.img.susercontent.com/file/br-11134103-7r98o-lx433j9vdsxr76.webp" alt="daniheliovictor">
                <img src="https://www.adrenaline.com.br/wp-content/uploads/2020/08/PCGAMES.jpg" alt="Cliente 3">
                <img src="https://images.unsplash.com/photo-1519892407527-f79e50a5c09c" alt="Cliente 4">
            </div>
        </section>

        <!-- Seção de Estatísticas -->
        <section class="estatisticas-clientes">
            <h2>Nossos Números</h2>
            <div class="estatisticas">
                <div class="estatistica">
                    <h3>1000+</h3>
                    <p>Clientes Atendidos</p>
                </div>
                <div class="estatistica">
                    <h3>10 Anos</h3>
                    <p>De Experiência</p>
                </div>
                <div class="estatistica">
                    <h3>500+</h3>
                    <p>Projetos Concluídos</p>
                </div>
            </div>
        </section>
    </div>

    <?php include_once('TEMPLATES/rodape.php'); ?>

</body>
</html>
