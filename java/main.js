document.getElementById('login-button').addEventListener('click', function() {
    var bodyLogin = document.getElementById('bodylogin');
    if (bodyLogin.style.display === 'none' || bodyLogin.style.display === '') {
        bodyLogin.style.display = 'block';
    } else {
        bodyLogin.style.display = 'none';
    }
});
document.querySelector('.close-button').addEventListener('click', function() {
    document.getElementById('bodylogin').style.display = 'none'; // Esconde a janela de login
});

function scrollToSection() {
    var section = document.getElementById('your-story');
    var offset = 400; // Ajuste o valor do deslocamento conforme necessário
    var topPos = section.getBoundingClientRect().top + window.pageYOffset - offset;
    window.scrollTo({ top: topPos, behavior: 'smooth' });
}
window.onbeforeunload = function () {
    window.scrollTo(0, 0); // Rola para o topo quando a página é recarregada
}
const slides = document.querySelectorAll('.carousel-slide img');
    const slideContainer = document.querySelector('.carousel-slide');
    let currentIndex = 0;
    const interval = 3000; // Intervalo de 3 segundos

    function showNextSlide() {
        currentIndex++;
        if (currentIndex >= slides.length) {
            currentIndex = 0;
        }
        const offset = -currentIndex * 100;
        slideContainer.style.transform = `translateX(${offset}%)`;
    }

    setInterval(showNextSlide, interval);


document.getElementById('menu-button').addEventListener('click', function() {
    var menu = document.getElementById('vertical-menu');
    menu.classList.toggle('show');
});