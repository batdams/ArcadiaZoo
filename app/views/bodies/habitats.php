<main id="habitats">
    <section class="section1Living">
        <h4>Découvrez les habitats et leurs animaux</h4>
        <div class="livingsList">
            <button class="btnLeftLivings btnLivingsPage">&lt;</button>
            <div class="livingCarroussel">
                <?php 
                    $habitats = $data['habitats'];
                    foreach($habitats as $habitat) {
                    echo '<div class="livingCarrousselUnits">';
                            echo '<img class="imgUnits" src="' . $habitat->getImgPath() . '" alt="' . $habitat->getName() . '" id="' . $habitat->getName() . '"  data-value="' . $habitat->getId() . '">';
                            echo '<div class="unitText">';
                            echo $habitat->getName();
                            echo '</div>';
                    echo '</div>';
                    }
                ?>
            </div>
            <button class="btnRightLivings btnLivingsPage">&gt;</button>
        </div>
    </section>
    <div class="livingDescription">
        <div class="lvgCorps">
            <?php
                foreach($habitats as $habitat) {
                echo '<div class="presLvg hideLvg ' . $habitat->getName() . '">';
                    echo '<h4>' . $habitat->getName() . '</h4>';
                    echo '<p>' . $habitat->getDescription() . '</p>';
                echo '</div>';
                }
//                var_dump($data['animals']);
            ?>
        </div>
        <div class="lvgAnimalsList">
            <?php
                $animals = $data['animals'];
                $breeds = $data['breeds'];
                foreach($animals as $animal) {
                    echo '<div class=animalUnit>';
                        echo '<img src="' . $animal->getImgPath() . '" alt="'. $animal->getName() .'" class="imgAnimal hideImg lvg'. $animal->getHabitat() .'">';
                        echo '<div class="animalInfos animalInfosHide lvg'. $animal->getHabitat() .'">';
                            echo '<h4>' . $animal->getName(). '</h4>';
                            echo '<div class="infosSup hide">';
                            foreach($breeds as $breed) {
                                if ($breed['breed_id'] == $animal->getBreed()) {
                                    echo 'Famille : ' . $breed['breed_name'] . '<br>';
                                }
                            }
                            echo 'Régime : ' . $animal->getDiet().  '<br>';
                            echo $animal->getDescription().  '<br>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>