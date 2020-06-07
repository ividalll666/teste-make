window.onload = function(){
    

const toggle1 = document.querySelector('.btn1');
let box1 = document.getElementById('1');

toggle1.addEventListener("click", function()
{
    if(box1.classList.contains('container-active'))
    {
        box1.classList.remove('container-active');
    }
    else 
    {
        box1.classList.add('container-active');
        setTimeout(function(){window.location.href = "#1"}, 500)

    }
})


const toggle2 = document.querySelector('.btn2');
let homestatus = document.getElementById('container-section');

let conteudostatus = document.getElementById('container-conteudo');

toggle2.addEventListener("click", function()
{
    if( homestatus.classList.contains('home-show'))
    {
        // Esconderá a HOME
        homestatus.classList.remove('home-show');
        homestatus.classList.add('home-hide');
        setTimeout(function(){
            homestatus.style.display = 'none';
        }, 1005)

        setTimeout(function(){
            conteudostatus.classList.remove('conteudo-hide');
            conteudostatus.classList.add('conteudo-show');
            window.location.href = "#top";
        }, 1006)
    }
    else 
    {
        alert('erro.')
    }
})

const toggle3 = document.querySelector('.btn3');
let box3 = document.getElementById('3');

toggle3.addEventListener("click", function()
{
    if(box3.classList.contains('container-active'))
    {
        box3.classList.remove('container-active');
    }
    else 
    {
        box3.classList.add('container-active');
        setTimeout(function(){window.location.href = "#3"}, 500)
    }
})}
