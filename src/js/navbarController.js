document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger');
    const mobileMenu = document.querySelector('.mobile-menu');

    hamburger.addEventListener('click', function() {
        mobileMenu.classList.toggle('active');
        hamburger.classList.toggle('active');
    });

    document.addEventListener('click', function(event) {
        const isClickInside = mobileMenu.contains(event.target) || hamburger.contains(event.target);

        if (!isClickInside && mobileMenu.classList.contains('active')) {
            mobileMenu.classList.remove('active');
            hamburger.classList.remove('active');
        }
    });
});