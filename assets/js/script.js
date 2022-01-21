function jumpto (par){
    $('html, body').animate({
        scrollTop: $(toString(par)).offset().top
    }, 500);
}

