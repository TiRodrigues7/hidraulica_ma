<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
    <title>HIDRÁULICA M.A.</title>
</head>
<body>
            <!-- Cabeçário -->
            <?php include 'header.php'; ?>
        
    <section>
        <div class="main-container">
            <div class="image" data-aos="zoom-out" data-aos-duration="3000">
                <img src="Logo1.png" alt="">
            </div>
            <div class="content">
                <h1 data-aos="fade-left" data-aos-duration="1500" data-aos-delay="700">HIDRÁULICA <span>M.A.</span></h1>
                <div class="typewriter" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="900"> <span class="typewriter-text"></span><label for="">|</label></div>
                <p data-aos="flip-down" data-aos-duration="1500" data-aos-delay="1100">Hidráulica M.A.: Especialistas em Manutenção, Soldas e Usinagem para Soluções Industriais Confiáveis.</p>
                <div class="social-links">
                    <a href="https://api.whatsapp.com/send/?phone=5514991983527&text=Ol%C3%A1&type=phone_number&app_absent=0" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1600"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="https://www.instagram.com/hidraulicama/" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1500"><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="mailto: hidraulicama@gmail.com" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1300"><i class="fa-solid fa-envelope"></i></a>
                    <!-- <a href="#" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1400"><i class="fa-brands fa-facebook"></i></a> -->
                </div>
                <div class="btn" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1800">
                    <button onclick="window.location.href='https://hidraulicama.com.br/sobre.php';">Saiba mais</button>
                </div>
            </div>
        </div>
        <div class="main-container">
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