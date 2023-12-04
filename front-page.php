<?php get_header(); ?>

<main>
    <!-- Hero -->
    <section class="hero">
        <div class="row hero__title">
            <h1>La Villa</h1>
            <h4>Camere e Ristorante</h4>
        </div>
        <div class="container">
            <div class="row hero__content">
                <div class="hero__content__image">
                    <img loading=lazy src="https://lavillapinarella.it/wp-content/uploads/2023/03/foto1-1.webp" alt="">
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
    <?php $sticky = get_option('sticky_posts');
    rsort($sticky);
    $args = array(
        'post__in' => $sticky,
        'posts_per_page' => 1
    );
    $sticky_query = new WP_Query($args);
    while ($sticky_query->have_posts()) : $sticky_query->the_post(); ?>
        <section class="stiky">
            <?php
            if (has_post_thumbnail()) {
                echo get_the_post_thumbnail(null, 'full', ['class' => '']);
            };
            ?>
            <div class="stiky__content">
                <p>
                    <?php echo the_content() ?>
                </p>
                <div class="container">
                    <div class="stiky__content__button">
                        <a href="https://artevento.com/" target="_blank">
                            Scopri di più
                        </a>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile;
    wp_reset_postdata();
    ?>

    <!-- poster -->
    <section class="poster">
        <div class="container poster__container">
            <div class="row poster__container__block">
                <div class="poster__container__block__text">
                    <p>La prima cosa che salta all’occhio è l’autenticità del luogo che non è stato costruito per essere un albergo ma nasce come villa privata e ne mantiene tutte le caratteristiche, spirito, arredamento, disposizione dei locali, l’aria stessa che si respira, tutto è a misura e nello spirito di famiglia.</p>
                </div>
                <div class="poster__container__block__image">
                    <img loading=lazy src="https://lavillapinarella.it/wp-content/uploads/2023/03/foto3-scaled.webp" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- poster 2 -->
    <section class="poster2">
        <div class="container poster2__container">
            <div class="row poster2__container__block">
                <div class="poster2__container__block__image">
                    <img loading=lazy src="https://lavillapinarella.it/wp-content/uploads/2023/03/foto2-scaled.webp" alt="">
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

    <!-- Ristorante -->
    <section class="ristorante">
        <div class="container ristorante__container">
            <div class="row ristorante__container__block">
                <div class="ristorante__container__block__text">
                    <h4>Il nostro Chef vi aspetta con la sua cucina. <br><br> Scopri il ristorante</h4>
                    <div class="ristorante__container__block__text__button">
                        <a href="risto">
                            <button>Scopri il ristorante</button>
                        </a>
                    </div>
                </div>
                <div class="ristorante__container__block__image">
                    <img loading=lazy src="https://lavillapinarella.it/wp-content/uploads/2023/03/ristorante3-scaled.webp" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Ristorante -->
    <section class="cta__ristorante">
        <div class="container">
            <div class="row">
                <div class="cta__ristorante__button">
                    <a href="https://lavilla.comodohotel.it/" target="_blank">
                        <button>Chiedi un preventivo</button>
                    </a>
                </div>
                <div class="cta__ristorante__button">
                    <a href="https://booking.passepartout.cloud/booking?oidPortale=9804&lingua=it" target="_blank">
                        <button>Prenota ora</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Mappa -->
    <section class="mappa">
        <div class="mappa__container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d365856.2574639731!2d12.368889!3d44.243056!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaeec65de2df1e3c1!2sHotel%20La%20Villa!5e0!3m2!1sit!2sus!4v1676476511688!5m2!1sit!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- Bando -->
    <section class="poster3">
        <div class="container poster3__container">
            <div class="row poster3__container__block">
                <div class="poster3__container__block__image">
                    <img loading=lazy src="https://lavillapinarella.it/wp-content/uploads/2023/03/foto6-1.webp" alt="">
                </div>
                <div class="poster3__container__block__text">
                    <p>L’impresa ALDO RAVEGNANI ha ricevuto nell’anno 2021 l’erogazione di un contributo pari ad € 20.860,07 per la partecipazione al</p>
                    <p> <strong> “Bando Sostegno agli investimenti delle imprese operanti nelle attività ricettive e turistico-ricreative (art. 6 L.R. 25/2018)” </strong> </p>
                    <p> a valere sul finanziamento con protocollo PG/2019/763251 .</p>
                    <p>Con questo progetto di investimento finanziato con risorse regionali, ha eseguito un intervento di ristrutturazione e riqualificazione dell’Hotel La Villa sito in Pinarella di Cervia</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>