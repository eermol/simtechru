<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>simtech.ru</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700,300&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
    <!--[if IE 7]><link rel="stylesheet" href="styles/simtechicons-ie7.css"><![endif]-->
</head>

<body>

    <header <?php if (is_front_page()) {?> class="withslider"
        <?php } ?> >




        <div class="mobile-contacts <?php if (!is_front_page()) {?>light-contacts<?php } ?>">
            <div class="information">
                <a href="tel:(8422) 52-66-97" class="a-white">(8422) 52-66-97&nbsp;<i class="icon-right-arrow"></i>
                </a>
            </div>
            <div class="information">
                <a href="#" class="a-white"> Как к нам проехать?&nbsp;<i class="icon-right-arrow"></i>
                </a>
            </div>
        </div>
        <div class="container-fluid <?php if (is_front_page()) {?> dark-menu <?php } else { ?>light-menu <?php } ?>">
            <div class="row headerrow">
                <div class="col-md-16 col-lg-16 col-sm-16 col-xs-16">
                    <a href="<?php echo get_home_url(); ?>" class="logo">
                        <i class="icon-simtech"></i>
                    </a>
                    <div class="social mobilehide">
                        <a href="#" class="a-white"><i class="icon-fb"></i></a>
                        <a href="#" class="a-white"><i class="icon-vk"></i></a>
                        <a href="#" class="a-white"><i class="icon-tweet"></i></a>
                    </div>
                    <nav>
                        <li class="work"><a href="<?php echo get_home_url(); ?>/job" class="a-white t-h-none">Работа&nbsp;<i class="icon-down-dir"></i></a>

                            <!--           Выпадающее меню            -->

                            <div class="open-menu" id="work">
                                <ul class="openmenu-nav col-md-4 col-sm-4 ">
                                    <li id="ourfil"><a href="#">Наша философия&nbsp;<i class="icon-right-arrow"></i></a>
                                    </li>
                                    <li id="why"><a href="#">Почему «Симтек»<i class="icon-right-arrow"></i></a>
                                    </li>
                                    <li id="ourjob"><a href="<?php echo get_home_url(); ?>/job">Вакансии<i class="icon-right-arrow"></i></a>
                                    </li>
                                    <li id="stud"><a href="#">Стажировка<i class="icon-right-arrow"></i></a>
                                    </li>
                                </ul>
                                <div class="openmenu-text grid">
                                    <div class="ourfil">
                                        <div class="content first-nav-col col-1-3">
                                            <h1>Работай в удовольствие!</h1> Мы стремимся создавать лучшие продукты и предоставлять лучшие сервисы в мире. Стать лучшим может только по-настоящему увлеченный человек.
                                        </div>
                                        <div class="col-1-3">
                                            <img style="margin-top:60px;" src="<?php echo get_template_directory_uri(); ?>/megamenu/ourfil/1.jpg">
                                            <img src="<?php echo get_template_directory_uri(); ?>/megamenu/ourfil/2.jpg">
                                        </div>
                                        <div class="col-1-3">
                                            <img style="margin-top:60px;" src="<?php echo get_template_directory_uri(); ?>/megamenu/ourfil/3.jpg">
                                            <img src="<?php echo get_template_directory_uri(); ?>/megamenu/ourfil/4.jpg">
                                        </div>
                                        <div class="openmenu-description">
                                            <span>Несколько слов о нашем подходе к работе</span>
                                            <a href="#" class="redbutton">Наша философия&nbsp;<i class="icon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                    <div class=" why">
                                        <div class="content first-nav-col col-1-3">
                                            <h1>Почему «Симтек»?</h1> У нас нет ни одного человека, кто не любил бы свою работу. Мы каждый день работаем с отличными продуктами и делаем жизнь людей немного проще. А еще мы знаем секрет работоспособности сотрудников.
                                        </div>
                                        <div class="col-1-3 content">
                                            <h2>5 основных причин</h2>
                                            <ul>
                                                <li>1. Интересные проекты</li>
                                                <li>2. Профессиональный рост</li>
                                                <li>3. Достойная заработная плата</li>
                                                <li>4. Дружный, молодой, увлеченный коллектив</li>
                                                <li>5. Обучение за счет компании</li>
                                            </ul>
                                            <a href="#" class="a-red">Подробнее о преимуществах&nbsp;<i class="icon-right-arrow"></i></a>
                                        </div>
                                        <div class="col-1-3 content">
                                            <h2>«Плюшки»</h2>
                                            <ul>
                                                <li>— Спортзал</li>
                                                <li>— Столовая</li>
                                                <li>— Xbox с Kinect</li>
                                                <li>— Бесплатный чай/кофе</li>
                                                <li>— Оплачиваемое участие в семинарах</li>
                                                <li>— Крутые корпоративы</li>
                                            </ul>
                                        </div>
                                        <div class="openmenu-description">
                                            <span>Мы ищем талантливых специалистов независимо от пола и возраста.</span>
                                            <a href="#" class="redbutton">Наши преимущества&nbsp;<i class="icon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                    <div class="ourjob">
                                        <div class="content first-nav-col col-1-3">
                                            <h1>Работа в «Симтек»</h1> Мы ищем талантливых специалистов независимо от пола, возраста, политических взглядов и даже опыта работы. Одним из главных условий отбора является качественное выполнение тестового задания.
                                        </div>
                                        <div class="content col-1-3">
                                            <h2>Вакансии</h2>
                                            <ul class="jobs">
                                                <?php query_posts( 'category_name=jobs'); ?>
                                                <?php while (have_posts()) : the_post(); ?>
                                                <li>
                                                    <a href="<?php the_permalink(); ?>" class="a-red">
                                                        <?php the_title(); ?><i class="icon-right-arrow"></i>
                                                    </a>
                                                </li>
                                                <?php endwhile; wp_reset_query(); ?>
                                            </ul>
                                        </div>
                                        <div class="content col-1-3 links">
                                            <a href="#" class="link-block a-dark  t-h-none">
                                                <h3><i class="icon-photo"></i>Прислать резюме</h3> Отправьте свое
                                                <br> резюме, и мы с вами
                                                <br> свяжемся.
                                                <br>
                                                <span class="a-red t-none">Отправить резюме<i class="icon-right-arrow"></i></span>
                                            </a>
                                            <div class="link-block">
                                                <h3>Присоединяйтесь к нам</h3> Вы всегда будете
                                                <br> в курсе свежих вакансий
                                                <div class="social">
                                                    <a href="#" class="a-dark"><i class="icon-fb"></i></a>
                                                    <a href="#" class="a-dark"><i class="icon-vk"></i></a>
                                                    <a href="#" class="a-dark"><i class="icon-tweet"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="openmenu-description">
                                            <span>Хочешь стать частью команды «Симтек»?</span>
                                            <a href="<?php echo get_home_url(); ?>/job" class="redbutton">Все вакансии&nbsp;<i class="icon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                    <div class="stud">
                                        <div class="content first-nav-col  col-1-3">
                                            <h1>Ещё студент?</h1> Приглашаем студентов и выпускников на стажировку по веб-программированию и верстке. График и нагрузка стажировки определяются с каждым индивидуально с учетом учебного расписания.
                                        </div>
                                        <div class="content col-1-3">
                                            <h2>Требования</h2>
                                            <ul class="jobs">
                                                <li>— Интерес к веб-программированию</li>
                                                <li>— 3...5 курс университета или 3 курс колледжа</li>
                                                <li>— Знание основ PHP, MySQL, CSS, HTML</li>
                                                <li>— Знакомы с AJAX, JavaScript, Smarty, XML</li>
                                                <li>— Читаете на английском языке</li>

                                            </ul>
                                            <a href="#" class="a-red">Все условия<i class="icon-right-arrow"></i></a>
                                        </div>
                                        <div class="content col-1-3 links">
                                            <a href="#" class="link-block a-dark  t-h-none">
                                                <h3><i class="icon-photo"></i>&nbsp;Откликнуться</h3> Отправьте короткий
                                                <br> рассказ о себе
                                                <br>
                                                <span class="a-red t-none">Отправить запрос&nbsp;<i class="icon-right-arrow"></i></span>
                                            </a>
                                        </div>
                                        <div class="openmenu-description">
                                            <span>Мы всегда рады новым лицам. Приходите.</span>
                                            <a href="#" class="redbutton">Условия стажировки&nbsp;<i class="icon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="about"><a href="<?php echo get_home_url(); ?>/about" class="a-white t-h-none">О компании&nbsp;<i class="icon-down-dir"></i></a>
                            <div class="open-menu" id="about">
                                <ul class="openmenu-nav col-md-4 col-sm-4 ">
                                    <li id="aboutsimtech" class="selected"><a href="<?php echo get_home_url(); ?>/about">О «Симтек»<i class="icon-right-arrow"></i></a>
                                    </li>
                                    <li id="clientsgeo"><a href="<?php echo get_home_url(); ?>/geo">География и клиенты<i class="icon-right-arrow"></i></a>
                                    </li>
                                    <li id="ourteam"><a href="<?php echo get_home_url(); ?>/team">Команда<i class="icon-right-arrow"></i></a>
                                    </li>
                                </ul>
                                <div class="openmenu-text grid">
                                    <div class="selected aboutsimtech">
                                        <div class="content first-nav-col col-1-3">
                                            <h1>О группе
компаний</h1> Группа компаний «Симтек» разрабатывает программы и веб-сервисы для интернет- предпринимателей.
                                        </div>
                                        <div class="col-1-6">
                                            <img src="<?php echo get_template_directory_uri(); ?>/megamenu/aboutsimtech/1.jpg" alt="">
                                        </div>
                                        <div class="openmenu-description">
                                            <span>Узнайте больше о группе компаний «Симтек».</span>
                                            <a href="<?php echo get_home_url(); ?>/about" class="redbutton">О «Симтек»&nbsp;<i class="icon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                    <div class=" clientsgeo">
                                        <div class="content first-nav-col ">
                                            <h1>Почему «Симтек»?</h1>
                                            <img src="<?php echo get_template_directory_uri(); ?>/megamenu/map/1.jpg" alt="">
                                        </div>

                                        <div class="openmenu-description">
                                            <span>Здесь наши клиенты, пользователи, партнеры.</span>
                                            <a href="<?php echo get_home_url(); ?>/geo" class="redbutton">География&nbsp;<i class="icon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                    <div class="ourteam">
                                        <div class="content first-nav-col  col-1-3">
                                            <h1>Более
80 специалистов</h1> Наш бизнес строится на ежедневном труде, опыте и знаниях этих людей.
                                        </div>
                                        <div class="content col-1-6">
                                            <img src="<?php echo get_template_directory_uri(); ?>/megamenu/team/1.jpg" alt="">
                                        </div>
                                        <div class="openmenu-description">
                                            <span>Давайте знакомиться!</span>
                                            <a href="<?php echo get_home_url(); ?>/team" class="redbutton">Команда&nbsp;<i class="icon-right-arrow"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </li>
                        <li class="products"><a href="<?php echo get_home_url(); ?>/cscart" class="a-white t-h-none">Продукты&nbsp;<i class="icon-down-dir"></i></a>
                            <div class="open-menu" id="products">
                                <ul class="openmenu-nav col-md-4 col-sm-4 ">
                                    <li id="cscart" class="selected"><a href="<?php echo get_home_url(); ?>/cscart">CS-Cart<i class="icon-right-arrow"></i></a>
                                    </li>
                                    <li id="merchium"><a href="<?php echo get_home_url(); ?>/merchium">Merchium<i class="icon-right-arrow"></i></a>
                                    </li>
                                    <li id="twigmo"><a href="<?php echo get_home_url(); ?>/twigmo">Twigmo<i class="icon-right-arrow"></i></a>
                                    </li>
                                    <li id="searchanice"><a href="<?php echo get_home_url(); ?>/searchanice">Searchanise<i class="icon-right-arrow"></i></a>
                                    </li>
                                    <li id="simtechdevelopment"><a href="<?php echo get_home_url(); ?>/simtechdevelopment">Simtech Development<i class="icon-right-arrow"></i></a>
                                    </li>
                                </ul>
                                <div class="openmenu-text grid">
                                    <div class="selected cscart">
                                        <div class="content first-nav-col  col-1-3">
                                            <a href="<?php echo get_home_url(); ?>/cs-cart" class="prod-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-cscart.png" alt=""></a> CS-Cart — масштабируемая программная платформа с открытым кодом для создания интернет-магазинов и торговых площадок в сети.
                                        </div>
                                        <div class="col-1-6">
                                            <img src="<?php echo get_template_directory_uri(); ?>/megamenu/products/1.jpg" alt="">
                                        </div>
                                        <div class="openmenu-description">
                                            <span>Узнайте больше о CS-Cart</span>
                                            <a href="<?php echo get_home_url(); ?>/cs-cart" class="redbutton">CS-Cart&nbsp;<i class="icon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                    <div class="selected first-nav-col  merchium">
                                        <div class="content first-nav-col  col-1-3">
                                            <a href="<?php echo get_home_url(); ?>/merchium" class="prod-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-merchium.png" alt=""></a> Merchium — бесплатный облачный сервис для создания интернет-магазина позволяет развернуть витрину на любом веб-сайте или в соцсети за 10 секунд.
                                        </div>
                                        <div class="col-1-6">
                                            <img src="<?php echo get_template_directory_uri(); ?>/megamenu/products/2.jpg" alt="">
                                        </div>
                                        <div class="openmenu-description">
                                            <span>Узнайте больше о Merchium</span>
                                            <a href="<?php echo get_home_url(); ?>/merchium" class="redbutton">Merchium&nbsp;<i class="icon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                    <div class="selected twigmo">
                                        <div class="content first-nav-col  col-1-3">
                                            <a href="<?php echo get_home_url(); ?>/twigmo" class="prod-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-twigmo.png" alt=""></a> CS-Cart — масштабируемая программная платформа с открытым кодом для создания интернет-магазинов и торговых площадок в сети.
                                        </div>
                                        <div class="col-1-6">
                                            <img src="<?php echo get_template_directory_uri(); ?>/megamenu/products/3.jpg" alt="">
                                        </div>
                                        <div class="openmenu-description">
                                            <span>Узнайте больше Twigmo</span>
                                            <a href="<?php echo get_home_url(); ?>/twigmo" class="redbutton">Twigmo&nbsp;<i class="icon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                    <div class="selected searchanice">
                                        <div class="content first-nav-col  col-1-3">
                                            <a href="<?php echo get_home_url(); ?>/searchanise" class="prod-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-searchnice.png" alt=""></a> Searchanise — облачный сервис интеллектуального полнотекстового поиска. Позволяет организовать в интернет-магазине быстрый персонализированный поиск товаров.
                                        </div>
                                        <div class="col-1-6">
                                            <img src="<?php echo get_template_directory_uri(); ?>/megamenu/products/4.jpg" alt="">
                                        </div>
                                        <div class="openmenu-description">
                                            <span>Узнайте больше Searchanice</span>
                                            <a href="<?php echo get_home_url(); ?>/searchanise" class="redbutton">Searchanice&nbsp;<i class="icon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                    <div class="selected simtechdevelopment">
                                        <div class="content first-nav-col  col-1-3">
                                            <a href="<?php echo get_home_url(); ?>/simtechdevelopment" class="prod-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-simtechdev.png" alt=""></a> Команда Simtech Development разрабатывает сложные и высоконагруженные программные решения для электронной коммерции.
                                        </div>
                                        <div class="col-1-6">
                                            <img src="<?php echo get_template_directory_uri(); ?>/megamenu/products/5.jpg" alt="">
                                        </div>
                                        <div class="openmenu-description">
                                            <span>Узнайте больше Simtech Development</span>
                                            <a href="<?php echo get_home_url(); ?>/simtechdevelopment" class="redbutton">Simtech Development&nbsp;<i class="icon-right-arrow"></i></a>
                                        </div>
                                    </div>


                                </div>
                            </div>


                        </li>
                    </nav>
                    <!--          Конец выпадающего меню        -->
                </div>

            </div>
            <?php if (is_front_page()) { ?>
            <div class="row">
                <div class="slider col-md-12 col-lg-10 col-sm-16">
                    <div class="content">
                        <h1>
                                    Современные решения <br>для электронной коммерции
                                </h1>
                        <p class="mobilehide">
                            Мы создаем высокотехнологичные продукты для всего мира, превращая
                            <br> сложные проекты в удобные решения.
                        </p>
                    </div>

                    <a href="about.html" class="redbutton ">О «Симтек»</a>
                    <div class="littledesc">
                        <a href="<?php echo get_home_url(); ?>/about" class="a-red">Карьера в IT–компании<i class="icon-right-arrow"></i><br>
                               <span class="mobilehide a-white t-h-none">Для профи и новичков</span></a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

    </header>
