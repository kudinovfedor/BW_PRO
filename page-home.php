<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>

<?php

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
    <section class="section-box">
        <div class="container">
            <div class="service text-center">
                <h1 class="page-name"><?php pll_e(get_theme_mod('bw_section_hero_title', 'Разработка сайтов')); ?></h1>
                <h2><?php pll_e(get_theme_mod('bw_section_hero_subtitle',
                        'Профессиональное решение для Вашего бизнеса')); ?></h2>
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
                <div class="text-center">
                    <button class="btn btn-primary btn-special btn-shadow js-make-order" type="button">
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

    <div class="section-box" id="section-two">
        <div class="portfolio">
            <h2 class="page-subname"><?php pll_e(get_theme_mod('bw_section_portfolio_title', 'Наши работы')); ?></h2>
            <div class="container filter">
                <ul class="filter-list text-center text-uppercase">
                    <li class="filter-item">Лендинг</li>
                    <li class="filter-item">Интернет-Магазин</li>
                    <li class="filter-item">Сайт-Визитка</li>
                </ul>
            </div>
            <div class="portfolio-list ">
                <div class="js-slider">
                    <?php for ($i = 0; $i < 10; $i++) {
                        $bg = get_template_directory_uri() . '/assets/img/portfolio-item-1.jpg' ?>
                        <div>
                            <div class="portfolio-item">
                                <div class="portfolio-preview">
                                    <div class="portfolio-thumbnail"
                                         style="background-image: url('<?php echo esc_url($bg); ?>');"></div>
                                </div>
                                <div class="portfolio-body">
                                    <time class="portfolio-datetime" datetime="">20.01.18</time>
                                    <div class="portfolio-category">Лендинг <?= $i; ?></div>
                                    <div class="portfolio-name text-uppercase">Comfort Trans</div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <button type="button" class="slick-arrow slick-prev js-slick-prev">< Предыдущая</button>
                <button type="button" class="slick-arrow slick-next js-slick-next">Следующая ></button>
            </div>
            <div class="text-center">
                <button class="btn btn-primary btn-special btn-shadow js-order-site" type="button">
                    <?php pll_e(get_theme_mod('bw_section_portfolio_btn_label', 'Заказать сайт')); ?>
                </button>
            </div>
        </div>
    </div>

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
                <form action="./" method="post" class="form form-box">
                    <div class="form-row form-columns">
                        <div class="form-column">
                            <input class="form-field" type="text" name="name" placeholder="Ваше имя" required>
                        </div>
                        <div class="form-column">
                            <input class="form-field" type="tel" name="tel" placeholder="Телефон" required>
                        </div>
                        <div class="form-column">
                            <input class="form-field" type="email" name="email" placeholder="E-mail" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <textarea class="form-field" name="message" placeholder="Ваше сообщение"></textarea>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-primary btn-special" href="#">Отправить</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

<?php get_footer(); ?>
