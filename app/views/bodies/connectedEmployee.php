<main id="connectedEmployee">
    <section class="section1Connected">
        <div class="dashboardDIV">
            <div id="reviewManager" class="managerDIV">
                <h4>Modération Avis</h4>
            </div>
            <div id="reviewManagerBody" class="managerHide">
                <div class="viewList">
                    <?php
                        foreach ($data['views'] as $view) {
                            echo '<div class="viewUnit view' . $view['view_id'] . '">';
                            echo $view['view_message'] . '<br>';
                            echo '<span class="nickname">' . $view['nickname'] . '</span><br>';
                            echo '<button class="confirmView" data-id="' . $view['view_id'] . '"> Valider </button> <button class="deleteView" data-id="' . $view['view_id'] . '"> supprimer </button>';
                            echo '</div>';
                        }
                    ?>
                </div>
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
            <div class="serviceAddDIV serviceDIV">
                <div class="serviceModifDIV generalDIV">
                <h4>Modification d'un service</h4>
                    <label for="serviceSelect">Liste des services</label>
                    <select name="services" id="serviceSelect">
                        <option value="">Choisissez un service</option>
                    <?php
                        foreach($data['services'] as $service) {
                            $serviceTitle = $service->getTitle();
                            $serviceDescription = $service->getDescription();
                            $serviceImgPath = $service->getImgPath();
                            echo '<option value="' . $serviceTitle . '" data-description="' . htmlspecialchars($serviceDescription) . '" data-img="' . htmlspecialchars($serviceImgPath) . '">' . $serviceTitle . '</option>';
                        }
                    ?>
                    </select>
                    <form method="POST" action="/public/modifService" enctype="multipart/form-data">
                        <label for="titleModif">Titre du service</label>
                        <input type="text" name="titleModif" id="titleModif">
                        <label for="descriptionModif">Description</label>
                        <textarea name="descriptionModif" id="descriptionModif">
                        </textarea>
                        <img id="actualImg" src="" alt="" style="width: 150px; height: auto"><br>
                        <label for="imgModif">Image actuelle</label>
                        <input type="file" name="imgModif" id="imgModif">
                    <button type="submit" class="btnModif">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </section>