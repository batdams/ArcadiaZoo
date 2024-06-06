<main id="connectedAdmin">
    <section class="section1Connected">
        <div class="dashboardDIV">
            <div id="animalsManager" class="managerDIV">
                <h4>Gestion animaux</h4>
            </div>
            <div id="animalsManagerBody" class="managerHide">
                Voici le nombre de visualisation par animal
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
                <div class="accountAddDIV serviceDIV">
                    <h4>Ajout d'un compte</h4>
                    <form method="POST" action="/public/addAccount" enctype="multipart/form-data">
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
                <div class="serviceAddDIV serviceDIV">
                    <h4>Ajout d'un service</h4>
                    <form method="POST" action="/public/addService" enctype="multipart/form-data">
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
                <div class="serviceModifDIV serviceDIV">
                    <h4>Modification d'un service</h4>
                    <label for="serviceSelect">Liste des services</label>
                    <select name="services" id="serviceSelect">
                        <option value="">Choisissez un service</option>
                    <?php
                        foreach($data as $service) {
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
                <div class="serviceSuppDIV serviceDIV">
                    <h4>Suppression d'un service</h4>
                    <form method="POST" action="/public/delService" enctype="multipart/form-data">
                        <label for="serviceSelect">Liste des services</label>
                        <select name="delItem" id="serviceSelect">
                            <option value="">Choisissez un service</option>
                            <?php
                                foreach($data as $service) {
                                    echo '<option value="' . $service->getTitle() . '">' . $service->getTitle() . '</option>';
                                }
                            ?>
                        </select>
                        <br>
                        <button type="submit">Supprimer</button>
                    </form>
                </div>
            </div>
            <!-- CHANGER SERVICES PAR HABITAT-->
            <div id="habitatManager" class="managerDIV">
                <h4>Gestion des habitats</h4>
            </div>
            <div id="habitatsManagerBody" class="managerHide">
                <div class="habitatAddDIV habitatDIV">
                    <h4>Ajout d'un habitat</h4>
                    <form method="POST" action="/public/addHabitat" enctype="multipart/form-data">
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
                <div class="habitatModifDIV habitatDIV">
                    <h4>Modification d'un habitat</h4>
                    <label for="habitatSelect">Liste des habitats</label>
                    <select name="habitatSelect" id="habitatSelect">
                        <option value="">Choisissez un habitat</option>
                    <?php
                    /*
                        foreach($data as $habitat) {
                            $serviceTitle = $service->getTitle();
                            $serviceDescription = $service->getDescription();
                            $serviceImgPath = $service->getImgPath();
                            echo '<option value="' . $serviceTitle . '" data-description="' . htmlspecialchars($serviceDescription) . '" data-img="' . htmlspecialchars($serviceImgPath) . '">' . $serviceTitle . '</option>';
                        }*/
                    ?>
                    </select>
                    <form method="POST" action="/public/modifHabitat" enctype="multipart/form-data">
                        <label for="habitatModif">Titre de l'habitat</label>
                        <input type="text" name="habitatModif" id="habitatModif">
                        <label for="habitatDescriptionModif">Description</label>
                        <textarea name="habitatDescriptionModif" id="habitatDescriptionModif">
                        </textarea>
                        <img id="actualHabitatImg" src="" alt="" style="width: 150px; height: auto"><br>
                        <label for="imgHabitatModif">Image actuelle</label>
                        <input type="file" name="imgHabitatModif" id="imgHabitatModif">
                    <button type="submit" class="btnHabitatModif">Modifier</button>
                    </form>
                </div>
                <div class="habitatSuppDIV habitatDIV">
                    <h4>Suppression d'un habitat</h4>
                    <form method="POST" action="/public/delHabitat" enctype="multipart/form-data">
                        <label for="habitatSelect">Liste des habitats</label>
                        <select name="delHabitat" id="habitatSelect">
                            <option value="">Choisissez un habitat</option>
                            <?php
                                foreach($data as $habitat) {
                                    echo '<option value="' . $service->getTitle() . '">' . $service->getTitle() . '</option>';
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
                Voici l'espace de gestion des horaires
            </div>
        </div>
        <?php 
        /*
                        foreach($data as $service) {
                            echo $service->getTitle() . '<br>';
                            echo $service->getDescription() . '<br>';
                            echo $service->getImgPath() . '<br>';
                            // echo '<option value="' . $serviceTitle . '">' . $serviceTitle . '</option>';
                            // echo '<option value="' . $serviceTitle . '" data-description="' . htmlspecialchars($serviceDescription) . '" data-img="' . htmlspecialchars($serviceImgPath) . '">' . $serviceTitle . '</option>';
                        }
                    */?>
    </section>