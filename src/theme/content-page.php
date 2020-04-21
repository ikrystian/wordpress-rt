<article class="page">
    <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>

        <header class="single-page__header">
            <h1 class="single-page__title"><?php the_title(); ?></h1>
            <div class="single-page__header-actions">
                <button class="filters-button">
                    <span>pokaż filtry</span>
                </button>
            </div>
        </header>

    <?php the_content(); ?>
</article>
