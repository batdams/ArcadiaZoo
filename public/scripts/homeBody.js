export function initializeHomeBody () {

    const habitats = Array.from(document.getElementsByClassName('habitats')); // Array.from car habitats est une collection d'elements HTML, pas un tableau!
    // Ajouter un curseur sur les images d'habitats
    habitats.forEach(element => { 
        element.addEventListener('mouseover', () => {
            element.classList.add('pointer');
        })
    });

    // Bouton de scroll sur carroussel habitat
        const scrollContainer = document.querySelector('.scroll-content');
        const scrollLeftButton = document.querySelector('.scroll-left');
        const scrollRightButton = document.querySelector('.scroll-right');
        if (scrollLeftButton && scrollRightButton && scrollContainer) {
            scrollLeftButton.addEventListener('click', () => {
            scrollContainer.scrollBy({
                left: -100,
                behavior: 'smooth'
            });
        });
    
        scrollRightButton.addEventListener('click', () => {
            scrollContainer.scrollBy({
                left: 100,
                behavior: 'smooth'
            });
        });
    } else {
        console.error('One or more elements not found:', { scrollContainer, scrollLeftButton, scrollRightButton });
    }

    // Bouton de scroll sur carroussel services
        const carroussel = document.querySelector('.carroussel');
        const btnLeft = document.querySelector('.btnLeft');
        const btnRight = document.querySelector('.btnRight');
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
    // Animer menu Ecologie
    const menuBtn = document.getElementById('menuBtn');
    const itemDiv = document.getElementsByClassName('items')[0];
    menuBtn.addEventListener('click', () => {
        itemDiv.classList.toggle('itemsShow');
    })
    // Afficher les encarts environmentaux
    // Requete AJAX
    const BASE_URL = "<?php echo BASE_URL; ?>";
    console.log(BASE_URL);
    console.log('Hello');
    function loadEcoContent(type) {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function () {
            const data = JSON.parse(this.responseText);
            let content = data.find(item => item.type === type);
            if (content) {
                document.getElementById('titleAjax').innerText = content.title;
                document.getElementById('corpsAjax').innerText = content.corps;
            }
        };
        xhttp.open("GET", `${BASE_URL}/json/data.json`, true);
        xhttp.send();
    }

    const btnElec = document.getElementById('btnBolt');
    const btnWater = document.getElementById('btnWater');
    const btnFood = document.getElementById('btnFood');
    const btnWaste = document.getElementById('btnWaste');
    btnElec.addEventListener('click', () => {loadEcoContent('electric');});
    btnWater.addEventListener('click', () => {loadEcoContent('water');});
    btnFood.addEventListener('click', () => {loadEcoContent('food');});
    btnWaste.addEventListener('click', () => {loadEcoContent('waste');});
}