function jumpTo(par) {
    document.getElementById(par).scrollIntoView({
        behavior: "smooth",
        block: "center",
    });
}


/* Máscaras ER */
function mascara(o, f) {
    v_obj = o
    v_fun = f
    setTimeout("execmascara()", 1)
}

function execmascara() {
    v_obj.value = v_fun(v_obj.value)
}

function mtel(v) {
    v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
    v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}

function id(el) {
    return document.getElementById(el);
}

window.onload = function() {
    id('telefone').onkeyup = function() {
        mascara(this, mtel);
    }
}

const loadmore = document.querySelector('#loadmore');
let currentItems = 5;
loadmore.addEventListener('click', (e) => {
    const elementList = [...document.querySelectorAll('.carrossel-trabalhos .ultimos-trabalhos')];
    for (let i = currentItems; i < currentItems + 4; i++) {
        if (elementList[i]) {

            elementList[i].style.opacity = '1';
            elementList[i].style.display = 'block';
            elementList[i].style.animation = 'fadeIn 1s';
            elementList[i].style.webkitAnimation = 'fadeIn 1s';
        }
    }
    currentItems += 5;

    // Load more button will be hidden after list fully loaded
    if (currentItems >= elementList.length) {

        event.target.style.display = 'fadeOut 2s';
        event.target.style.display = 'fadeOut 2s';
        event.target.style.display = 'none';

    }
});