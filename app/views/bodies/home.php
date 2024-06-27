<main id="accueil">
    <section class="section1">
        <div class="presentationArcadia">
            <p>
                <span>S'émerveiller, apprendre et protéger</span><br>
                Au zoo <span>d'ARCADIA</span>, découvrez la beauté du monde animal, émerveillez-vous devant la diversité de la faune, et engagez-vous à protéger les animaux et notre planète pour les générations futures.
            </p>
        </div>
    </section>
    <section class="sectionHabitats">
        <h1>habitats et animaux</h1>
        <div class="horizontal-scroll-section">
        <button class="scroll-left">&lt;</button>
            <div class="scroll-content">
                <?php
                    $habitats = $data['habitats'];
                    foreach($habitats as $habitat) {
                    echo '<div>';
                        echo '<h4>' . $habitat->getName() . '</h4>';
                        echo '<div class="' . $habitat->getName() . 'Div habitatDiv habitats">';
                            echo '<a href="/public/habitats"><img src="' . $habitat->getImgPath() . '" alt="' . $habitat->getName() . '"></a>';
                        echo '</div>';
                    echo '</div>';
                    }
                ?>
            </div>
            <button class="scroll-right">&gt;</button>
        </div>
    </section>
    <section class="sectionServices">
        <h1>Nos Services</h1>
        <div class="containerCarroussel">
            <button class="btnLeft btnServices">&lt;</button>
            <div class="carroussel">
                <?php
                $services = $data['services'];
                foreach($services as $service) {
                echo '<div class="carrousselUnits">';
                        echo '<img src="' . $service->getImgPath() . '" alt="' . $service->getTitle() . '">';
                        echo '<div>';
                        echo $service->getDescription();
                        echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
            <button class="btnRight btnServices">&gt;</button>
        </div>
    </section>
    <section class="sectionEcology">
        <h1>Arcadia, une approche écologique pour la gestion du parc</h1>
        <div class="ecologyMenu">
            <div id="menu">
                <button class="menuBtn" id="menuBtn" title="showMenu">Cliquez pour découvrir nos actions</button>
                <div class="items">
                    <div class="menuItem item1">
                        <button class="itemBtn" id="btnBolt"><img src="../../../public/pictures/bolt-solid.svg" alt="bolt"></button>
                    </div>
                    <div class="menuItem item2">
                        <button class="itemBtn" id="btnWater"><img src="../../../public/pictures/water-solid.svg" alt="water"></button>
                    </div>
                    <div class="menuItem item3">
                        <button class="itemBtn" id="btnFood"><img src="../../../public/pictures/seedling-solid.svg" alt="seedling"></button>
                    </div>
                    <div class="menuItem item4">
                        <button class="itemBtn" id="btnWaste"><img src="../../../public/pictures/recycle-solid.svg" alt="recycle"></button>
                    </div>
                </div>
            </div>
            <div class="encart">
                <h6 id="titleAjax">Un parc durable, local et autonome</h6>
                <p class="ecological" id="corpsAjax">
                    Découvrez l'approche écologique de notre parc à travers 4 axes majeurs : <br>
                    - La production Electrique<br>
                    - La gestion de l'eau<br>
                    - L'alimentation des animaux<br>
                    - La gestion des déchets<br>
                </p>
            </div>
        </div>
    </section>
    <section class="sectionView">
        <h1>Arcadia, ils racontent leur expérience</h1>
        <div class="viewList">
        <?php
            foreach($data['validViews'] as $view) {
                echo '<div class="viewUnit">';
                echo $view['view_message'] . '<br>';
                echo '<span class="nickname">' . $view['nickname'] . '</span>';
                echo '</div>';
            }
        ?>
        </div>
        <div class="viewForm">
            <h4>Partagez votre expérience</h4>
            <form action="/public/leaveView" method="POST">
                <label for="nickname">NOM</label>
                <input type="text" name="nickname" id="nickname">
                <label for="viewMessage">VOTRE AVIS</label>
                <textarea name="viewMessage" id="viewMessage">
                </textarea>
                <button class="viewSubmit" type="submit">Envoyer</button>
            </form>
        </div>
    </section>