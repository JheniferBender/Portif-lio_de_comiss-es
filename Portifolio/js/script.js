document.addEventListener("DOMContentLoaded", () => {
    const progresses = document.querySelectorAll(".progress");

    progresses.forEach(bar => {
        let target = bar.getAttribute("data-width");
        let width = 0;

        let interval = setInterval(() => {
            if (width >= target) {
                clearInterval(interval);
            } else {
                width++;
                bar.style.width = width + "%";
                bar.textContent = width + "%";
            }
        }, 20); // velocidade da animação (quanto menor, mais rápido)
    });
});

const btnTopo = document.getElementById('btnTopo');

window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        btnTopo.classList.add('show');
    } else {
        btnTopo.classList.remove('show');
    }
});

btnTopo.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});


const btnMenu = document.getElementById('btnMenu');
const navMenu = document.querySelector('.nav-menu');

btnMenu.addEventListener('click', () => {
    navMenu.classList.toggle('open');
    btnMenu.classList.toggle('open');
});

// Fecha menu ao clicar em algum link do menu
document.querySelectorAll('.nav-menu a').forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('open');
        btnMenu.classList.remove('open');
    });
});

const swiper = new Swiper('.portfolio-swiper', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    preventClicks: false,               // 🔹 Permite clicar nos links
    preventClicksPropagation: false,    // 🔹 Não bloqueia a propagação do clique
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    }
});

document.addEventListener('contextmenu', event => event.preventDefault());
document.addEventListener('dragstart', event => {
    if (event.target.tagName === 'IMG') event.preventDefault();
});

