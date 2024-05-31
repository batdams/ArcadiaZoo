<main id="connectedEmployee">
    <?php var_dump($animal);?>
    <section class="section1Connected">
        <div class="dashboardDIV">
            <div id="reviewManager" class="managerDIV">
                <h4>Modération Avis</h4>
            </div>
            <div id="reviewManagerBody" class="managerHide">
                Voici l'espace de validation ou refus des avis
            </div>
            
            <div id="animalMealManager" class="managerDIV">
                <h4>Gestion des repas des animaux</h4>
            </div>
            <div id="animalMealManagerBody" class="managerHide">
                Voici l'espace gestion de repas des animaux
                <form action="">
                    <label for="petSelect">Animal</label>
                    <select name="pets" id="petSelect">
                        <option value="">Selectionnez un animal</option>
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                        <option value="hamster">Hamster</option>
                        <option value="parrot">Parrot</option>
                        <option value="spider">Spider</option>
                        <option value="goldfish">Goldfish</option>
                      </select>
                    <label for="dateTime">Date et heure</label>
                    <input type="datetime">
                    <label for="food"></label>
                    <select name="foods" id="food">
                        <option value="">Selectionnez repas</option>
                        <option value="meat">Viandes</option>
                        <option value="seeds">Graines</option>
                      </select>
                    <label for="quantity">Indiquez la quantité (en g)</label>
                    <input type="text">
                </form>
            </div>

            <div id="servicesManager" class="managerDIV">
                <h4>Gestion des services</h4>
            </div>
            <div id="servicesManagerBody" class="managerHide">
                Voici l'espace de création, modification et suppression des services
            </div>
        </div>
    </section>