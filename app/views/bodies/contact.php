<main id="contact">
    <section class="section1Contact">
        <div class="contactDIV">
            <h1>CONTACT</h1>
            <div class="contactFormDIV">
                <form method="POST" action="<?php echo BASE_URL;?>/form">
                    <label for="titleContactForm">Objet</label>
                    <input type="text" name="titleContactForm" id="titleContactForm">
                    <label for="descriptionContactForm">Description</label>
                    <textarea name="descriptionContactForm" id="descriptionContactForm"></textarea>
                    <label for="mailContactForm">Email</label>
                    <input type="mail" name="mailContactForm" id="mailContactForm">
                    <button type="submit">Envoyer</button>
                </form>
            </div>
            <?php
            // APPERCU MESSAGE
            ?>
        </div>
    </section>