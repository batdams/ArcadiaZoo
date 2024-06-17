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
                            echo '<img class="imgUnits" src="' . $habitat->getImgPath() . '" alt="' . $habitat->getName() . '" id="' . $habitat->getName() . '">';
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
                echo '<div class="lvgAnimalList">';
                
                echo '</div>';
                var_dump($data['animals']);
                ?>
        </div>
    </div>