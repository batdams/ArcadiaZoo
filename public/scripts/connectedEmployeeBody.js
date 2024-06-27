export function initializeConnectedEmployeeBody () {
    // Show manager
        document.querySelectorAll('.managerDIV').forEach(managerDIV => {
            managerDIV.addEventListener('click', () => {
                const targetId = managerDIV.id + 'Body';
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    targetElement.classList.toggle('managerHide');
                }
            });
        });
    
    // Visualiser service lors de la selection pour modification
    document.getElementById('serviceSelect').addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex];
        var serviceTitle = selectedOption.value;
        var serviceDescription = selectedOption.getAttribute('data-description');
        var serviceImgPath = selectedOption.getAttribute('data-img');
        // Remplir les champs du formulaire
        document.getElementById('titleModif').value = serviceTitle;
        document.getElementById('descriptionModif').value = serviceDescription;
        document.getElementById('actualImg').setAttribute('src', serviceImgPath);
    });

    // Valider un avis utilisateur
    const btnConfirmList = Array.from(document.getElementsByClassName('confirmView'));
    function confirmView(id) {
        const xhttp = new XMLHttpRequest;
        xhttp.open('POST', '/public/confirmReview', true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.onload = function() {
            if (xhttp.status === 200) {
                console.log(xhttp.responseText); // Réponse du serveur (if ($stmt->execute()) { echo 'OK';}                 
            } else {
                console.error("Erreur de mise à jour");
            }
        }
        const data = "id=" + encodeURIComponent(id) + "&is_valide=1";
        xhttp.send(data);
    }
    btnConfirmList.forEach(element => {
        element.addEventListener('click', () => {
            const id = element.getAttribute('data-id'); // Utiliser l'ID dynamique du bouton
            confirmView(id);
            element.innerHTML= "Validé !";
            element.nextElementSibling.remove();
        })
    });

     // Supprimer un avis utilisateur
     const btnDeleteList = Array.from(document.getElementsByClassName('deleteView'));
     function deleteView(id) {
         const xhttp = new XMLHttpRequest;
         xhttp.open('POST', '/public/deleteReview', true);
         xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
         xhttp.onload = function() {
             if (xhttp.status === 200) {
                 console.log(xhttp.responseText); // Réponse du serveur (if ($stmt->execute()) { echo 'OK';}                 
             } else {
                 console.error("Erreur de mise à jour");
             }
         }
         const data = "id=" + encodeURIComponent(id);
         xhttp.send(data);
     }
     btnDeleteList.forEach(element => {
         element.addEventListener('click', () => {
             const id = element.getAttribute('data-id'); // Utiliser l'ID dynamique du bouton
             deleteView(id);
             element.innerHTML= "Supprimé !";
             element.previousElementSibling.remove();
         })
     });
}