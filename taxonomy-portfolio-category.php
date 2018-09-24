<?php get_header(); ?>

<div class="section-box" id="section-two">
    <div class="portfolio">
        <h1 class="page-name"><?php single_term_title(); ?></h1>
        <?php
        $category = get_queried_object();
        $current_category_id = $category->term_id;

        $categories = get_terms(array(
            'taxonomy' => 'portfolio-category',
            'hide_empty' => true,
            'orderby' => 'name',
            'order' => 'ASC',
        ));

        if (count($categories)) { ?>
            <div class="container filter">
                <ul class="filter-list text-center text-uppercase">
                    <?php foreach ($categories as $category) {
                        $category_id = $category->term_id;
                        $is_current = $current_category_id === $category_id ? 'is-current' : '';
                        ?>
                        <li class="filter-item">
                            <a class="filter-link <?php echo esc_attr($is_current); ?>"
                               href=" <?php echo esc_url(get_category_link($category->term_id)); ?>">
                                <?php echo esc_html($category->name); ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        <?php }
        if (have_posts()) { ?>
            <div class="portfolio-list without-js">
                <?php while (have_posts()) {
                    the_post();
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
                    <div class="portfolio-item"
                         id="post-<?php the_ID(); ?>" <?php post_class('portfolio-item'); ?>>
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
            </div>
        <?php } ?>
    </div>
</div>

<?php get_footer(); ?>
