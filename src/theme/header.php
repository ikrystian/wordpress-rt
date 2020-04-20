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
    <h1>Logo</h1>
    <div>
        <button id="toggle-nav" class="toggle-nav-button">
            menu
            <span aria-hidden="true"></span>
        </button>
    </div>
</header>

<div class="nav-container">
    <div class="nav-container__menus">
        <?php
        wp_nav_menu();
        wp_nav_menu();
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
    lore
</section>

<?php edit_post_link('Edit', '<p class="edit-button">', '</p>'); ?>
