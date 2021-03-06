<?php
/* Template Name: Exhibitions */
get_header();
?>
<div class="single-page">
    <div class="site-content page">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                get_template_part('content', 'page');
            endwhile;
        else :
            get_template_part('content', 'none');
        endif;
        ?>
    </div>
</div>
<?php
get_footer();
?>
