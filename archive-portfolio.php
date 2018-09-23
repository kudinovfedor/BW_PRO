<?php get_header(); ?>

<div class="section-box" id="section-two">
    <div class="portfolio">
        <h1 class="page-name"><?php post_type_archive_title(); ?></h1>
        <?php
        $categories = get_terms(array(
            'taxonomy' => 'portfolio-category',
            'hide_empty' => true,
            'orderby' => 'name',
            'order' => 'ASC',
        ));

        if (count($categories)) { ?>
            <div class="container filter">
                <ul class="filter-list text-center text-uppercase">
                    <?php foreach ($categories as $category) { ?>
                        <li class="filter-item">
                            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"
                               class="filter-link">
                                <?php echo esc_html($category->name); ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        <?php }

        $args = array(
            'post_type' => 'portfolio',
            'posts_per_page' => -1,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) { ?>
            <div class="portfolio-list without-js">
                <?php while ($query->have_posts()) {
                    $query->the_post();
                    $attachment_id = get_post_thumbnail_id();
                    $bg_url = has_post_thumbnail() ? wp_get_attachment_image_url($attachment_id,
                        'large') : 'none';
                    $categories = get_the_terms(get_the_ID(), 'portfolio-category');
                    $link_url = function_exists('rwmb_meta') ? rwmb_meta('bw-portfolio-url') : '#';
                    $cat_names = [];
                    foreach ($categories as $category) {
                        $singular = get_metadata('term', $category->term_id, 'bw_name-singular', true);
                        $name = !empty($singular) ? $singular : $category->name;
                        $cat_names[] = $name;
                    }
                    ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class('portfolio-item'); ?>>
                        <div class="portfolio-preview">
                            <a class="portfolio-thumbnail" href="<?php echo esc_url($link_url); ?>" target="_blank"
                               style="background-image: url('<?php echo esc_url($bg_url); ?>');"></a>
                        </div>
                        <div class="portfolio-body">
                            <time class="portfolio-datetime"
                                  datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('d.m.y'); ?></time>
                            <?php if (count($cat_names)) { ?>
                                <div class="portfolio-category"><?php echo join(', ', $cat_names); ?></div>
                            <?php } ?>
                            <div class="portfolio-name text-uppercase">
                                <a href="<?php echo esc_url($link_url); ?>" target="_blank"><?php the_title(); ?></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php } ?>
    </div>
</div>

<?php get_footer(); ?>
