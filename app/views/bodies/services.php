<main id="services">
    <section class="section1Service">
        <h4>Découvrez nos services</h4>
        <div class="servicesList">
            <button class="btnLeftServices btnServicesPage">&lt;</button>
            <div class="serviceCarroussel">
                <?php 
                    $services = $data['services'];
                    foreach($services as $service) {
                    echo '<div class="serviceCarrousselUnits">';
                            echo '<img src="' . $service->getImgPath() . '" alt="' . $service->getTitle() . '">';
                            echo '<div class="unitText">';
                            echo $service->getDescription();
                            echo '</div>';
                    echo '</div>';
                    }
                ?>
            </div>
            <button class="btnRightServices btnServicesPage">&gt;</button>
        </div>
    </section>