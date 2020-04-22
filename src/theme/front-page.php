<?php
get_header();
?>
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
    <div class="container">
        <h3 class="section__title">Dziś</h3>
        <span class="section__date">Czwartek</span>

        <div class="owl-carousel owl-theme">
            <?php
            query_posts(array('post_type' => 'post'));
            while (have_posts()) : the_post();
                ?>
                <div class="post">
                    <div class="post__thumbnail">
                        <a href="<?php the_permalink(); ?>">
                            <ul class="post__icons">
                                <li>Wystawa</li>
                                <li><span class="material-icons">wb_iridescent</span></li>
                                <li><span class="material-icons">translate</span></li>
                            </ul>
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    </div>
                    <div class="post__content">
                        <h2 class="post__title post__title--light">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
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
                    </div>
                </div>
            <?php
            endwhile;
            wp_reset_query();
            ?>
        </div> <!-- end of owl carousel posts-->
    </div>
</section>

<section class="section">
    <div class="container">
        <h3 class="section__title">Jutro</h3>
        <span class="section__date">Piątek</span>

        <div class="section__posts">
            <div class="post">
                <div class="post__thumbnail post__thumbnail--disabled">
                    <ul class="post__icons">
                        <li class="closed">Nieczynne</li>
                    </ul>
                    <div class="post__thumbnail-content">
                        <h2>Galeria XXX</h2>
                        <!-- change slider meta class to global val -->
                        <ul class="slider__meta">
                            <li>
                                <span class="material-icons">location_on</span>
                                <span>Galeria XXX</span>
                            </li>
                        </ul>
                        <h2>Galeria xxx</h2>
                        <ul class="slider__meta">
                            <li>
                                <span class="material-icons">location_on</span>
                                <span>Galeria XXX</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
            query_posts(array('post_type' => 'post'));
            while (have_posts()) : the_post();
                ?>
                <div class="post post--posed">
                    <div class="post__thumbnail">
                        <a href="<?php the_permalink(); ?>">
                            <ul class="post__icons">
                                <li>Wystawa</li>
                                <li><span class="material-icons">wb_iridescent</span></li>
                                <li><span class="material-icons">translate</span></li>
                            </ul>
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    </div>
                    <div class="post__content">
                        <h2 class="post__title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
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
                    </div>
                </div>
            <?php
            endwhile;
            wp_reset_query();
            ?>
        </div>
        <div class="section__footer">
            <button class="action-button"><span>Wczytaj kolejne</span></button>
        </div>
    </div>
</section>
<?php
get_footer();
?>
