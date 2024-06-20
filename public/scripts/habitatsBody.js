export function initializeHabitatsBody () {

    // Bouton de scroll sur carroussel habitat
    const carroussel = document.querySelector('.livingCarroussel');
    const btnLeft = document.querySelector('.btnLeftLivings');
    const btnRight = document.querySelector('.btnRightLivings');
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

    // Selection d'un habitat
    const habitatList = Array.from(document.querySelectorAll('.imgUnits'));
    const habitatTextList = Array.from(document.querySelectorAll('.presLvg'));

    function showDiv(evt) {
        habitatTextList.forEach(element=> {
            element.classList.add('hideLvg');
        })
        habitatList.forEach(element => {
            element.classList.add('filterImg');
        })
        let eltId = evt.target.id;
        let targetDiv = document.querySelector('.' + eltId);
        let targetImg = document.getElementById(eltId);
        if (targetDiv) {
            targetDiv.classList.toggle('hideLvg');
        }
        if (targetImg) {
            targetImg.classList.toggle('filterImg');
        }
    }
    habitatList.forEach(element => {
        element.addEventListener('click', showDiv);
    })

    // Affichage des animaux et infos selon l'habitat
    const animalsList = Array.from(document.querySelectorAll('.imgAnimal'));
    const animalsUnit = Array.from(document.querySelectorAll('.animalUnit'));
    const animalsInfos = Array.from(document.querySelectorAll('.animalInfos'));
    function showImg () {
        habitatList.forEach(element => {
            element.addEventListener('click', function () {
                const habitatId = this.getAttribute('data-value');
                animalsList.forEach(element => {
                    if (element.classList.contains('lvg' + habitatId)) {
                        element.style.display = "block";
                    } else {
                        element.style.display = "none";
                    }
                });
                animalsInfos.forEach(element => {
                    if (element.classList.contains('lvg' + habitatId)) {
                        element.style.display = "block";
                    } else {
                        element.style.display = "none";
                    }
                });
            })
        });
    }
    showImg();

    // Affichage infos animaux quand on clique dessus
    const animalUnits = Array.from(document.querySelectorAll('.animalUnit'));
    animalUnits.forEach(element => {
        element.addEventListener('click', () => {
        // Trouver l'élément img et div correspondants
        const textElement = element.querySelector('.animalInfos');
        const hidedInfos = element.querySelector('.infosSup');
        textElement.classList.toggle('animalInfosExpand');
        setTimeout(() => {
            hidedInfos.classList.toggle('show');
        }, 500);
        });
    });
}