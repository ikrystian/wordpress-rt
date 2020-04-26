<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="description" content="Simple wordpress theme">
    <meta name="author" content="BPCoders IT ltd."/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php wp_head(); ?>
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #4B525D;
            z-index: 666;
        }

        .loader img {
            clip-path: polygon(1rem 1rem, calc(100% - 1rem) 1rem, calc(100% - 1rem) calc(100% - 1rem), 1rem calc(100% - 1rem));
            position: relative
        }
    </style>
</head>

<body <?php body_class(); ?>>
<aside class="loader">
    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/e8e6e333001507.569c8e662ff30.gif" alt="">
</aside>
<div class="main-content" id="main-content">
    <header id="header" class="header">
        <div class="container header__container">
            <div class="header__section header__section--left">
                <h1 class="logo"><a href="/" id="logo">Logo</a></h1>
            </div>
            <div class="header__section header__section--right">

                <nav>
                    <ul class="utils">
                        <li class="utils__item">
                            <button class="utils__button contrast-button"><?= __('Kontrast') ?></button>
                        </li>
                        <li class="utils__item fontSize">
                            <button class="utils__button utils__button contrast-button--active" data-font="16">A
                            </button>
                            <button class="utils__button" data-font="18">A+</button>
                            <button class="utils__button" data-font="20">A++</button>
                        </li>
                        <li class="utils__item">
                            <a href="#" class="utils__button utils__button--active">pl</a>
                            <a href="#" class="utils__button">en</a>
                            <a href="#" class="utils__button">ua</a>
                        </li>
                    </ul>
                </nav>

                <button id="toggle-nav" class="toggle-nav-button">
                    <?= __('menu'); ?>
                    <span aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </header>

    <div class="nav-container">
        <div class="nav-container__menus">
            <div>
                <?php
                wp_nav_menu(array('theme_location' => 'main-menu'));
                wp_nav_menu(array('theme_location' => 'secondary-menu'));
                ?>
            </div>
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
            <span class="opening-hours__text">godziny otwarcia</span>
        </button>
    </div>


    <?php // edit_post_link('Edit', '<p class="edit-button">', '</p>'); ?>
