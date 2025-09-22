var swiper = new Swiper(".MenuSwiper", {
            slidesPerView: 3,
            loop: true,
            spaceBetween: 1,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            breakpoints: {
                320: {slidesPerView: 1, spaceBetween:2},
                768: {slidesPerView: 2, spaceBetween:2},
                1024: {slidesPerView: 3, spaceBetween: 20},
            }
            
        });
        const wrapper = document.querySelector('.MenuSwiper .swiper-wrapper');
        const slides = wrapper.querySelectorAll('.MenuSwiper .swiper-slide');

        slides.forEach(slide => {
        slide.addEventListener('mouseenter', () => {
            wrapper.classList.add('hovering');
            slide.classList.add('hovered');
        });

        slide.addEventListener('mouseleave', () => {
            wrapper.classList.remove('hovering');
            slide.classList.remove('hovered');
        });
});