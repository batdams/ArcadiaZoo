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
        <div class="habitatListDiv">
        <?php
            $habitats = $data['habitats'];
            foreach($habitats as $habitat) {
               echo '<div class="invisibleDiv habitatDiv">';
               echo '</div>';
               echo '<div class="' . $habitat->getName() . 'Div habitatDiv habitats">';
                    echo $habitat->getName();
                   echo '<img src="' . $habitat->getImgPath() . '" alt="' . $habitat->getName() . '">';
               echo '</div>';
            }
        ?>
<!--            <div class="jungleDiv habitatDiv habitats">
                Jungle
                <img src="../../../public/pictures/chimpanzee.jpg" alt="Jungle">
            </div>
            <div class="swampDiv habitatDiv habitats">
                <img src="../../../public/pictures/swamp.jpg" alt="marais">
                Marais
            </div> -->
        </div>
    </section>
    <section class="sectionServices">
        <h1>Nos Services</h1>
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
    </section>
    <section class="sectionEcology">
        <h1>Arcadia, une approche écologique pour la gestion du parc</h1>
        <div class="ecologyMenu">
            <div id="menu">
                <button class="menuBtn" id="menuBtn" title="showMenu">Cliquez pour découvrir nos actions</button>
                <div class="items">
                    <div class="menuItem item1">
                        <button class="itemBtn"><img src="../../../public/pictures/bolt-solid.svg" alt="bolt"></button>
                    </div>
                    <div class="menuItem item2">
                        <button class="itemBtn"><img src="../../../public/pictures/water-solid.svg" alt="water"></button>
                    </div>
                    <div class="menuItem item3">
                        <button class="itemBtn"><img src="../../../public/pictures/seedling-solid.svg" alt="seedling"></button>
                    </div>
                    <div class="menuItem item4">
                        <button class="itemBtn"><img src="../../../public/pictures/recycle-solid.svg" alt="recycle"></button>
                    </div>
                </div>
            </div>
            <div class="encart">
                <p class="ecological">
                    Le zoo Arcadia se distingue par son engagement écologique exemplaire, étant entièrement autonome en énergie grâce à l'utilisation de panneaux solaires et d'éoliennes. La gestion de l'eau y est également 100% verte, avec un système innovant de récupération des eaux de pluie et de filtration naturelle à travers des bassins plantés de roseaux. Tous les déchets produits sont soit recyclés, soit valorisés en compost pour nos jardins. Enfin, la nourriture destinée aux animaux est exclusivement locale, provenant de fermes partenaires qui pratiquent une agriculture durable. Arcadia incarne ainsi une harmonie parfaite entre préservation de la biodiversité et respect de l'environnement.
                </p>
            </div>
    </div>
    </section>