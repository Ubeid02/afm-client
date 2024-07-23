document.addEventListener('DOMContentLoaded', function() {
    function handleIntersection(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('opacity-0', '-translate-y-full');
                observer.unobserve(entry.target);
            }
        });
    }

    const observer = new IntersectionObserver(handleIntersection, {
        root: null,
        rootMargin: '0px',
        threshold: 0.7
    });

    const elements = document.querySelectorAll('.image-logo, .about-description, .visi-misi, .location');
    elements.forEach(el => observer.observe(el));
});