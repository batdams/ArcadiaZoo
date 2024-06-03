export function initializeHeader () {

    // Burger Menu Mobile View
    const burgerMenuBtn = document.getElementById('burgerMenu');
    const navMenu = document.getElementById('navMenu');
    //Afficher menu et changer icone par une croix pour la fermeture
    burgerMenuBtn.addEventListener('click', () => {
        navMenu.classList.toggle('navMenuMobile');
        burgerMenuBtn.classList.toggle('crossIcon');
    });

    //Changer selected en fonction de la page consultée
    const pageId = document.querySelector('main').id.toUpperCase();
    const navListLink = document.querySelectorAll('a');
    navListLink.forEach((element) => {
        if(element.innerText ==  pageId) {
            element.classList.add('selected');
        } /*else if ((element.innerText = 'Votre espace') && pageId === 'connexion' || pageId === 'connectedVet' || pageId === 'connectedAdmin' || pageId === 'connectedEmployee') {
            element.classList.add('selected');
        }*/
    });
}
