<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- CDN do Font Awesome -->
    <script src="https://kit.fontawesome.com/782e4cfd7d.js" crossorigin="anonymous"></script>

    <!-- CSS da página inicial - Mobile -->
    <link rel="stylesheet" href="css/styles/mobile/HomeMobile.css">

    <!-- javascript da página home -->
    <script src="js/jshome/home.js"></script>

    <!-- página inicial desktop -->
    <link rel="stylesheet" href="css/styles/deskop/home.css">

    <!-- CSS da secão dos Relatos -->

    <!-- CSS da secão do conteúdo: VERSÃO MOBILE -->
    <link rel="stylesheet" href="css/styles/mobile/ConteudoMobile.css">

    <!-- CSS da secão do conteudo: VERSÃO DESKTOP -->
    <link rel="stylesheet" href="css/styles/deskop/conteudo.css">

    <!-- CSS da secão de compra do curso -->

    <!-- css do slick 01 -->
    <link rel="stylesheet" href="css/slick/slick.css">

    <!-- css do slick 02: meu tema -->
    <link rel="stylesheet" href="css/slick/slick-theme.css">

    <!-- Aos library -->
    <link rel="stylesheet" href="css/aos/aos.css">

    

    <title> Maquiagem </title>
</head>

<!-- ----------------------------------------------------------- -->

<body>

    <!------------------------------------------ MAIN: VERSÃO MOBILE -------------------------------------------------------->

    <main id="container-section-mobile" class="home-show mobile">

        
        <!-- PRIMEIRA CATEGORIA: Onde será armazenado informacões sobre o curso -->
        <section class="container" id="1">
            <figure>

                <div class="text" data-aos="zoom-in-down">
                    <h1> Fique <span class="destaque"> magnífica. </span> </h1>
                    <p> Um breve olhar no conteúdo. </p>
                </div>

                <!-- Imagem da menina do curso -->
                <img src="img/foto.jpg" alt="">
            </figure>

            <!-- Botão para ir pro conteúdo -->
            <button class="btn btn2"> Meu conteúdo </button>

            
            <button class="btn-buy" onclick="window.location.href='#3' ">
                <i class="fas fa-angle-down"></i>
            </button>
        </section>

        <!-- SEGUNDA CATEGORIA: relatos das pessoas  -->
        <section class="container" id="2">
            <figure>
                <div class="text" data-aos="zoom-in-down">
                    <h1> Para nós, <span class="destaque"> você importa. </span></h1>
                    <p> Veja a comprovação de quem fez. </p>
                </div>

                <!-- Imagem sobre maquiagem -->
                <img id="pic1" src="img/foto5.jpg" alt="">
            </figure>

            <!-- Botão para ir pros relatos -->
            <button class="btn btn1" > Relatos do Curso </button>
        </section>



        <!-- TERCEIRA CATEGORIA: Onde será discutido precos e redirecionamento pra hotmart -->
        <section class="container" id="3">
            <figure>                

                <div class="text" data-aos="zoom-in-down">
                    <h1> <span class="destaque"> Assine agora! </span> </h1>
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

    <!--  -->
    <!--  -->
    <!--  -->

    <!------------------------------------ MAIN: VERSÃO desktop ------------------------------------------------------>

    <main id="container-section-desktop" class="desktop" data-aos="zoom-in-up">

        <section id="title-home">
            <div id="container-title">
                <h1>  <span id="makes"> Makes</span> 
                        <span id="silabas"> 
                            <i class="silaba">per</i> <br> 
                            <i class="silaba">fei</i> <br> 
                            <i class="silaba">tas.</i> 
                        </span>
                </h1>
            </div>
        </section>

        <section id="pic-home">

            <div id="container-pics">

                
                <!-- PRIMEIRA CATEGORIA: Onde será armazenado informacões sobre o curso -->

                <article class="container" id="1">
                    <figure onclick="window.location.href='#container-conteudo-desktop'">
                        <div class="subtitle-pic">
                            <h1> Fique Magnífica</h1>
                            <p> Clique e veja o conteúdo</p>
                            <p class="arrowdown"> <i class="fas fa-angle-double-down"></i></p>
                        </div>


                        <!-- Imagem da menina do curso -->
                        <img src="img/foto.jpg" alt="">
                    </figure>
                </article>

                <!-- SEGUNDA CATEGORIA: relatos das pessoas  -->
                <article class="container" id="2">
                    <figure>
                        <div class="subtitle-pic">
                            <h1> Sua Opinião Importa.</h1>
                            <p> Veja a de quem adquiriu. </p>
                            <p class="arrowdown"><i class="fas fa-angle-double-down"></i></p>
                        </div>

                        <!-- Imagem sobre maquiagem -->
                        <img id="pic1" src="img/foto5.jpg" alt="">
                    </figure>
                </article>
                
                <!-- TERCEIRA CATEGORIA: Onde será discutido precos e redirecionamento pra hotmart -->
                <article class="container" id="3">
                    <figure>  
                        <div class="subtitle-pic">
                            <h1> Veja como Assinar</h1>
                            <p> Precos, perguntas e mais.</p>
                            <p class="arrowdown"><i class="fas fa-angle-double-down"></i></p>
                        </div>             
                        <!-- Imagem sobre o curso -->
                        <img src="img/foto3.jpg" alt="">
                    </figure>
                </article>

            </div>

        </section>

    </main>

    <!--  -->
    <!--  -->
    <!--  -->

    <!------------------------------------- CONTEÚDO VERSÃO MOBILE -------------------------------------------->

    <main id="container-conteudo-mobile" class="content-shutdown mobile">
            
        <div id="div-content" data-aos="fade-down">   
            <h1> Makes  <span class="destaque"> Perfeitas.. </span> </h1>
            <p id="sub">..no alcance de um clique!</p>
            
            <p id="desc"> Aqui você vai aprender a ter maquiagens 
                lindas com um conteúdo super didático, simples
                divertido e intuitivo. Vamos dar uma olhadinha:
            </p>
            
            <div class="carousel1" data-aos="fade-zoom-in">
                <img src="img/m1.jpg" alt="">
                <img src="img/m2.jpg" alt="">
                <img src="img/m3.jpg" alt="">
            </div>
        </div>
        
        <ul id="content-curso" data-aos="fade-down">
        
            <h1> Veremos no curso:</h1>
            <li> Tipos de Pincéis </li>
            <li> Corretivo e seus tons</li>
            <li> Bases e seus tons</li> 
            <li> Pó: Os diferentes tipos</li> 
            <li> Contornos </li>
            <li> Blush e seus tons</li>                  
            <li> Iluminadores</li>
            <li> Delineados</li>
            <li> Batons e tons</li>
            <li> Sombrancelha </li>
            <li> Olho </li>
        
            <li> Delineados</li>
            <li> Batons e tons</li>
            <li> Sombrancelha </li>
            <li> aaa </li>
        </ul> 

        <div class = "btn-bar">
            <button class=" btn-content btn-home"> <i class="fas fa-home"></i> </button>
            <button class=" btn-content btn-preview">  <i class="fas fa-user-check"></i>  </button>
            <button class=" btn-content btn-review"> <i class="fas fa-shopping-bag"></i> </button>
        </div>
    </main>

    <!--  -->
    <!--  -->
    <!--  -->

    <!------------------------------------- CONTEÚDO VERSÃO DESKTOP -------------------------------------------->

    <main id="container-conteudo-desktop" class="content-shutdown desktop">
         
        <section id="section-carousel" data-aos="zoom-in-up">

            <div class="carousel1">
                <img src="img/m1.jpg" alt="">
                <img src="img/m2.jpg" alt="">
                <img src="img/m3.jpg" alt="">
            </div>

        </section>

        <section id="section-desc-content" data-aos="zoom-in-up">

            <div class="div-content">  

                <h1> Uma <span id="espiadinha">espiadinha</span> no conteúdo: </h1>
                
                <p id="desc"> Aqui você vai aprender a ter maquiagens 
                    lindas com um conteúdo super didático, simples
                    divertido e intuitivo. Vamos dar uma olhadinha:
                </p>

                <h1> Você terá acesso..</h1>        
            </div>
        
            <ul id="content-curso" >
            
                <div id="content-1">
                    
                    <li> Tipos de Pincéis </li>
                    <li> Corretivo e seus tons</li>
                    <li> Bases e seus tons</li> 
                    <li> Pó: Os diferentes tipos</li> 
                    <li> Contornos </li>
                    <li> Blush e seus tons</li>                  
                    <li> Iluminadores</li>

                </div>

                <div id="content-2">

                    <li> Delineados</li>
                    <li> Batons e tons</li>
                    <li> Sombrancelha </li>
                    <li> Olho </li>
                    <li> Delineados</li>
                    <li> Batons e tons</li>
                    <li> Sombrancelha </li>

                </div>
            </ul> 

            <div class="div-content">

                <h1> Conteúdo que não acaba! </h1>

                <p> São X videos mostrando que você pode chegar em resultados 
                    incríveis, e só depende de você! 
                </p>
            </div>


        </section>
    </main>























    <!--  -->
    <!--  -->
    <!--  -->

    <!-- CDN do JS Query -->
    <script  src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="  crossorigin="anonymous"></script>

    <!-- Script do Slick -->
    <script src="js/slick/slick.js"></script>

    <!-- Script do funcionamento da Slick: Configuracões -->
    <script>
        $(document).ready(function()
        {
            $('.carousel1').slick({
                autoplay: true, dots: true, arrows: false
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