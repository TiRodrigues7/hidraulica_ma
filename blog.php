<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Blog - Hidráulica M.A.</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg3 ">
    <main>
            <!-- Cabeçário -->
            <?php include 'header.php'; ?>
        
        <h1 class="bg3 ">BLOG - Hidráulica M.A.</h1>

        <div class="blog-container">
            <!-- Primeiro Post -->
            <div class="post">
                <img src="imagens/hidraulica_2.jpg" alt="Portaria 24 horas">
                <h2>O que fazemos?</h2>
                <p class="pbg3">Realizamos manutenção em equipamentos hidráulicos e agrícolas, com serviços de correção, prevenção, montagem, soldas, usinagem, e recuperação de cilindros hidráulicos.</p>
                <a href="post1.php" class="btn3">Saiba mais <span>+</span></a>
            </div>

            <!-- Segundo Post -->
            <div class="post">
                <img src="imagens/post_2.jpg" alt="Ambiente Limpo e Organizado">
                <h2>Mestre da Metalurgia: A Trilogia da Perfeição - Soldagem, Usinagem e Hidráulica</h2>
                <p class="pbg3">A "Trilogia da Perfeição" na metalurgia combina soldagem, usinagem e hidráulica para criar sistemas precisos e eficientes, fundamentais para a indústria moderna.</p>
                <a href="post2.php" class="btn3">Saiba mais <span>+</span></a>
            </div>

            <!-- Terceiro Post -->
            <div class="post">
                <img src="imagens/Hidraulica M.A.jpg" alt="Portefólio da Empresa">
                <h2>PORTEFÓLIO DA EMPRESA</h2>
                <p  class="pbg3">Conheça a Hidráulica M.A. e os serviços que oferecemos para atender às necessidades dos nossos clientes.</p>
                <a href="post3.php" class="btn3">Saiba mais <span>+</span></a>
            </div>
        </div>

        <p class="result-info">Exibindo de 1 a 3 resultados (total: 3)</p>

        <div class="blog-container">
         <!-- Incluir o rodapé -->
         <?php include 'footer.php'; ?>
        </div>

    </main>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({offset:0});
    </script>
    <script src="script.js"></script>
</body>
</html>
