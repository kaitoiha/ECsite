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
};

// 画面サイズがスマートフォンの場合、directionを変更し、paginationを非表示にする
if (window.innerWidth <= 768) {
  swiperOptions.direction = 'horizontal'; // 画面サイズがスマートフォンの場合、directionをhorizontalに変更
  swiperOptions.pagination = false; // 画面サイズがスマートフォンの場合、paginationを非表示にする
} else {
  swiperOptions.direction = 'vertical'; // 画面サイズがスマートフォンでない場合、directionをverticalに設定
  swiperOptions.pagination = {
    el: '.swiper-pagination',
  };
}

const swiper = new Swiper('.swiper', swiperOptions);


