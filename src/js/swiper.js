// Import Swiper JS
import Swiper from 'swiper/bundle';
// Import Swiper styles
import 'swiper/css/bundle';

const team  = new Swiper('.team', {
  loop: true,
  slidesPerView: 1,
  centeredSlides: false,
  spaceBetween: 20,
  breakpoints: {
    1280: {
        slidesPerView:2.5,
        centeredSlides:true
    },
    992: {
        slidesPerView:2,
        centeredSlides:false
    }
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});