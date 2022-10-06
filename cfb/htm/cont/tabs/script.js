function abrirTab(evt,nomeTab){
    const conteudo = document.getElementsByClassName('conteudoTab');
    for(var i=0;i<conteudoTab.length;i++){
        conteudoTab[i].style.display="none";
    }
    const btnTabs=document.querySelectorAll('[data-btnTabs]');
    for(var i=0;i<btnTabs.length;i++){
        btnTabs[i].classList.remove('ative');
    }
    document.getElementById(nomeTab).style.display="block";
}

document.getElementById("teste1").click();