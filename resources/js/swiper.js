import Swiper from 'swiper';

import 'swiper/swiper-bundle.css';

// import Swiper and modules styles
import SwiperCore, { Navigation, Pagination } from 'swiper/core';

SwiperCore.use([Navigation, Pagination]);

const swiperOptions = {
    loop: true,
    loopAdditionalSlides: 1,
    effect: 'fade',
    fadeEffect: {
        crossFade: true,
    },
    slidesPerView: 1,
    loop: true,
    loopAdditionalSlides: 1,
    speed: 300,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        waitForTransition: false,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    pagination: {
        el: '.swiper-pagination',
    },
};

const swiper = new Swiper('.swiper', swiperOptions);
