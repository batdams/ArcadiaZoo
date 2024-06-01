export function initializeHabitatsBody () {

    const imgLvg = Array.from(document.getElementsByClassName('lvg'));
    const titlePresentation = document.getElementsByClassName('presLvg');
    const corpsPresentation = document.getElementsByClassName('lvgAnimalList')
    imgLvg.forEach(element => {
        element.addEventListener('click', () => {
            titlePresentation[0].innerHTML = 'YO';
        })
    });
}