<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
    <title>Hidráulica M.A. - Orçamento</title>
</head>
<body>
            <!-- Cabeçário -->
            <?php include 'header.php'; ?>
          
    <section> 
    <body class="body2">
    <section class="sec2">       
            <h2>
            <br><br>
            <div class="social-links">
                    <a href="https://api.whatsapp.com/send/?phone=5514991983527&text=Ol%C3%A1&type=phone_number&app_absent=0" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1600"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="https://www.instagram.com/hidraulicama/" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1500"><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="mailto: hidraulicama@gmail.com" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1300"><i class="fa-solid fa-envelope"></i></a>
                    <!-- <a href="#" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1400"><i class="fa-brands fa-facebook"></i></a> -->
                </div>
            </h2>

            <div class="quote-request">
                <i class="fa-solid fa-bullhorn"></i>
                <span>Solicite um <strong>orçamento!</strong></span>
            </div>
            <br>
                <form action="enviar_orc.php" method="POST" >
                <label>Nome </label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" autocomplete="off" required>
                <label>Sobrenome</label>
                <input type="text" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome" autocomplete="off" required>
                <label>Telefone</label>
                <input type="text" id="telefone" name="telefone" placeholder="Digite seu telefone" autocomplete="off" required>
                <label>Email</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" autocomplete="off" required>
                <label>Endereço Completo</label>
                <input type="text" id="endereco" name="endereco" placeholder="Digite seu endereço completo (Cidade, Rua, Número)" autocomplete="off" required>
                <label>Mais Detalhes</label>
                <textarea id="mais" name="mais" cols="16" rows="5" placeholder="Digite sua mais detalhes" required></textarea>

                <button type="submit" id="enviar-btn">Enviar</button>
                <div class="spinner" id="spinner"></div> <!-- Preloader -->
                </form>
            </section >    
            </body >
                <!--
                <input type="hidden" name="accessKey" value="042be0d3-84fa-4ae8-aaed-2434cda72cac">
                <input type="hidden" name="redirectTo" value="http://127.0.0.1:5501/obrigado.php">
                -->
            <div>
             <!-- Incluir o rodapé -->
             <?php include 'footer.php'; ?>
            </div>
    </section>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({offset:0});
    </script>
    <script src="script.js"></script>
</body>
</html>