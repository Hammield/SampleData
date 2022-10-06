const menu=document.querySelectorAll('[data-menu]');
const cssAtivo='ativo';

menu.forEach(function(elemento){
    elemento.addEventListener('click',function(){
        for(i=0;i<4;i++){
            menu[i].classList.remove(cssAtivo);
        }
        elemento.classList.add(cssAtivo);
    })
})