let slideIndex = 1;
showSlides(slideIndex);

// Controla o próximo/voltar
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Controla o slide atual
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("slideImg");
    let dots = document.getElementsByClassName("dot");
    
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    
    // Esconde todos os slides
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    
    // Remove a classe "active" de todos os pontos
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    
    // Exibe o slide atual e ativa o ponto correspondente
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
}
