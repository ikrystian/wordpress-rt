<?php
/* Template Name: Simple page */
get_header(); ?>
    <div class="simple-page">
        <div class="sub-menu">
            <nav class="container">
                <ul class="tabs">
                    <li><a href="#">O nas</a></li>
                    <li><a href="#">Współpraca</a></li>
                    <li><a href="#">Historia</a></li>
                    <li><a href="#">Rada programowania</a></li>
                    <li><a href="#" class="active">Zespół</a></li>
                </ul>
            </nav>
        </div>

        <div class="simple-page__thumbnail">
            <?php echo get_the_post_thumbnail(); ?>
        </div>
        <div class="container simple-page__content">
            <h1 class="simple-page__title"><?= the_title(); ?></h1>

            <?php
            if (have_posts()) {
                wp_reset_query();
                echo esc_attr(htmlentities(the_content()));
            } else {
                echo "Es wurde noch kein Text definiert.";
            };
            ?>
        </div>
    </div>
<?php
get_footer();
