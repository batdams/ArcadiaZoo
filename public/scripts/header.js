export function initializeHeader () {

    // Burger Menu Mobile View
    const burgerMenuBtn = document.getElementById('burgerMenu');
    const navMenu = document.getElementById('navMenu');
    //Afficher menu et changer icone par une croix pour la fermeture
    burgerMenuBtn.addEventListener('click', () => {
        navMenu.classList.toggle('navMenuMobile');
        burgerMenuBtn.classList.toggle('crossIcon');
    });
}
