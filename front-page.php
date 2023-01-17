<?php get_header();?>

<main>
    <!-- Hero -->
    <section class="hero">
        <div class="row hero__title">
            <h1>La Villa</h1>
        </div>
        <div class="container">
            <div class="row hero__content">
                <div class="hero__content__image">
                    <img src="<?php echo get_template_directory_uri() . '/assets/image/foto/home/foto1.png';?>" alt="">
                </div>
                <div class="hero__content__block">
                    <p>É un piccolo anacronistico albergo in mezzo a quartieri di hotel convenzionali.</p>
                    <p>Discreto come un fiorellino vero in mezzo ad un prato artificiale ma immerso nella pineta ed affacciato al mare.</p>
                    
                    <div class="row">
                        <div class="hero__content__block__cta">
                            <a href="https://lavilla.comodohotel.it/" target="_blank">
                                <button>Chiedi un preventivo</button>
                            </a>                    
                        </div>
                        <div class="hero__content__block__cta">
                            <a href="https://booking.passepartout.cloud/booking?oidPortale=9804&lingua=it" target="_blank">
                                <button>Prenota ora</button>
                            </a>                    
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</main>

<?php get_footer();?>