import Swiper from "swiper";
import {
    Autoplay,
    EffectFade,
    Navigation,
    Pagination,
} from "swiper/modules";
import "swiper/swiper-bundle.css";

// SPECIAL OFFERS CAROUSEL
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

// ROOMS CAROUSEL
new Swiper(".rooms-carousel", {
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
        nextEl: ".room-next",
        prevEl: ".room-prev",
    },

    modules: [Autoplay,Navigation],
});

// TESTIMONIALS CAROUSEL
new Swiper(".testimonials-carousel", {
    loop: true,
    grabCursor: true,
    slidesPerView: 1,
    spaceBetween: 40,

    breakpoints: {
        950: {
            slidesPerView: 2,
        },
        
    },

    autoplay: {
        delay: 5000,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
    },

    navigation: {
        nextEl: ".testimonial-next",
        prevEl: ".testimonial-prev",
    },
    pagination: {
        el: ".testimonial-pagination",
      },

    modules: [Autoplay,Navigation,Pagination],
});