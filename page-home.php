<?php
/**
 * Template Name: Home Page
 **/
get_header();

$services = array(
    array(
        'icon' => get_theme_mod('bw_section_hero_item1_icon', 'none'),
        'name' => pll__(get_theme_mod('bw_section_hero_item1_title', 'Дизайн')),
        'url' => pll__(get_theme_mod('bw_section_hero_item1_url', '#')),
    ),
    array(
        'icon' => get_theme_mod('bw_section_hero_item2_icon', 'none'),
        'name' => pll__(get_theme_mod('bw_section_hero_item2_title', 'Дизайн')),
        'url' => pll__(get_theme_mod('bw_section_hero_item2_url', '#')),
    ),
    array(
        'icon' => get_theme_mod('bw_section_hero_item3_icon', 'none'),
        'name' => pll__(get_theme_mod('bw_section_hero_item3_title', 'Дизайн')),
        'url' => pll__(get_theme_mod('bw_section_hero_item3_url', '#')),
    ),
);

if (function_exists('pll_e')) { ?>
    <section class="section-box pt-0">
        <div class="sp-xs-2 sp-sm-2 sp-md-2 sp-lg-2 sp-xl-2"></div>
        <div class="container">
            <div class="service text-center">
                <h1 class="page-name"><?php pll_e(get_theme_mod('bw_section_hero_title', 'Разработка сайтов')); ?></h1>
                <div class="sp-xs-2 sp-sm-2 sp-md-2 sp-lg-2 sp-xl-2"></div>
                <h2><?php pll_e(get_theme_mod('bw_section_hero_subtitle',
                        'Профессиональное решение для Вашего бизнеса')); ?></h2>
                <div class="sp-xs-2 sp-sm-2 sp-md-2 sp-lg-2 sp-xl-2"></div>
                <ul class="service-list text-center text-uppercase">
                    <?php foreach ($services as $key => $item) { ?>
                        <li class="service-item">
                            <a class="service-box d-block" href="<?php echo esc_url($item['url']); ?>">
                                <span class="service-square d-block">
                                    <svg class="svg-icon service-icon" width="80" height="80" fill="#fff">
                                        <use xlink:href="#<?php echo esc_attr($item['icon']); ?>"></use>
                                    </svg>
                                </span>
                                <span class="service-name d-block"><?php echo esc_html($item['name']); ?></span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
                <div class="sp-xs-2 sp-sm-2 sp-md-2 sp-lg-2 sp-xl-2"></div>
                <div class="text-center">
                    <button class="btn btn-primary btn-special btn-shadow <?php the_lang_class('js-make-order'); ?>"
                            type="button">
                        <?php pll_e(get_theme_mod('bw_section_hero_btn_label', 'Сделать заказ')); ?>
                    </button>
                </div>
            </div>
        </div>
        <button class="scroll-down js-scroll-down" type="button" data-target="section-two">
            <svg class="svg-icon" width="23" height="17" stroke="#fff">
                <use xlink:href="#triangle"></use>
            </svg>
        </button>
    </section>

    <?php
    $args = array(
        'post_type' => 'portfolio',
        'posts_per_page' => -1,
    );

    $query = new WP_Query($args);
    if ($query->have_posts()) { ?>
        <div class="section-box" id="section-two">
            <div class="portfolio">
                <h2 class="page-subname">
                    <?php pll_e(get_theme_mod('bw_section_portfolio_title', 'Наши работы')); ?>
                </h2>
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
                <?php } ?>
                <div class="portfolio-list">
                    <div class="js-slider">
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
                            <div>
                                <div id="post-<?php the_ID(); ?>" <?php post_class('portfolio-item'); ?>>
                                    <div class="portfolio-preview">
                                        <a class="portfolio-thumbnail" href="<?php echo esc_url($link_url); ?>"
                                           target="_blank"
                                           style="background-image: url('<?php echo esc_url($bg_url); ?>');"></a>
                                    </div>
                                    <div class="portfolio-body">
                                        <time class="portfolio-datetime"
                                              datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('d.m.y'); ?></time>
                                        <?php if (count($cat_names)) { ?>
                                            <div class="portfolio-category"><?php echo join(', ', $cat_names); ?></div>
                                        <?php } ?>
                                        <div class="portfolio-name text-uppercase">
                                            <a href="<?php echo esc_url($link_url); ?>"
                                               target="_blank"><?php the_title(); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <button type="button" class="slick-arrow slick-prev js-slick-prev">&lt; <?php _e('Previous',
                            'brainworks'); ?></button>
                    <button type="button" class="slick-arrow slick-next js-slick-next"><?php _e('Next',
                            'brainworks'); ?> &gt;
                    </button>
                </div>
                <div class="text-center">
                    <a class="btn btn-primary btn-special btn-shadow js-order-site"
                       href="<?php echo esc_url(get_post_type_archive_link('portfolio')); ?>">
                        <?php pll_e(get_theme_mod('bw_section_portfolio_btn_label', 'Заказать сайт')); ?>
                    </a>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="section-box">
        <div class="contact">
            <div class="container">
                <h2 class="page-subname"><?php pll_e(get_theme_mod('bw_section_contact_title', 'Контакты')); ?></h2>
                <div class="service">
                    <?php $contacts = array(
                        array(
                            'title' => pll__(get_theme_mod('bw_section_contact_item1_title')),
                            'tel' => pll__(get_theme_mod('bw_section_contact_item1_phone')),
                            'email' => pll__(get_theme_mod('bw_section_contact_item1_email')),
                        ),
                        array(
                            'title' => pll__(get_theme_mod('bw_section_contact_item2_title')),
                            'tel' => pll__(get_theme_mod('bw_section_contact_item2_phone')),
                            'email' => pll__(get_theme_mod('bw_section_contact_item2_email')),
                        ),
                        array(
                            'title' => pll__(get_theme_mod('bw_section_contact_item3_title')),
                            'tel' => pll__(get_theme_mod('bw_section_contact_item3_phone')),
                            'email' => pll__(get_theme_mod('bw_section_contact_item3_email')),
                        ),
                    ); ?>
                    <ul class="service-list service-list-sm text-center">
                        <?php foreach ($contacts as $item) { ?>
                            <li class="service-item">
                                <div class="service-box d-block">
                                    <?php /*
                                    <span class="service-square-sm d-block">
                                        <svg class="svg-icon service-icon" width="54" height="54" fill="#fff">
                                            <use xlink:href="#<?php echo esc_attr($item['icon']); ?>"></use>
                                        </svg>
                                    </span>
                                    */ ?>
                                    <span class="service-name text-uppercase d-block"><?php echo esc_html($item['title']); ?></span>
                                </div>
                                <a class="service-tel d-block"
                                   href="tel:<?php the_phone_number($item['tel']); ?>"><?php echo esc_html($item['tel']); ?></a>
                                <a class="service-email d-block"
                                   href="mailto:<?php echo esc_attr($item['email']); ?>"><?php echo esc_html($item['email']); ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <?php if ($shortcode = pll__(get_theme_mod('bw_section_contact_shortcode'))) { ?>
                    <div class="form form-box">
                        <?php echo do_shortcode($shortcode); ?>
                    </div>
                <?php } else { ?>
                    <form method="post" class="form form-box" id="contact-form"
                          enctype="application/x-www-form-urlencoded" accept-charset="UTF-8">
                        <div class="form-row form-columns">
                            <div class="form-column">
                                <input class="form-field" type="text" name="name" placeholder="Ваше имя" required
                                       minlength="3">
                            </div>
                            <div class="form-column">
                                <input class="form-field" type="tel" name="tel" placeholder="Телефон" required
                                       minlength="8" maxlength="15" pattern="^[+0-9]{8,15}$">
                            </div>
                            <div class="form-column">
                                <input class="form-field" type="email" name="email" placeholder="E-mail" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <textarea class="form-field" name="message" placeholder="Ваше сообщение"
                                      minlength="5"></textarea>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary btn-special" type="submit">Отправить</button>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>

<?php get_footer(); ?>
