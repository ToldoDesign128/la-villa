<?php get_header(); ?>

<main class="camere">
    <!-- Hero -->
    <section class="camere__hero">
        <div class="row camere__hero__title">
            <h2>Le Camere</h2>
        </div>
        <div class="camere__hero__image">
            <img src="http://lavillapinarella.it/wp-content/uploads/2023/03/foto_camere9-scaled.webp" alt="">
        </div>
    </section>

    <!-- poster -->
    <section class="camere__poster">
        <div class="container camere__poster__container">
            <div class="row camere__poster__container__block">
                <div class="camere__poster__container__block__text">
                    <p>I nostri ospiti sono liberi di godere del proprio tempo come preferiscono, per questo abbiamo deciso di offrire un servizio diverso dalla solita pensione completa che permette di dimenticarsi a casa l’orologio e di decidere al momento cosa fare della propria giornata.</p>
                    <p>Nella prenotazione non sono compresi i pasti, ma a disposizione tutti i giorni una caffetteria e un ristorante bruschetteria all’interno della struttura dove sarà possibile fermarsi quando si vuole decidendo al momento e pagando solo quello che viene consumato.</p>
                    <p>Con la camera invece è compreso la pulizia giornaliera, la biancheria, il wi-fi, il parcheggio la tv e l’aria condizionata ed una convenzione per l’ombrellone alla spiaggia e due lettini a 10 euro al giorno.</p>
                </div>
                <div class="camere__poster__container__block__image">
                    <img loading=lazy src="http://lavillapinarella.it/wp-content/uploads/2023/03/foto_camere2-scaled.webp" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- frase -->
    <section class="camere__frase">
        <div class="container camere__frase__container">
            <h4 class="camere__frase__container__title">Aria condizionata, Wi-fi e televisore, matrimoniali, triple, quadruple e comunicanti per le famiglie più numerose.</h4>
            <h4 class="camere__frase__container__title">Da tutte le camere raggiungere la spiaggia è un attimo, comodamente a piedi ttraversando la pineta.</h4>
        </div>
    </section>

    <!-- gallery camera -->
    <section class="camere__gallery">
        <div class="container camere__gallery__container">
            <div class="row camere__gallery__container__block">
                <div class="camere__gallery__container__block__text">
                    <h3>Lato Pineta</h3>
                    <p>Un balcone che affaccia direttamente in pineta a 50 metri dal mare, si può sentire il rumore delle onde infrangersi sulla batigia e il cinguettio degli uccellini al risveglio la mattina.</p>
                </div>
                <div class="camere__gallery__container__block__image">
                    <?php get_template_part('template-parts/loop-camere1'); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- gallery2 camera -->
    <section class="camere__gallery2">
        <div class="container camere__gallery2__container">
            <div class="row camere__gallery2__container__block">
                <div class="camere__gallery2__container__block__image">
                    <?php get_template_part('template-parts/loop-camere2'); ?>
                </div>
                <div class="camere__gallery2__container__block__text">
                    <h3>Lato Pineta</h3>
                    <p>A Pinarella di Cervia il Viale Italia è la strada che costeggia la pineta, la sera diventando zona pedonale ospita numerosi mercatini di artigianato locale.</p>
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
                        <button type="button">Chiedi un preventivo</button>
                    </a>
                </div>
                <div class="cta__ristorante__button">
                    <a href="https://booking.passepartout.cloud/booking?oidPortale=9804&lingua=it" target="_blank">
                        <button type="button">Prenota ora</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>