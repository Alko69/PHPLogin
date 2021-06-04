scroll = document.querySelectorAll('.js-scroll');

scroll.forEach((el) => {
    el.style.opacity = 0;
});

test = document.querySelector('.scroll-caption');

function testz(){
    test.getBoundingClientRect().top;
}