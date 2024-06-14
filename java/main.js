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

document.addEventListener('DOMContentLoaded', (event) => {
    const modals = document.querySelectorAll('.modal');
    const openModalBtns = [
        document.getElementById("openModalBtn1"),
        document.getElementById("openModalBtn2"),
        document.getElementById("openModalBtn3"),
        document.getElementById("openModalBtn4"),
        document.getElementById("openModalBtn5"),
        document.getElementById("openModalBtn6"),
        document.getElementById("openModalBtn7"),
        document.getElementById("openModalBtn8")
    ];
    const closeModalBtns = document.querySelectorAll(".close-btn");

    openModalBtns.forEach((btn, index) => {
        btn.onclick = function() {
            modals[index].style.display = "block";
            document.body.style.overflow = "hidden"; // Desativa a barra de rolagem
        }
    });

    closeModalBtns.forEach((btn, index) => {
        btn.onclick = function() {
            modals[index].style.display = "none";
            document.body.style.overflow = ""; // Restaura a barra de rolagem
        }
    });

    window.onclick = function(event) {
        modals.forEach((modal) => {
            if (event.target === modal) {
                modal.style.display = "none";
                document.body.style.overflow = ""; // Restaura a barra de rolagem
            }
        });
    }
});