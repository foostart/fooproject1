var swiper = new Swiper('.swiper-container', {
        autoplay: {
            delay: 5000,
        },
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        speed: 2000,
        nextButton: '#swiper_btn_next',
        prevButton: '#swiper_btn_prev'

    });   