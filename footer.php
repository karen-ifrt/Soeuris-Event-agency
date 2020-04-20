<footer>
    <div class="container">
        <div class="all-footer">
            <div class="row">
                <div class="col-md-6">
                    <div class="block-footer">
                        <p><?php the_field('adresse_formulaire', 'options'); ?></p>
                        <div class="contact-footer">
                            <p><?php the_field('telephone_formulaire', 'options'); ?></p>
                            <p class="mail-footer"><?php the_field('adresse_mail_formulaire', 'options'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="block-footer">
                        <p>Mentions légales</p>
                        <p>Politique de confidentialité</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>



<?php wp_footer(); ?>

</div>
</body>

</html>