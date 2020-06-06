window.onload = function(){
const toggle1 = document.querySelector('.btn1');
let box1 = document.getElementById('1');

const toggle2 = document.querySelector('.btn2');
let box2 = document.getElementById('2');

const toggle3 = document.querySelector('.btn3');
let box3 = document.getElementById('3');


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

toggle2.addEventListener("click", function()
{
    if(box2.classList.contains('container-active'))
    {
        box2.classList.remove('container-active');
    }
    else 
    {
        box2.classList.add('container-active');
        setTimeout(function(){window.location.href = "#2"}, 500)
    }
})

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
