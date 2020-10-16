function exibir_categoria (categoria) {

    let elementos = document.getElementsByClassName('box_produto');
    console.log(elementos);
    for (var i=0; i<elementos.length; i++) {
        console.log(elementos[i].id);
        if (categoria == elementos[i].id)
        elementos[i].style = "display:inline-block";
        else
        elementos[i].style = "display:none";
        }
}

let exibir_todos = () => {
    let elementos = document.getElementsByClassName('box_produto');
    
    for (var i=0; i<elementos.length; i++) {
        elementos[i].style = "display:inline-block";
    }
};


let destaque = (imagem) => {
    console.log(imagem);

   if (imagem.width == 120)
        imagem.width = 70;
    else
    imagem.width = 120;
};


function spotlight(li){
    li.style = "font-size:22px";
    
}

function defocus(li){
    li.style = "font-size:16px";
}

let defocus1 = (imagem) => {
    console.log(imagem);

   if (imagem.width == 120)
        imagem.width = 70;
    else
    imagem.width = 70;
};