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
}