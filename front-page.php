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
                    <div class="hero__content__block__text">
                        <p>É un piccolo anacronistico albergo in mezzo a quartieri di hotel convenzionali.</p>
                        <p>Discreto come un fiorellino vero in mezzo ad un prato artificiale ma immerso nella pineta ed affacciato al mare.</p>
                    </div>
                    
                    <div class="row hero__content__block__cta">
                        <div class="hero__content__block__cta__button">
                            <a href="https://lavilla.comodohotel.it/" target="_blank">
                                <button>Chiedi un preventivo</button>
                            </a>                    
                        </div>
                        <div class="hero__content__block__cta__button">
                            <a href="https://booking.passepartout.cloud/booking?oidPortale=9804&lingua=it" target="_blank">
                                <button>Prenota ora</button>
                            </a>                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stiky Post -->
    <section class="stiky">
        <article class="container-fluid">
            <div class="row">
                <?php $sticky = get_option( 'sticky_posts' );
                    rsort( $sticky );
                    $args = array(
                        'post__in' => $sticky,
                        'posts_per_page' => 1
                    );
                    $sticky_query = new WP_Query( $args );
                    while ( $sticky_query->have_posts() ) : $sticky_query->the_post(); ?>
                                <div class="stiky__post">
                                    <picture class="stiky__post__img"><?php the_post_thumbnail(); ?></picture>
                                </div>
                    <?php endwhile;
                    wp_reset_postdata();
                ?>
            </div>
        </article>
    </section>

    <!-- poster -->
    <section class="poster">
        <div class="container poster__container">
            <div class="row poster__container__block">
                <div class="poster__container__block__text">
                    <p>La prima cosa che salta all’occhio è l’autenticità del luogo che non è stato costruito per essere un albergo ma nasce come villa privata e ne mantiene tutte le caratteristiche, spirito, arredamento, disposizione dei locali, l’aria stessa che si respira, tutto è a misura e nello spirito di famiglia.</p>
                </div>
                <div class="poster__container__block__image">
                    <img src="<?php echo get_template_directory_uri() . '/assets/image/foto/home/foto3.jpg';?>" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- poster 2 -->
    <section class="poster2">
        <div class="container poster2__container">
            <div class="row poster2__container__block">
                <div class="poster2__container__block__image">
                    <img src="<?php echo get_template_directory_uri() . '/assets/image/foto/home/foto2.jpg';?>" alt="">
                </div>
                <div class="poster2__container__block__text">
                    <p>Alla villa non ci si può aspettare convenzioni, inchini, salamelecchi e livree, ma a chi arriva è riservata l’accoglienza vera e semplice di chi viene a trovare vecchi amici per passare un periodo sereno fuori dalla routine.</p>
                    <p>Vissuto con libertà, naturalezza, semplicità, e bene o male con lo spirito di chi vuol essere a proprio agio a casa propria.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- focus -->
    <section class="focus">
        <div class="container focus__text">
            <p>Ciao ciao vecchia pensione completa!</p>
            <p>Alla Villa ognuno è libero di vivere la propria vacanza senza guardare l’orologio scegli la camera che preferisci a due passi dal mare.</p>
            <p>E per i pasti decidi al momento,Il nostro ristorante è a tua completa disposizione.</p>
        </div>
    </section>
</main>

<?php get_footer();?>