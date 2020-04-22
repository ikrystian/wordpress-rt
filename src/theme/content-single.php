<article class="single">
    <div class="container">
        <button id="back" class="back-button">
            <span class="material-icons">arrow_back</span>
            <span class="back-button__text">Wróć</span>
        </button>
        <!-- change to global title-->
        <h1 class="slider__title single__title">
            <a href="#" class="slider__title-link"><?php the_title(); ?></a>
            <a href="#" class="category-button">wystawa</a>
        </h1>
    </div>
    <?php if (!is_single()) : ?>
        <p class="post-info">
		<span class="date">
			<?php the_time('F j, Y g:i a'); ?>
		</span>
            <span class="author">
			<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
				<?php the_author(); ?>
			</a>
		</span>
            <span class="tags">
			<?php
            $categories = get_the_category();
            $separator = ', ';
            $output = '';

            if ($categories) {
                foreach ($categories as $category) {
                    $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
                }

                echo trim($output, $separator);
            }
            ?>
		</span>
        </p>

    <?php endif; ?>
    <div class="sub-menu sub-menu--single">
        <nav class="container">
            <ul class="tabs">
                <li><a href="#" class="active">O wystawie</a></li>
                <li><a href="#">Kolofon</a></li>
            </ul>
            <ul class="post-social post-social--single">
                <li class="post-social__title">Podziel się:</li>
                <li class="post-social__icon">
                    <a href="#" class="post-social__link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="104.028" height="101.59"
                             data-name="facebook square" viewBox="0 0 104.028 101.59">
                            <path fill="#475a96" d="M0,0H104.028V101.59H0Z" data-name="Path 24"/>
                            <path fill="#fff"
                                  d="M174.788,112.553H126.546a2.992,2.992,0,0,0-2.993,2.993v48.242a2.993,2.993,0,0,0,2.993,2.993h25.972v-21h-7.067V137.6h7.067v-6.035c0-7,4.278-10.818,10.526-10.818a57.989,57.989,0,0,1,6.315.322v7.32l-4.333,0c-3.4,0-4.056,1.615-4.056,3.984V137.6h8.1l-1.055,8.184h-7.049v21h13.819a2.993,2.993,0,0,0,2.993-2.993V115.546A2.993,2.993,0,0,0,174.788,112.553Z"
                                  data-name="Path 25" transform="translate(-98.45 -89.685)"/>
                        </svg>
                    </a>
                </li>
                <li class="post-social__icon">
                    <a href="#" class="post-social__link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                            <g data-name="twitter circle" transform="translate(-126.444 -2.281)">
                                <circle cx="50" cy="50" r="50" fill="#2daae1" data-name="Ellipse 1"
                                        transform="translate(126.444 2.281)"/>
                                <path fill="#fff"
                                      d="M297.441,149.67a26.538,26.538,0,0,1-7.7,2.133,13.558,13.558,0,0,0,5.893-7.492,26.6,26.6,0,0,1-8.512,3.287,13.316,13.316,0,0,0-9.782-4.275,13.471,13.471,0,0,0-13.4,13.543,13.837,13.837,0,0,0,.345,3.087,37.921,37.921,0,0,1-27.622-14.15,13.651,13.651,0,0,0,4.147,18.08,13.234,13.234,0,0,1-6.071-1.693v.171a13.514,13.514,0,0,0,10.75,13.278,13.2,13.2,0,0,1-3.531.475,13.462,13.462,0,0,1-2.523-.238,13.436,13.436,0,0,0,12.517,9.4,26.753,26.753,0,0,1-19.841,5.606,37.637,37.637,0,0,0,20.542,6.087c24.648,0,38.129-20.636,38.129-38.532q0-.881-.041-1.752a27.467,27.467,0,0,0,6.7-7.02Z"
                                      data-name="Path 1" transform="translate(-88.232 -117.765)"/>
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="post-social__icon">
                    <a href="#" class="post-social__link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="99.59" height="99.59" viewBox="0 0 99.59 99.59">
                            <defs>
                                <linearGradient id="a" x1="-1.971" x2="-1.264" y1="2.61" y2="3.317"
                                                gradientUnits="objectBoundingBox">
                                    <stop offset="0" stop-color="#2489be"/>
                                    <stop offset="1" stop-color="#0575b3"/>
                                </linearGradient>
                            </defs>
                            <path fill="url(#a)"
                                  d="M56.82,7.025a49.795,49.795,0,1,0,49.8,49.795A49.795,49.795,0,0,0,56.82,7.025ZM43.534,80.893H32.6V45.572H43.534ZM38.016,40.946a6.518,6.518,0,1,1,6.465-6.517A6.492,6.492,0,0,1,38.016,40.946Zm46.49,39.947H73.626V62.353c0-5.085-1.932-7.924-5.953-7.924-4.376,0-6.662,2.956-6.662,7.924V80.893H50.525V45.572H61.011v4.757a12.319,12.319,0,0,1,10.644-5.835c7.49,0,12.851,4.573,12.851,14.034V80.893Z"
                                  data-name="linkedin circle" transform="translate(-7.025 -7.025)"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="single__thumbnail">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="single__content-wrapper">
        <div class="single__content">
            <div class="container">
                <div class="single__info">
                    <h3 class="single__content-title"><?= __('Info o wydarzeniu'); ?></h3>

                    <?php the_content(); ?>

                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>
                </div>

                <div class="single__sidebar">
                    <?= do_shortcode('[contact-form-7 id="68" title="Contact form 1"]'); ?>

                </div>
            </div>
        </div>

    </div>
</article>
