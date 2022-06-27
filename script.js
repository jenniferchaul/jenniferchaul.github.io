function toggleMenu() {
    const navMobile = document.querySelector('.navbar');
    const overlay = document.querySelector('overlay');

    if(navMobile.classList.contains('active')) {
        navMobile.classList.remove('active');
        overlay.classList.remove('active')
    
    } else {
        navMobile.classList.add('active');
        overlay.classList.add('active');
    }
}