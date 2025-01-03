import Swiper from "swiper";
import {
    Autoplay,
    EffectFade,
    Navigation,
    Pagination,
} from "swiper/modules";
import "swiper/swiper-bundle.css";


// FEATURES CAROUSEL
new Swiper(".special-offers-carousel", {
    loop: true,
    grabCursor: true,
    slidesPerView: 1,
    spaceBetween: 40,

    breakpoints: {
        850: {
            slidesPerView: 2,
        },
        1280: {
            slidesPerView: 3,
        },
        
    },

    autoplay: {
        delay: 5000,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
    },

    navigation: {
        nextEl: ".offer-next",
        prevEl: ".offer-prev",
    },

    modules: [Autoplay,Navigation],
});