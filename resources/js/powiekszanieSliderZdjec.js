import Splide from '@splidejs/splide';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';
import GLightbox from 'glightbox';

//zastepstwa
new GLightbox({
        selector: ".zastepstwoDzisGLightbox",
        type: 'image',
        appendTo: 'body',
})
new GLightbox({
        selector: ".zastepstwoJutroGLightbox",
        type: 'image',
        appendTo: 'body',
})

// wydarzenia
const wydarzenia = new Splide('#galeria-zdjec', {
            type: 'loop',
            breakpoints: {
                535: {perPage: 1},
                1255: {perPage: 2},
                3840: {perPage: 3},
            },
            perMove: 1,
            pagination: false,
            gap: 25,
    }).mount({AutoScroll});

const wydarzeniaLightbox = new GLightbox({
        selector: ".wydarzeniaGSplide",
        touchNavigation: true,
        loop: true,
});

wydarzeniaLightbox.on('slide_changed', ({current}) =>{
        wydarzenia.go(current.index);
});

// Plan lekcji
const planyLekcji = new Splide('#planyLekcji', {
                type: 'fade',
                rewind: true,
                pagination: false,
                autoplay: true,
        }).mount();

const planyLekcjiLightbox = new GLightbox({
        selector: ".planyLekcjiGSplide",
        touchNavigation: true,
        loop: true,
});

planyLekcjiLightbox.on('slide_changed', ({current}) => {
        planyLekcji.go(current.index);
});


