export function initializeConnectedAdminBody () {
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
}