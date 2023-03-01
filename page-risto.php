<?php get_header(); ?>

<main class="ristorante">
    <!-- Hero -->
    <section class="ristorante__hero">
        <div class="row ristorante__hero__title">
            <h2>Il Ristorante</h2>
        </div>
        <div class="ristorante__hero__image">
            <img src="http://lavillapinarella.it/wp-content/uploads/2023/03/ristorante1-scaled.webp" alt="">
        </div>
        <div class="ristorante__hero__button row">
            <a href="http://lavillapinarella.it/wp-content/uploads/2022/03/LaVilla-menu.pdf" target="_blank" >
                <button type="button">Scopri il menu</button>
            </a>
        </div>
    </section>

    <!-- frase -->
    <section class="ristorante__frase">
        <div class="container ristorante__frase__container">
            <h4>Il ristorante è aperto a tutti, tutto l’anno.</h4>
            <h5>I Clienti che alloggiano da noi potranno scegliere ogni giorno a loro piacere di fermarsi oppure no per la ristorazione oppure essere liberi di esplorare le numerose proposte gastronomiche offerte da Cervia e dintorni.</h5>
            <p>I menù sono riferiti alla stagione 2022 e soggetti a modifiche</p>
        </div>
    </section>

    <!-- poster -->
    <section class="ristorante__poster">
        <div class="container ristorante__poster__container">
            <div class="row ristorante__poster__container__block">
                <div class="ristorante__poster__container__block__text">
                    <h4>Una vera passione per la Romagna.</h4>
                    <h4>I sapori del mare e della terra.</h4>
                </div>
                <div class="ristorante__poster__container__block__image">
                    <img loading=lazy src="http://lavillapinarella.it/wp-content/uploads/2023/03/ristorante3-scaled.webp" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- poster 2 -->
    <section class="ristorante__poster2">
        <div class="container ristorante__poster2__container">
            <div class="row ristorante__poster2__container__block">
                <div class="ristorante__poster2__container__block__image">
                    <img loading=lazy src="http://lavillapinarella.it/wp-content/uploads/2023/03/foto5-scaled.webp" alt="">
                </div>
                <div class="ristorante__poster2__container__block__text">
                    <h4>Nazario, il nostro cheff</h4>
                    <p>I menù sono riferiti alla stagione 2022 e soggetti a modifiche</p>
                    <div class="ristorante__poster2__container__block__text__button">
                        <a href="http://lavillapinarella.it/wp-content/uploads/2022/03/LaVilla-menu.pdf" target="_blank" >
                            <button type="button">Scopri il menu</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- poster 3-->
    <section class="ristorante__poster3">
        <div class="container ristorante__poster3__container">
            <div class="row ristorante__poster3__container__block">
                <div class="ristorante__poster3__container__block__text">
                    <h4>Assaggia le nostre bruschette: </h4>
                    <h5>Il nostro pane viene prodotto a Predappio secondo l’antica tradizione, la sua particolare lievitazione lo rende leggero e genuino dal gusto inconfondibile.</h5>
                </div>
                <div class="ristorante__poster3__container__block__image">
                    <img loading=lazy src="http://lavillapinarella.it/wp-content/uploads/2023/03/ristorante2-scaled.webp" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- poster 4 -->
    <section class="ristorante__poster4">
        <div class="container ristorante__poster4__container">
            <div class="row ristorante__poster4__container__block">
                <div class="ristorante__poster4__container__block__image">
                    <img loading=lazy src="http://lavillapinarella.it/wp-content/uploads/2023/03/ristorante4.webp" alt="">
                </div>
                <div class="ristorante__poster4__container__block__text">
                    <h4>La Romagna è una terra tutta da gustare: conoscere le sue tradizioni e i suoi sapori vi farà scoprire la sua essenza</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- gallery ristorante -->
    <section class="ristorante__gallery">
        <div class="container ristorante__gallery__container">
            <div class="ristorante__gallery__container__image">
                <?php get_template_part('template-parts/loop-ristorante'); ?>
            </div>
        </div>
    </section>

    <!-- frase -->
    <section class="ristorante__frase2">
        <div class="container ristorante__frase2__container">
            <h3>Colazione</h3>
            <p>dalle 7.30 alle 11.00</p>
            <h4>Lasciati coccolare al mattino nella luce della veranda sulla pineta.</h4>
        </div>
    </section>

    <!-- poster 5-->
    <section class="ristorante__poster5 bb-none">
        <div class="container ristorante__poster5__container">
            <div class="row ristorante__poster5__container__block">
                <div class="ristorante__poster5__container__block__text">
                    <h4>Il Pranzetto E La Cena</h4>
                    <p>dalle 12.30 alle 14.30 e dalle 19.30 alle 23.00</p>
                    <h5>Nel nostro ristorante si può scegliere comodamente alla carta oppure approfittare delle convenzioni con menù completi e convenienti senza perdersi nulla della nostra cucina.</h5>
                </div>
                <div class="ristorante__poster5__container__block__image">
                    <img loading=lazy src="http://lavillapinarella.it/wp-content/uploads/2023/03/ristorante5-scaled.webp" alt="">
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