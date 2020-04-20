<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="author" content="Luan Gjokaj, and WordPressify contributors"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="header" class="header">
    <div class="header__section header__section--right">
        <h1>Logo</h1>
    </div>
    <div class="header__section header__section--right">

        <nav>
            <ul class="utils">
                <li class="utils__item">
                    <button class="utils__button contrast-button">Kontrast</button>
                </li>
                <li class="utils__item">
                    <button class="utils__button utils__button contrast-button--active">A</button>
                    <button class="utils__button">A+</button>
                    <button class="utils__button">A++</button>
                </li>
                <li class="utils__item">
                    <a href="#" class="utils__button utils__button--active">pl</a>
                    <a href="#" class="utils__button">en</a>
                    <a href="#" class="utils__button">ua</a>
                </li>
            </ul>
        </nav>

        <button id="toggle-nav" class="toggle-nav-button">
            menu
            <span aria-hidden="true"></span>
        </button>
    </div>
</header>

<div class="nav-container">
    <div class="nav-container__menus">
        <?php
        wp_nav_menu(array('theme_location' => 'main-menu'));
        wp_nav_menu(array('theme_location' => 'secondary-menu'));
        ?>
    </div>
</div>
<div class="opening-hours">

    <section class="opening-hours__content" role="dialog">
        <div class="opening-hours__gallery">
            <h1 class="opening-hours__title">Galeria XXX</h1>
            <span class="opening-hours__location">
                <span class="opening-hours__icon material-icons" aria-hidden="true">room</span>
                <span>ul. Lublin</span>
            </span>

            <dl>
                <dt>Wystawy</dt>
                <dd>Wtorek - Niedziela: 12:00 - 19:00</dd>
                <dt>Biuro</dt>
                <dd>Poniedziałem - Piątek: 8:00 - 16:00</dd>
            </dl>

        </div>

        <div class="opening-hours__gallery">
            <h1 class="opening-hours__title">Galeria XXX</h1>
            <span class="opening-hours__location">
                <span class="opening-hours__icon material-icons" aria-hidden="true">room</span>
                <span>ul. Lublin</span>
            </span>

            <dl>
                <dt>Wystawy</dt>
                <dd>Wtorek - Niedziela: 12:00 - 19:00</dd>
            </dl>

        </div>

        <div class="opening-hours__gallery">
            <h1 class="opening-hours__title">Galeria XXX</h1>
            <span class="opening-hours__location">
                <span class="opening-hours__icon material-icons" aria-hidden="true">room</span>
                <span>ul. Lublin</span>
            </span>

            <dl>
                <dt>Wystawy</dt>
                <dd>Wtorek - Niedziela: 12:00 - 19:00</dd>
            </dl>

        </div>
    </section>

    <button class="opening-hours__button">
        <span class="opening-hours__icon material-icons">query_builder</span>
        <span class="opening-hours__text">godziny otwarcia</span>
    </button>
</div>

<section class="slider">
    <div class="slider__content">
        <article>
            <ul class="slider__meta">
                <li>
                    <span class="material-icons">calendar_today</span>
                    <span>06.12.2019 - 05.01.2020</span>
                </li>
                <li>
                    <span class="material-icons">location_on</span>
                    <span>Galeria XXX</span>
                </li>
            </ul>
            <h2 class="slider__title">
                <a href="#" class="slider__title-link">Mikołaj Smoczyński - Thema Secret</a>
                <a href="#" class="category-button">wystawa</a>
            </h2>
            <p class="slider__paragraph">
                Mikołaj Smoczyński to jeden z najwybitniejszych artystów lubelskich drugiej połowy XX wieku, przez wiele
                lat związany z Galerią Labirynt. Znany był z fotografii kreacyjnych będących efektem działań
                performatywnych realizowanych w pracowni, przed kamerą fotograficzną
            </p>
        </article>
    </div>
    <div class="slider__image">
        <img src="<?php bloginfo('template_url'); ?>/img/slider.jpg" alt="slider sampke image">
    </div>
</section>

<section class="section section--today">
    <h3 class="section__title">Dziś</h3>
    <span class="section__date">Czwartek</span>
    <ul class="featured-list">
        <li>asdasda</li>
    </ul>
</section>

<?php edit_post_link('Edit', '<p class="edit-button">', '</p>'); ?>
