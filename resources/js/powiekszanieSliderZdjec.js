import Splide from '@splidejs/splide';
import GLightbox from 'glightbox';

// wydarzenia
const wydarzenia = new Splide('#galeria-zdjec', {
            type: 'loop',
            perPage: 3,
            perMove: 1,
    }).mount();

const wydarzeniaLightbox = new GLightbox({
        selector: ".glightbox-splide",
        touchNavigation: true,
        loop: true,
});

wydarzeniaLightbox.on('slide_changed', ({current}) =>{
        wydarzenia.go(current.index);
});

// Plan lekcji
new GLightbox({
        selector: ".glightbox",
        touchNavigation: true,
        loop: true,
});


