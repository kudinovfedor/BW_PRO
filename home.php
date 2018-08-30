<?php get_header(); ?>

<?php $services = array(
    'design' => array(
        'icon' => 'design',
        'name' => 'Дизайн',
        'tel' => '+38 (063) 20 37 137',
        'email' => 'design@brainworks.com.ua',
    ),
    'advertising' => array(
        'icon' => 'advertising',
        'name' => 'Реклама',
        'tel' => '+38 (098) 17 18 750',
        'email' => 'project@brainworks.com.ua',
    ),
    'help' => array(
        'icon' => 'help',
        'name' => 'Поддержка',
        'tel' => '+38 (050) 845 02 37',
        'email' => 'content@brainworks.com.ua',
    ),
); ?>

<section class="section-box">
    <div class="container">
        <h1 class="page-name">Разработка сайтов</h1>
        <div class="service">
            <ul class="service-list text-center text-uppercase">
                <?php foreach ($services as $key => $item) { ?>
                    <li class="service-item">
                        <a class="service-box d-block" href="#">
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
        </div>
        <div class="text-center">
            <a class="btn btn-primary btn-special btn-shadow" href="#">Сделать заказ</a>
        </div>
    </div>
    <button class="scroll-down js-scroll-down" type="button" data-target="section-two">
        <svg class="svg-icon" width="23" height="17" stroke="#fff">
            <use xlink:href="#triangle"></use>
        </svg>
    </button>
</section>

<div class="section-box" id="section-two">
    <h2 class="page-subname">Наши работы</h2>
    <div class="portfolio">
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
                    $bg = get_template_directory_uri() . '/assets/img/portfolio-item-1.jpg'?>
                    <div>
                        <div class="portfolio-item">
                            <div class="portfolio-preview">
                                <div class="portfolio-thumbnail" style="background-image: url('<?php echo esc_url($bg); ?>');"></div>
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
            <button type="button" class="slick-arrow slick-next js-slick-next">Следующая  ></button>
        </div>
    </div>
    <div class="text-center">
        <a class="btn btn-primary btn-special btn-shadow" href="#">Заказать сайт</a>
    </div>
</div>

<div class="section-box">
    <div class="container">
        <h2 class="page-subname">Контакты</h2>
        <div class="service">
            <ul class="service-list service-list-sm text-center">
                <?php foreach ($services as $key => $item) { ?>
                    <li class="service-item">
                        <a class="service-box d-block" href="#">
                    <span class="service-square-sm d-block">
                        <svg class="svg-icon service-icon" width="54" height="54" fill="#fff">
                            <use xlink:href="#<?php echo esc_attr($item['icon']); ?>"></use>
                        </svg>
                    </span>
                            <span class="service-name text-uppercase d-block"><?php echo esc_html($item['name']); ?></span>
                        </a>
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

<?php get_footer(); ?>
