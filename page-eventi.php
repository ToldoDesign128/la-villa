<?php get_header(); ?>

<main class="eventi">
    <!-- Hero -->
    <section class="eventi__hero">
        <div class="row eventi__hero__title">
            <h2>I nostri Eventi</h2>
        </div>
        <div class="eventi__hero__image">
            <img loading=lazy src="<?php echo get_template_directory_uri() ?>/assets/image/eventi/hero.jpg" alt="">
        </div>
    </section>

    <!-- gallery1 eventi-->
    <section class="eventi__gallery">
        <div class="container eventi__gallery__container">
            <div class="row eventi__gallery__container__block">
                <div class="eventi__gallery__container__block__text">
                    <h3>La musica in pineta</h3>
                    <p>Alla Villa organizziamo concerti, invitiamo amici e musicisti della zona, ci mettiamo seduti in pineta, sulla terra e ci lasciamo coinvolgere dalla musica, i concerti finiscono presto, alle 23:30 la musica si stacca, chi vuole può fare una passeggiata a vedere il mare c'è chi invece preferisce restare a fare due chiacchiere con gli amici, ma poi dritti a nanna perchè domattina ci incontriamo tutti in spiaggia.</p>

                </div>
                <div class="eventi__gallery__container__block__image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/image/eventi/musica.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- gallery2 eventi-->
    <section class="eventi__gallery2">
        <div class="container eventi__gallery2__container">
            <div class="row eventi__gallery2__container__block">
                <div class="eventi__gallery2__container__block__image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/image/eventi/yoga.jpg" alt="">
                </div>
                <div class="eventi__gallery2__container__block__text">
                    <h3>Lo yoga alla mattina</h3>
                    <p>Ogni tanto ci piace anche svegliarci presto, la pineta alle prime luci del mattino regala uno spettacolo incredibile e si può fare anche lo yoga! é gratis e perfetto anche per chi non ha mai provato, dopo però prima della spiaggia, ci facciamo una bella colazione in mezzo al cinguettio degli uccelini.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- gallery3 eventi-->
    <section class="eventi__gallery3">
        <div class="container eventi__gallery3__container">
            <div class="row eventi__gallery3__container__block">
                <div class="eventi__gallery3__container__block__text">
                    <h3>Arte e poesia</h3>
                    <p>Illuminata di sera la pineta diventa un posto magico e proprio per questo è perfetta per ospitare non solo concerti ma letture, recitazioni e manifestazioni di vario genere.</p>
                </div>
                <div class="eventi__gallery3__container__block__image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/image/eventi/arte.jpg" alt="">
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
                    <a href="https://booking.passepartout.cloud/booking?oidPortale=18485&lingua=it" target="_blank">
                        <button>Prenota ora</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>