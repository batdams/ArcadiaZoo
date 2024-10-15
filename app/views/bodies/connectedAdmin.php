<main id="connectedAdmin">
    <section class="section1Connected">
        <div class="dashboardDIV">
            <div id="animalsManager" class="managerDIV">
                <h4>Gestion animaux</h4>
            </div>
            <div id="animalsManagerBody" class="managerHide">
            <div class="animalAddDIV generalDIV">
                    <h4>Ajout d'un animal</h4>
                    <form method="POST" action="<?php echo BASE_URL;?>/addAnimal" enctype="multipart/form-data">
                        <label for="animalNameAdd">nom de l'animal</label>
                        <input type="text" name="animalNameAdd" id="animalNameAdd">
                        <select name="breedAnimal" id="breedAnimal">
                            <option value="">Choisissez une race</option>
                            <?php
                                foreach($data['breeds'] as $breed) {
                                    echo '<option value="' . $breed['breed_id'] . '">' . $breed['breed_name'] . '</option>';
                                }
                            ?>
                        </select>
                        <select name="dietAnimal" id="dietAnimal">
                            <option value="">Selectionnez le régime alimentaire</option>
                            <option value="carnivore">Carnivore</option>
                            <option value="herbivore">Herbivore</option>
                            <option value="granivore">Granivore</option>
                            <option value="omnivore">Omnivore</option>
                            <option value="frugivore">Frugivore</option>
                            <option value="frugivore">Piscivore</option>
                        </select>
                        <select name="habitatAnimal" id="habitatAnimal">
                            <option value="">Choisissez un habitat</option>
                            <?php
                                foreach($data['habitats'] as $habitat) {
                                    echo '<option value="' . $habitat->getId() . '">' . $habitat->getName() . '</option>';
                                }
                            ?>
                        </select><br><br>
                        <label for="descriptionAnimal">Description</label>
                        <textarea name="descriptionAnimal" id="descriptionAnimal">
                        </textarea>
                        <label for="imgAnimalAdd">Ajouter une image</label>
                        <input type="file" name="imgAnimalAdd" id="imgAnimalAdd">
                    <button type="submit" class="btnAnimalAdd">Ajouter</button>
                    </form>
                </div>
                <div class="animalSuppDIV generalDIV">
                    <h4>Suppression d'un animal</h4>
                    <form method="POST" action="<?php echo BASE_URL;?>/delAnimal" enctype="multipart/form-data">
                        <label for="animalSelect">Liste des animaux</label>
                        <select name="delAnimal" id="animalSelect">
                            <option value="">Choisissez un animal</option>
                            <?php
                                foreach($data['animals'] as $animal) {
                                    echo '<option value="' . $animal->getName() . '">' . $animal->getName() . '</option>';
                                }
                            ?>
                        </select>
                        <br>
                        <button type="submit">Supprimer</button>
                    </form>
                </div>
            </div>
            <div id="animalsReportsManager" class="managerDIV">
                <h4>Rapports vétérinaires sur les animaux</h4>
            </div>
            <div id="animalsReportsManagerBody" class="managerHide">
                Voici les rapports sur les animaux du vétérinaire
            </div>

            <div id="habitatsReportsManager" class="managerDIV">
                <h4>Rapports vétérinaires sur les habitats</h4>
            </div>
            <div id="habitatsReportsManagerBody" class="managerHide">
                Voici les rapports sur les habitats des animaux du vétérinaire
            </div>
            
            <div id="accountsManager" class="managerDIV">
                <h4>Gestion des comptes</h4>
            </div>
            <div id="accountsManagerBody" class="managerHide">
                <div class="accountAddDIV generalDIV">
                    <h4>Ajout d'un compte</h4>
                    <form method="POST" action="<?php echo BASE_URL;?>/addAccount" enctype="multipart/form-data">
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
            </div>
            <div id="servicesManager" class="managerDIV">
                <h4>Gestion des services</h4>
            </div>
            <div id="servicesManagerBody" class="managerHide">
                <div class="serviceAddDIV generalDIV">
                    <h4>Ajout d'un service</h4>
                    <form method="POST" action="<?php echo BASE_URL;?>/addService" enctype="multipart/form-data">
                        <label for="titleAdd">Titre du service</label>
                        <input type="text" name="titleAdd" id="titleAdd">
                        <label for="descriptionAdd">Description</label>
                        <textarea name="descriptionAdd" id="descriptionAdd">
                        </textarea>
                        <label for="imgAdd">Image</label>
                        <input type="file" name="imgAdd" id="imgAdd">
                    <button type="submit" class="btnAdd">Envoyer</button>
                    </form>
                </div>
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
                    <form method="POST" action="<?php echo BASE_URL;?>/modifService" enctype="multipart/form-data">
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
                <div class="serviceSuppDIV generalDIV">
                    <h4>Suppression d'un service</h4>
                    <form method="POST" action="<?php echo BASE_URL;?>/delService" enctype="multipart/form-data">
                        <label for="serviceSelect">Liste des services</label>
                        <select name="delItem" id="serviceSelect">
                            <option value="">Choisissez un service</option>
                            <?php
                                foreach($data['services'] as $service) {
                                    echo '<option value="' . $service->getTitle() . '">' . $service->getTitle() . '</option>';
                                }
                            ?>
                        </select>
                        <br>
                        <button type="submit">Supprimer</button>
                    </form>
                </div>
            </div>
            <div id="habitatsManager" class="managerDIV">
                <h4>Gestion des habitats</h4>
            </div>
            <div id="habitatsManagerBody" class="managerHide">
                <div class="habitatAddDIV generalDIV">
                    <h4>Ajout d'un habitat</h4>
                    <form method="POST" action="<?php echo BASE_URL;?>/addHabitat" enctype="multipart/form-data">
                        <label for="nameAdd">nom de l'habitat</label>
                        <input type="text" name="nameAdd" id="nameAdd">
                        <label for="habitatDescriptionAdd">Description de l'habitat</label>
                        <textarea name="habitatDescriptionAdd" id="habitatDescriptionAdd">
                        </textarea>
                        <label for="imgHabitatAdd">Image</label>
                        <input type="file" name="imgHabitatAdd" id="imgHabitatAdd">
                    <button type="submit" class="btnHabitatAdd">Ajouter</button>
                    </form>
                </div>
                <div class="habitatSuppDIV generalDIV">
                    <h4>Suppression d'un habitat</h4>
                    <form method="POST" action="<?php echo BASE_URL;?>/delHabitat" enctype="multipart/form-data">
                        <label for="habitatSelect">Liste des habitats</label>
                        <select name="delHabitat" id="habitatSelect">
                            <option value="">Choisissez un habitat</option>
                            <?php
                                foreach($data['habitats'] as $habitat) {
                                    echo '<option value="' . $habitat->getName() . '">' . $habitat->getName() . '</option>';
                                }
                            ?>
                        </select>
                        <br>
                        <button type="submit">Supprimer</button>
                    </form>
                </div>
            </div>
            <div id="hoursManager" class="managerDIV">
                <h4>Horaires Arcadia</h4>
            </div>
            <div id="hoursManagerBody" class="managerHide">
            <div class="actualHours">
                <h4>Horaires actuels</h4>
                <?php
                    $daysOfWeek = [
                        0 => 'Lundi',
                        1 => 'Mardi',
                        2 => 'Mercredi',
                        3 => 'Jeudi',
                        4 => 'Vendredi',
                        5 => 'Samedi',
                        6 => 'Dimanche'
                    ];
                    foreach($data['hours'] as $hour) {
                        // Mapper le numero du jour avec la journée correspondante
                        $dayNumber = $hour->getDayOfWeek();
                        $dayName = $daysOfWeek[$dayNumber];
                        // Formater l'horaire sans les secondes
                        $openingTime = new DateTime($hour->getOpeningTime());
                        $formattedOpeningTime = $openingTime->format('H:i');
                        $closingTime = new DateTime($hour->getClosingTime());
                        $formattedClosingTime = $closingTime->format('H:i');
                        echo  $dayName . ' : ' . $formattedOpeningTime . ' - ' . $formattedClosingTime .  '<br/>';
                    }
                ?>
            </div>
            <div class="modifHours">
                <h4>Espace modification</h4>
                <form action="<?php echo BASE_URL;?>/hoursModif" method="POST">
                        <label for="day_of_week">Jour de la semaine:</label>
                        <select id="day_of_week" name="day_of_week">
                            <option value="0">Lundi</option>
                            <option value="1">Mardi</option>
                            <option value="2">Mercredi</option>
                            <option value="3">Jeudi</option>
                            <option value="4">Vendredi</option>
                            <option value="5">Samedi</option>
                            <option value="6">Dimanche</option>
                        </select><br>                    
                        <label for="opening_time">Heure d'ouverture:</label>
                        <input type="time" id="opening_time" name="opening_time"><br>
                        
                        <label for="closing_time">Heure de fermeture:</label>
                        <input type="time" id="closing_time" name="closing_time"><br>

                        <input type="submit" value="Mettre à jour">
                    </form>
                </div>
            </div>
        </div>
    </section>