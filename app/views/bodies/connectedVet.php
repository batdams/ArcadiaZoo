<main id="connectedVet">
    <section class="section1Connected">
        <div class="dashboardDIV">
            <div id="animalReportEditionManager" class="managerDIV">
                <h4>Edition d'un rapport vétérinaire</h4>
            </div>
            <div id="animalReportEditionManagerBody" class="managerHide">
                <form method="POST" action="/public/addAnimalReport" enctype="multipart/form-data">
                    <select name="animalSelect" id="animalSelect">
                        <option value="">Choisissez un animal</option>
                    </select>
                    <label for="firstnameAccount">Prénom</label>
                    <input type="text" name="firstnameAccount" id="firstnameAccount">
                    <label for="lastnameAccount">Nom</label>
                    <input type="text" name="lastnameAccount" id="lastnameAccount">
                    <label for="emailAccount">Courriel</label>
                    <input type="mail" name="emailAccount" id="emailAccount">
                    <label for="pwdAccount">Mot de passe</label>
                    <input type="text" name="pwdAccount" id="pwdAccount">
                    <fieldset>
                        <label for="vetAccount">Vétérinaire</label>
                        <input type="radio" name="accountRole" id="vetAccount" value="2">
                        <label for="employeeAccount">Employé</label>
                        <input type="radio" name="accountRole" id="employeeAccount" value="3">
                    </fieldset>
                <button type="submit" class="btnAdd">Envoyer</button>
                </form>
            </div>
            
            <div id="habitatReportEditionManager" class="managerDIV">
                <h4>Edition d'un avis sur les habitats</h4>
            </div>
            <div id="habitatReportEditionManagerBody" class="managerHide">
                Voici l'espace d'édition d'un avis sur les habitats
            </div>

            <div id="animalMealViewManager" class="managerDIV">
                <h4>Visualisation des repas des animaux</h4>
            </div>
            <div id="animalMealViewManagerBody" class="managerHide">
                Voici l'espace de visualisation des repas des animaux
            </div>
        </div>
    </section>