function toggleMenu() {
    const navMobile = document.querySelector('.navbar');
    const overlay = document.querySelector('overlay');

    if (navMobile.classList.contains('active')) {
        navMobile.classList.remove('active');
        overlay.classList.remove('active')

    } else {
        navMobile.classList.add('active');
        overlay.classList.add('active');
    }
}

const btn = document.querySelector('.btn');

btn.addEventListener('click', () => {

    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    })

})

