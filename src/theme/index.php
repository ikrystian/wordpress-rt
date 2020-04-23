<?php get_header(); ?>
<!-- site-content -->
<article class="page">
    <div class="container">
        <header class="single-page__header">
            <h1 class="single-page__title"><?= __('Wystawy'); ?></h1>
            <div class="single-page__header-actions">
                <button class="filters-button">
                    <span><?= __('Pokaż filtry'); ?></span>
                </button>
            </div>
        </header>
    </div>


    <aside class="filters">
        <div class="container">
            <form method="get"  class="filters-form">
                <input type="hidden" name="page_id" value="38">
                <input type="hidden" name="filter" value="true">
                <div class="filters-form__fields">
                    <div class="filters-form__group">
                        <label for="for-who"><?= __('Dla kogo'); ?></label>
                        <select name="for-who" id="for-who">
                            <option value="all"><?= __('Wszyscy'); ?></option>
                            <option value="children"><?= __('Dzieci'); ?></option>
                            <option value="adult"><?= __('Dorośli'); ?></option>
                        </select>
                    </div>
                    <div class="filters-form__group">
                        <label for="accessibility"><?= __('Dostępność'); ?></label>
                        <select name="accessibility" id="accessibility">
                            <option value=""><?= __('Niewidomi'); ?></option>
                            <option value=""><?= __('Niesłyszący'); ?></option>
                        </select>
                    </div>
                    <div class="filters-form__group">
                        <label for="language"><?= __('Język'); ?></label>
                        <select name="language" id="language">
                            <option value=""><?= __('Polski'); ?></option>
                            <option value=""><?= __('Angielski'); ?></option>
                            <option value=""><?= __('Ukraiński'); ?></option>
                            <option value=""><?= __('Inny'); ?></option>
                        </select>
                    </div>
                    <div class="filters-form__group">
                        <label for="category"><?= __('Kategoria'); ?></label>
                        <?php
                        $args = array(
                            'show_count' => 1,
                            'orderby' => 'name',
                            'echo' => 0,
                        );
                        $select = wp_dropdown_categories($args);
                        $replace = "<select>";
                        $select = preg_replace('#<select([^>]*)>#', $replace, $select);
                        echo $select; ?>
                    </div>
                    <div class="filters-form__group">
                        <label for="location"><?= __('Lokacja'); ?></label>
                        <select name="location" id="location">
                            <option value=""><?= __('Wszędzie'); ?></option>
                            <option value="">Galeria XXX</option>
                            <option value="">Galeria XXX 2</option>
                            <option value="">Galeria XXX 3</option>
                            <option value=""><?= __('Inne'); ?></option>
                        </select>
                    </div>
                </div>
                <div class="filters-form__actions">
                    <button class="filters-form__button" type="reset" id="clear-filters">
                        <span class="material-icons">close</span>
                        <span><?= __('Wyczyść'); ?></span>
                    </button>

                    <button class="filters-form__button" type="submit">
                        <span class="material-icons">filters</span>
                        <span><?= __('Filtruj'); ?></span>
                    </button>
                </div>
            </form>
        </div>
    </aside>

    <div class="sub-menu" id="sub-menu">
        <nav class="container">
            <ul class="tabs">
                <li><a href="#" class="active"><?= __('Bieżące'); ?></a></li>
                <li><a href="#"><?= __('Nadchodzące'); ?></a></li>
                <li><a href="#"><?= __('Archiwalne'); ?></a></li>
            </ul>
        </nav>
    </div>

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
    <div class="pagination container">
        <?php echo paginate_links(array('type' => 'list')); ?>
    </div>
</article>
<!-- /site-content -->
<?php get_footer(); ?>
