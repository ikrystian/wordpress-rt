<div class="post <?php if (has_post_thumbnail()) { ?>has-thumbnail <?php } ?>" data-aos="fade-up">
    <!-- post-thumbnail -->
    <div class="post__thumbnail">
        <button class="post__hide"><?= __('Nie pokazuj więcej'); ?></button>
        <a href="<?php the_permalink(); ?>">
            <ul class="post__icons">
                <li><?= __('Wystawa'); ?></li>
                <li><span class="material-icons">wb_iridescent</span></li>
                <li><span class="material-icons">translate</span></li>
            </ul>
            <?php the_post_thumbnail('medium'); ?>
        </a>
    </div>
    <!-- /post-thumbnail -->

    <!-- inner-content -->
    <div class="post__content">
        <h2 class="post__title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <ul class="slider__meta">
            <li>
                <span class="material-icons">calendar_today</span>
                <span><?= the_field('start_date'); ?> - <?= the_field('end_date'); ?></span>
            </li>
            <li>
                <span class="material-icons">location_on</span>
                <span><?= the_field('location'); ?></span>
            </li>
        </ul>

        <?php if (is_search() or is_archive()) : ?>
            <p class="excerpt content">
                <a href="<?php the_permalink(); ?>" class="button">Read More</a>
            </p>
        <?php endif;
        if ($post->post_excerpt) : ?>
            <p class="excerpt">
                <?php echo get_the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="button">Read More</a>
            </p>
        <?php endif; ?>
    </div>
    <!-- /inner-content -->
</div>
