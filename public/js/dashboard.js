document.addEventListener('DOMContentLoaded', function() {
    function handleIntersection(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('opacity-0');
                if (entry.target.classList.contains('about')) {
                    entry.target.classList.remove('-translate-y-full');
                } else if (entry.target.classList.contains('rental')) {
                    entry.target.classList.remove('-translate-y-full');
                }
                observer.unobserve(entry.target);
            }
        });
    }

    const observer = new IntersectionObserver(handleIntersection, {
        root: null,
        rootMargin: '0px',
        threshold: 0.8
    });

    const aboutSection = document.querySelector('.about');
    const rentalSection = document.querySelector('.rental');
    observer.observe(aboutSection);
    observer.observe(rentalSection);

    new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 0,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        speed: 1000,
        navigation: {
            nextEl: '#nextBtn',
            prevEl: '#prevBtn',
        },
    });
});