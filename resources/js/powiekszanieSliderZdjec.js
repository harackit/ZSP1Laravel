import Splide from '@splidejs/splide';
import GLightbox from 'glightbox';

//zastepstwa
new GLightbox({
        selector: ".zastepstwaGLightbox",
        type: 'image',
        appendTo: 'body',
})

// wydarzenia
const wydarzenia = new Splide('#galeria-zdjec', {
            type: 'loop',
            perPage: 3,
            perMove: 1,
            autoplay: true,
    }).mount();

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
                type: 'loop',
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


