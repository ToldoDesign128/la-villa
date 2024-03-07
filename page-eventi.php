<?php get_header(); ?>

<main class="camere">
    <!-- Hero -->
    <section class="camere__hero">
        <div class="row camere__hero__title">
            <h2>I nostri Eventi</h2>
        </div>
        <div class="camere__hero__image">
            <img loading=lazy src="https://lavillapinarella.it/wp-content/uploads/2023/03/foto_camere-9_9_11zon-scaled.jpg" alt="">
        </div>
    </section>

    <!-- gallery2 eventi-->
    <section class="camere__gallery2">
        <div class="container camere__gallery2__container">
            <div class="row camere__gallery2__container__block">
                <div class="camere__gallery2__container__block__image">
                    <?php get_template_part('template-parts/loop-camere2'); ?>
                </div>
                <div class="camere__gallery2__container__block__text">
                    <h3>La musica in pineta</h3>
                    <p>Alla Villa organizziamo concerti, invitiamo amici e musicisti della zona, ci mettiamo seduti in pineta, sulla terra e ci lasciamo coinvolgere dalla musica, i concerti finiscono presto, alle 23:30 la musica si stacca, chi vuole può fare una passeggiata a vedere il mare c'è chi invece preferisce restare a fare due chiacchiere con gli amici, ma poi dritti a nanna perchè domattina ci incontriamo tutti in spiaggia.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- gallery2 eventi-->
    <section class="camere__gallery2">
        <div class="container camere__gallery2__container">
            <div class="row camere__gallery2__container__block">
                <div class="camere__gallery2__container__block__image">
                    <?php get_template_part('template-parts/loop-camere2'); ?>
                </div>
                <div class="camere__gallery2__container__block__text">
                    <h3>La musica in pineta</h3>
                    <p>Alla Villa organizziamo concerti, invitiamo amici e musicisti della zona, ci mettiamo seduti in pineta, sulla terra e ci lasciamo coinvolgere dalla musica, i concerti finiscono presto, alle 23:30 la musica si stacca, chi vuole può fare una passeggiata a vedere il mare c'è chi invece preferisce restare a fare due chiacchiere con gli amici, ma poi dritti a nanna perchè domattina ci incontriamo tutti in spiaggia.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- gallery3 eventi-->
    <section class="camere__gallery">
        <div class="container camere__gallery__container">
            <div class="row camere__gallery__container__block">
                <div class="camere__gallery__container__block__text">
                    <h3>Arte e poesia</h3>
                    <p>Ogni tanto ci piace anche svegliarci presto, la pineta alle prime luci del mattino regala uno spettacolo incredibile e si può fare anche lo yoga! é gratis e perfetto anche per chi non ha mai provato, dopo però prima della spiaggia, ci facciamo una bella colazione in mezzo al cinguettio degli uccelini.</p>
                </div>
                <div class="camere__gallery__container__block__image">
                    <img loading="lazy" src="https://lavillapinarella.it/wp-content/uploads/2024/03/camere_pineta.jpg" alt="">
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