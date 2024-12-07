$(document).ready(function () {
    // header

    window.addEventListener('scroll', function () {
        const header = document.querySelector('header');
        const defaultLogo = document.querySelector('.default-logo');
        const stickyLogo = document.querySelector('.sticky-logo');

        if (window.scrollY > 0) {
            header.classList.add('sticky');
            defaultLogo.style.display = 'none';
            stickyLogo.style.display = 'flex';
        } else {
            header.classList.remove('sticky');
            defaultLogo.style.display = 'flex';
            stickyLogo.style.display = 'none';
        }
    });
});