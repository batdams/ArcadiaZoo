export function initializeHomeBody () {

    const habitats = Array.from(document.getElementsByClassName('habitats')); // Array.from car habitats est une collection d'elements HTML, pas un tableau!
    // Ajouter un curseur sur les images d'habitats
    habitats.forEach(element => { 
        element.addEventListener('mouseover', () => {
            element.classList.add('pointer');
        })
    });
    // Description de l'habitat et liste des animaux
    habitats.forEach(element => {
        element.addEventListener('click', () => {
            const divElt = element.querySelector('.habitatTextDiv');
            if (divElt) {
                // Si la div existe déjà, la supprimer
                element.removeChild(divElt);
            } else {
                const divElt = document.createElement('div');
                element.appendChild(divElt);
                if (element.classList.contains('savaneDiv')) {
                    divElt.innerHTML = `
                                    <a href="habitat.php">La savane</a>
                                    <p>Vaste plaine herbeuse parsemée de quelques arbres et arbustes, caractérisée par un climat tropical avec des saisons bien distinctes, offrant un habitat unique pour une diversité impressionnante d'animaux sauvages.</p>
                                    <h4>Animaux :</h4>
                                    <ul>
                                        <li>Lion</li>
                                        <li>Éléphant d'Afrique</li>
                                        <li>Girafe</li>
                                        <li>Zèbre</li>
                                        <li>Gnou (ou Antilope à queue noire)</li>
                                        <li>Hyène</li>
                                        <li>Gazelle</li>
                                        <li>Guépard</li>
                                        <li>Hippopotame</li>
                                        <li>Rhinocéros</li>
                                    </ul>`;
                }
                else if (element.classList.contains('jungleDiv')) {
                    divElt.innerHTML = `
                                    <a href="habitat.php">La jungle</a>
                                    <p>La jungle est une forêt dense et luxuriante, riche en biodiversité, où des plantes exubérantes et une faune variée prospèrent dans un climat humide et chaud.</p>
                                    <h4>Animaux :</h4>
                                    <ul>
                                        <li>Singe</li>
                                        <li>Tigre</li>
                                        <li>Perroquet</li>
                                        <li>Panthère</li>
                                        <li>Crocodile</li>
                                        <li>Paresseux</li>
                                        <li>Serpent</li>
                                        <li>Gorille</li>
                                        <li>Faucon</li>
                                        <li>Orang-outan</li>
                                    </ul>`;
                }
                else if (element.classList.contains('canadianForestDiv')) {
                    divElt.innerHTML = `
                                    <a href="habitat.php">La Forêt Canadienne</a>
                                    <p>La forêt canadienne est un vaste territoire boisé caractérisé par ses conifères majestueux, ses lacs cristallins, et sa faune diversifiée, offrant un paysage grandiose et sauvage sous un climat tempéré à froid</p>
                                    <h4>Animaux :</h4>
                                    <ul>
                                        <li>Ours noir</li>
                                        <li>Cerf de Virginie</li>
                                        <li>Lynx du Canada</li>
                                        <li>Loutre de rivière</li>
                                        <li>Castor du Canada</li>
                                        <li>Caribou</li>
                                        <li>Loup gris</li>
                                        <li>Élan du Canada</li>
                                        <li>Coyote</li>
                                        <li>Écureuil roux</li>
                                    </ul>`;
                }
                else if (element.classList.contains('maraisDiv')) {
                    divElt.innerHTML = `
                                    <a href="habitat.php">Le marais</a>
                                    <p>Le marais</p>
                                    <h4>Animaux :</h4>
                                    <ul>
                                        <li>Alligator américain</li>
                                        <li>Grand Héron</li>
                                        <li>Rat musqué</li>
                                        <li>Grenouille Léopard</li>
                                        <li>Serpent d'eau du Nord</li>
                                        <li>Tortue peinte</li>
                                        <li>Ibis blanc</li>
                                        <li>Crapaud d'Amérique</li>
                                        <li>Rat des marais</li>
                                        <li>Poisson-chat</li>
                                    </ul>`;
                }
                divElt.classList.add('habitatTextDiv');
            }
        });
    });
    // Animer menu Ecologie
    const menuBtn = document.getElementById('menuBtn');
    const itemDiv = document.getElementsByClassName('items')[0];
    menuBtn.addEventListener('click', () => {
        itemDiv.classList.toggle('itemsShow');
    })
}