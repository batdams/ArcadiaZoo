import {initializeHeader} from "./header.js";
import {initializeHomeBody} from "./homeBody.js";
import {initializeHabitatsBody} from "./habitatsBody.js";
import {initializeConnectedAdminBody} from "./connectedAdminBody.js";
import {initializeConnectedVetBody} from "./connectedVetBody.js";
import {initializeConnectedEmployeeBody} from "./connectedEmployeeBody.js";

document.addEventListener('DOMContentLoaded', () => {
    initializeHeader();
    // Identification page actuelle
    const mainElement = document.querySelector('main');
    if (mainElement) {
        const mainId = mainElement.id;
        // Initialisation du script spécifique à la page
        switch (mainId) {
            case 'accueil':
                initializeHomeBody();
                break;
            case 'connectedAdmin':
                initializeConnectedAdminBody();
                break;
            case 'connectedVet':
                initializeConnectedVetBody();
                break;
            case 'connectedEmployee':
                initializeConnectedEmployeeBody();
                break;
            case 'habitats':
                initializeHabitatsBody();
                break;
            default:
                console.log('No specific initialization for this page.');
        }
    }
});