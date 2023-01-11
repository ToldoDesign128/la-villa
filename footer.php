<footer>
    <div class="container">
        <div class="row">
            <div class="footer__col">
                <div class="footer__col_logo">
                    <a href="<?php echo esc_url_raw(home_url()); ?>">
                        <img src="<?php echo get_template_directory_uri() . '/assets/image/logo_white.svg';?>" alt="logo">
                    </a>                    
                </div>
                <div class="footer_col_adress">
                    <a href="">
                        <p>Viale Italia, 167 – 48015 Pinarella Di Cervia (RA)</p>
                    </a>
                </div>
            </div>
            <div class="footer__col">
                <h2>
                    Contatti
                </h2>
                <a href="tel:0544987401">
                    <div class="telefono">
                        <img src="" alt="">
                        <p>+39 0544987401</p>
                    </div>
                </a>
                <a href="mailto:info@lavillapinarella.it">
                    <div class="mail">
                        <img src="" alt="">
                        <p>info@lavillapinarella.it</p>                        
                    </div>
                </a>
            </div>
            <div class="footer__col">
                <img src="" alt="tripadvisor-logo">
                <img src="" alt="instagram-logo">
                <img src="" alt="facebook-logo">
            </div>
        </div>
        <div class="row">
            <div class="credits">
                <a href="mailto:fede.toldo96@gmail.com">
                    Design and develop by Federico Toldo
                </a>
            </div>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>