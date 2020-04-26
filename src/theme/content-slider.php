<div class="owl-carousel owl-theme">
    <?php
    query_posts(array('post_type' => 'post'));
    while (have_posts()) : the_post();
        ?>
        <div class="post">
            <div class="post__thumbnail">
                <a  href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <span class="hide"><?php the_title(); ?></span>
                    <ul class="post__icons">
                        <li><?= __('Wystawa'); ?></li>
                        <li><span class="material-icons">wb_iridescent</span></li>
                        <li><span class="material-icons">translate</span></li>
                    </ul>
                    <?php the_post_thumbnail('medium'); ?>
                </a>
            </div>
            <div class="post__content">
                <h2 class="post__title post__title--light">
                    <a class="post__title-link" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <ul class="slider__meta">
                    <li>
                        <span class="material-icons">calendar_today</span>
                        <span><?= the_field('start_date'); ?> - <?= the_field('end_date'); ?></span>
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
