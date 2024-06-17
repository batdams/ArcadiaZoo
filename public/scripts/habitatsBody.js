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
}