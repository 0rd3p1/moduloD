// Primeiro Container

const container1 = document.querySelector('.container1');

const options1 = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5,
};

const callback1 = (entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            var a = window.document.getElementsByClassName('hidden')
            Array.from(a).forEach((elemento) => {
                elemento.classList.remove('hidden');
                elemento.classList.add('visible');
            })
        } else {
            var a = window.document.getElementsByClassName('visible')
            Array.from(a).forEach((elemento) => {
                elemento.classList.remove('visible');
                elemento.classList.add('hidden');
            })
        }
    });
};

const observer1 = new IntersectionObserver(callback1, options1);

observer1.observe(container1);

// Segundo Container

const container2 = document.querySelector('.container2');

const options2 = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5,
};

const callback2 = (entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            var a = window.document.getElementsByClassName('hidden')
            Array.from(a).forEach((elemento) => {
                elemento.classList.remove('hidden');
                elemento.classList.add('visible');
            })
        } else {
            var a = window.document.getElementsByClassName('visible')
            Array.from(a).forEach((elemento) => {
                elemento.classList.remove('visible');
                elemento.classList.add('hidden');
            })
        }
    });
};

const observer2 = new IntersectionObserver(callback2, options2);

observer2.observe(container2);

// Terceiro Container

const container3 = document.querySelector('.container3');

const options3 = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5,
};

const callback3 = (entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            var a = window.document.getElementsByClassName('hidden')
            Array.from(a).forEach((elemento) => {
                elemento.classList.remove('hidden');
                elemento.classList.add('visible');
            })
        } else {
            var a = window.document.getElementsByClassName('visible')
            Array.from(a).forEach((elemento) => {
                elemento.classList.remove('visible');
                elemento.classList.add('hidden');
            })
        }
    });
};

const observer3 = new IntersectionObserver(callback3, options3);

observer3.observe(container3);