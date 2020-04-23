<div class="bottom-navs container">
    <?php dynamic_sidebar('sidebar1'); ?>
</div>
<footer class="footer">

    <p>
        Copyright &copy;   <?php bloginfo('name'); ?> <?php echo date('Y'); ?>  All rights reserved
    </p>
    <ul class="social">
        <li>fb</li>
        <li>tw</li>
        <li>in</li>
        <li>yt</li>
        <li>vimeo</li>
    </ul>
    <p>
        <?= __('Realizacja'); ?> <a href="#">Lorem</a>
    </p>

    <a href="#main-content" class="go-to-top" id="go-to-top" title="<?= __('Przejdź na górę strony'); ?>">
        <span class="material-icons">keyboard_arrow_up</span>
    </a>

</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
