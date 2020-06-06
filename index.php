<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- CDN do Font Awesome -->
    <script src="https://kit.fontawesome.com/782e4cfd7d.js" crossorigin="anonymous"></script>

    <!-- CSS da página inicial - Mobile -->
    <link rel="stylesheet" href="css/styles/HomeMobile.css">

    <!-- CSS da secão dos Relatos -->

    <!-- CSS da secão do conteúdo -->

    <!-- CSS da secão de compra do curso -->

    <!-- css do slick 01 -->
    <link rel="stylesheet" href="css/slick/slick.css">

    <!-- css do slick 02: meu tema -->
    <link rel="stylesheet" href="css/slick/slick-theme.css">

    <!-- Aos library -->
    <link rel="stylesheet" href="css/aos/aos.css">

    <script src="js/javascript.js"></script>

    <title> Maquiagem </title>
</head>

<!-- ----------------------------------------------------------- -->

<body>

    <!-- MAIN: Conteúdo que armazena as categorias (secoes) do site -->
    <main id="container-section">

        <!-- PRIMEIRA CATEGORIA: relatos das pessoas  -->
        <section class="container" id="1">
            <figure>

                <div class="text" data-aos="zoom-in-down">
                    <h1> Sua opinião importa.</h1>
                    <p> Veja a comprovação de quem fez. </p>
                </div>

                <!-- Imagem sobre maquiagem -->
                <img src="img/foto5.jpg" alt="">
            </figure>

            <!-- Botão para ir pros relatos -->
            <button class="btn btn1" > Relatos do Curso </button>

            <button class="btn-buy" onclick="window.location.href='#3' ">
                <i class="fas fa-angle-down"></i>
            </button>
        </section>

        <!-- SEGUNDA CATEGORIA: Onde será armazenado informacões sobre o curso -->
        <section class="container">
            <figure>

                <div class="text" data-aos="zoom-in-down">
                    <h1> Para ficar magnífica.</h1>
                    <p> Um breve olhar no conteúdo. </p>
                </div>

                <!-- Imagem da menina do curso -->
                <img src="img/foto.jpg" alt="">
            </figure>

            <!-- Botão para ir pro conteúdo -->
            <button class="btn btn2"> Meu conteúdo </button>
        </section>


        <!-- TERCEIRA CATEGORIA: Onde será discutido precos e redirecionamento pra hotmart -->
        <section class="container" id="3">
            <figure>                

                <div class="text" data-aos="zoom-in-down">
                    <h1> Veja como assinar.</h1>
                    <p> Preços, como adquirir, perguntas. </p>
                </div>

                <!-- Imagem sobre o curso -->
                <img src="img/foto3.jpg" alt="">
            </figure>

            <!-- Botão para ir pro curso -->
            <button  class="btn btn3"> O Curso </button>

            
            <button class="btn-buy" onclick="window.location.href='#1' ">
                <i class="fas fa-angle-double-up"></i>
            </button>
        </section>
    
    </main>

    <!-- CDN do JS Query -->
    <script  src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="  crossorigin="anonymous"></script>

    <!-- Script do Slick -->
    <script src="js/slick/slick.js"></script>

    <!-- Script do funcionamento da Slick: Configuracões -->
    <script>
        $(document).ready(function()
        {
            $('.carousel1').slick({
                autoplay: true, dots: true
            });
        });
    </script>

    <!-- Script da AOS  -->
    <script src="js/aos/aos.js"></script>

    <!-- Script do funcionamento do AOS: Configuracões -->
    <script>
        AOS.init(
            {
                duration: 1000,
            }
        );
    </script>

</body>
</html>