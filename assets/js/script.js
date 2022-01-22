function jumpTo (par){
    document.getElementById(par).scrollIntoView({
        behavior: "smooth",
        block: "center",
    });
}

