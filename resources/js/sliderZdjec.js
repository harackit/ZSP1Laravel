import Splide from '@splidejs/splide';

new Splide('#galeria-zdjec', {
            type: 'loop',
            perPage: 3,
            perMove: 1,
    }).mount();