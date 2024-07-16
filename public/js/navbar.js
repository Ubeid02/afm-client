
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementsByTagName ('nav')[0];
    window.addEventListener('scroll', function(){
        console.log(window.scrollY);
        if (this.window.scrollY > 20){
            navbar.classList.replace('bg-transparent','nav-color');
        }
        else if (this.window.screenY <= 0){
            navbar.classList.replace('nav-color','bg-transparent');
        }
    });
    
    const navLinks = document.querySelectorAll('.nav-link');
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const body = document.body;

    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', function(event) {
            event.preventDefault();
            // console.log('Menu toggle clicked');
            this.classList.toggle('open');
            mobileMenu.classList.toggle('open');
            body.classList.toggle('menu-open');
            
            // Update aria-expanded
            const isOpen = mobileMenu.classList.contains('open');
            this.setAttribute('aria-expanded', isOpen);
            
            // Log state untuk debugging
            // console.log('Mobile menu open:', isOpen);
        });
    } else {
        // console.error('Menu toggle or mobile menu not found');
    }

    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
        });
    });
});
