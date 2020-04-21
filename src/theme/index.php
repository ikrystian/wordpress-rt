<?php get_header(); ?>
<!-- site-content -->
<article class="page">
    <header class="single-page__header">
        <h1 class="single-page__title">Wystawy</h1>
        <div class="single-page__header-actions">
            <button class="filters-button">
                <span>pokaż filtry</span>
            </button>
        </div>
    </header>

    <aside class="filters">
        <div class="container">
            <form action="" class="filters-form">
                <div class="filters-form__fields">
                    <div class="filters-form__group">
                        <label for="for-who">Dla kogo</label>
                        <select name="for-who" id="for-who">
                            <option value="">Wszyscy</option>
                            <option value="">Dzieci</option>
                            <option value="">Dorośli</option>
                        </select>
                    </div>
                    <div class="filters-form__group">
                        <label for="accessibility">Dostępność</label>
                        <select name="accessibility" id="accessibility">
                            <option value="">Niewidomi</option>
                            <option value="">Niesłyszący</option>
                            <option value="">Niedojebani mózgowo</option>
                        </select>
                    </div>
                    <div class="filters-form__group">
                        <label for="language">Język</label>
                        <select name="language" id="language">
                            <option value="">Polski</option>
                            <option value="">Angielski</option>
                            <option value="">Ukraiński</option>
                            <option value="">Inny</option>
                        </select>
                    </div>
                    <div class="filters-form__group">
                        <label for="category">Kategoria</label>
                        <select name="category" id="category">
                            <option value="">lorem</option>
                        </select>
                    </div>
                    <div class="filters-form__group">
                        <label for="location">Język</label>
                        <select name="location" id="location">
                            <option value="">Wszędzie</option>
                            <option value="">Galeria XXX</option>
                            <option value="">Galeria XXX 2</option>
                            <option value="">Galeria XXX 3</option>
                            <option value="">Inne</option>
                        </select>
                    </div>
                </div>
                <div class="filters-form__actions">
                    <button class="filters-form__clear-button" type="reset" id="clear-filters">
                        <span class="material-icons">close</span>
                        <span>wyczyść</span>
                    </button>
                </div>
            </form>
        </div>
    </aside>
    <!-- main-column -->
    <div class="posts-list container">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                get_template_part('content', get_post_format());
            endwhile;
        else :
            get_template_part('content', 'none');
        endif;
        ?>
    </div>
    <!-- /main-column -->
    <div class="pagination side">
        <?php echo paginate_links(); ?>
    </div>
</article>
<!-- /site-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
