window.onload = function(){
    //-- variaveis
    
    const toggleConteudo = document.querySelector('.btn2');
    const toggleHome = document.querySelector('.btn-home');

    let homestatus = document.getElementById('container-section');
    let conteudostatus = document.getElementById('container-conteudo');


    // ----- PÁGINA HOME: SELECÃO DE CATEGORIA

    // - ocultando as secões
    // conteudostatus.style.display = 'none';


    // ----- CATEGORIA CONTEÚDO ------ //
    

    toggleConteudo.addEventListener("click", function()
    {
        homestatus.classList.contains('home-show')
        // Esconderá a HOME
        homestatus.classList.remove('home-show');
        homestatus.classList.add('home-hide');
        setTimeout(function(){ 

            homestatus.classList.remove('home-hide');
            homestatus.classList.add('home-shutdown'); 

        }, 1005);

        setTimeout(function(){
            conteudostatus.classList.remove('content-shutdown');
            conteudostatus.classList.add('content-show');
            window.location.href = "#top";
        }, 1006);
    })

    // ----- PÁGINA DO CONTEÚDO: BOTÕES

    //--- Botão HOME
    toggleHome.addEventListener("click", function()
    {
        conteudostatus.classList.contains('content-show');

        // Esconderá a secão CONTEÚDO
        conteudostatus.classList.remove('content-show');
        conteudostatus.classList.add('content-hide');
        setTimeout(function(){
            
            conteudostatus.classList.remove('content-hide');
            conteudostatus.classList.add('content-shutdown'); 

        }, 1005)

        setTimeout(function(){
            homestatus.classList.remove('home-shutdown');
            homestatus.classList.add('home-show');
            window.location.href = "#top";
        }, 1006)

    })
    
}
    