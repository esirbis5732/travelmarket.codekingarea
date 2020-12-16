$(function () {
    if ($(window).width() < 768) {
        var tagsSwiper = new Swiper('.tags-slider', {
            slidesPerView: 'auto',
        })
    }
})