import Swiper, { Navigation, Pagination } from 'swiper';
Swiper.use([Navigation, Pagination]);

const swiper = new Swiper('.testimonials__swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    spaceBetween: 10,
    centeredSlides: true,
    slidesPerView: 1,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.testimonials__swiper-button-next',
        prevEl: '.testimonials__swiper-button-prev',
    },

});