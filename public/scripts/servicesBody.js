export function initializeServicesBody () {

    // Bouton de scroll sur carroussel services
    const carroussel = document.querySelector('.serviceCarroussel');
    const btnLeft = document.querySelector('.btnLeftServices');
    const btnRight = document.querySelector('.btnRightServices');
    if (carroussel && btnLeft && btnRight) {
        btnLeft.addEventListener('click', () => {
        carroussel.scrollBy({
            left: -150, 
            behavior: 'smooth'
        });
    });
    btnRight.addEventListener('click', () => {
        carroussel.scrollBy({
            left: 150,
            behavior: 'smooth'
        });
    });
} else {
    console.error('One or more elements not found:', { carroussel, btnLeft, btnRight });
}
}