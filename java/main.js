document.getElementById('login-button').addEventListener('click', () => {
    const bodyLogin = document.getElementById('bodylogin');
    bodyLogin.style.display = 'flex';
    document.body.classList.add('no-scroll');
});

document.querySelector('.close-button').addEventListener('click', () => {
    const bodyLogin = document.getElementById('bodylogin');
    bodyLogin.style.display = 'none'; 
    document.body.classList.remove('no-scroll'); 
});

function scrollToSection() {
    var section = document.getElementById('your-story');
    var offset = 300; 
    var topPos = section.getBoundingClientRect().top + window.pageYOffset - offset;
    window.scrollTo({ top: topPos, behavior: 'smooth' });
}
window.onbeforeunload = function () {
    window.scrollTo(0, 0);
}
const slides = document.querySelectorAll('.carousel-slide img');
    const slideContainer = document.querySelector('.carousel-slide');
    let currentIndex = 0;
    const interval = 3000;

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

