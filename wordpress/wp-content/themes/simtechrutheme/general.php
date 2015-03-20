
<?php
/*
Template Name: General
*/
get_header(); ?>
   <div class="body">
          <div class="container-fluid">
               <div class="row">
                  <div class="col-md-16 products">
                    <div class="col-md-16">
                   <h1>Программные продукты, известные на весь мир</h1>
                   <div class="col-md-3"></div>
                   <div class="col-md-10"></div>
                  &nbsp;<img src="<?php echo get_template_directory_uri(); ?>/images/devices.jpg" alt="" >
                   </div>
                   <div class="col-md-8 ">
                       <a href="cs-cart.html" class="col-md-8 col-sm-8 col-xs-16 product a-dark">
                          <span class="logo">
                             <img src="<?php echo get_template_directory_uri(); ?>/images/logo-cscart.png" alt="">
                          </span>
                           CS-Cart — платформа с открытым кодом для создания интернет- магазинов. Более 35&nbsp;000 установок по всему миру.
                           <br>
                           <p class="link a-red">Подробнее<i class="icon-right-arrow"></i></p>
                       </a>
                       <a href="merchium.html" class="col-md-8 col-sm-8 col-xs-16  product a-dark">
                          <span class="logo">
                             <img src="<?php echo get_template_directory_uri(); ?>/images/logo-merchium.png" alt="">
                          </span>
                           Merchium — облачное решение
    для запуска интернет-магазинов. Совместный проект
    с Яндекс.Деньги.
                           <br>
                           <p class="link a-red">Подробнее<i class="icon-right-arrow"></i></p>
                       </a>
                   </div>
                   <div class="col-md-8">
                       <a href="searchanice.html" class="col-md-8 col-sm-8 col-xs-16  product a-dark t-h-none">
                          <span class="logo">
                             <img style="padding-top:15px;" src="<?php echo get_template_directory_uri(); ?>/images/logo-searchnice.png" alt="">
                          </span>
                           Searchanise — облачный сервис интеллектуального полнотекстового поиска
    внутри интернет-магазина.
                           <br>
                           <p class="link a-red">Подробнее<i class="icon-right-arrow"></i></p>
                       </a>
                       <a href="simtechdevelopment.html" class="col-md-8 col-sm-8 col-xs-16 product a-dark twigmo">
                          <span class="logo">
                             <img src="<?php echo get_template_directory_uri(); ?>/images/logo-twigmo.png" alt="">
                          </span>
                           Twigmo-мобильное приложение для управления интернет- магазинами для программных платформ Magento и CS-Cart.
                           <br>
                           <p class="a-red link ">Подробнее<i class="icon-right-arrow"></i></p>
                       </a>
                   </div>
                   </div>

               </div>
           </div>
   </div>
   <div class="body companyinfo">
       <div class="container-fluid">
           <div class="row">
              <div class="col-md-4 col-xs-2"></div> <!--      Блок для центрирования следующего блока       -->
               <div class="col-md-8 col-xs-12">
                   <h1>Группа компаний «Симтек»</h1>
                   Так вышло, что здесь собралась самая творческая команда профессионалов веб-разработки в Ульяновске. Наша история началась в 2005 году с запуском CS-Cart. Сегодня мы развиваем четыре собственных продукта, а также разрабатываем сложные высоконагруженные программные решения для клиентских интернет-проектов. <a href="#" class="a-white t-h-none t-yes">Подробнее<i class="icon-right-arrow"></i></a>
               </div>
           </div>
           <div class="row features">
               <a href="about.html" class="col-md-4 col-sm-8 col-xs-16 feature">
                 <i class="icon-calendar titleicon "></i>
                   <h1>9</h1>
                   лет на рынке
веб-разработки. <br>
<span class="a-white  t-h-none t-yes">История продолжается<i class="icon-right-arrow"></i></span>

               </a>
               <a href="geo.html" class="col-md-4 col-sm-8 col-xs-16 feature">
                <i class="icon-globe titleicon "></i>
                   <h1>170</h1>
                   стран мира,<br>
где живут и работают <br>
<span class="a-white t-h-none t-yes">наши клиенты<i class="icon-right-arrow"></i></span>

               </a>
               <a href="geo.html" class="col-md-4 col-sm-8 col-xs-16 feature">
                 <i class="icon-people titleicon "></i>
                   <h1>35&nbsp;000</h1>
                   пользователей<br>
наших продуктов и услуг, <br>
<span class="a-white t-h-none t-yes">а также наши партнеры<i class="icon-right-arrow"></i></span>

               </a>
               <a href="team.html" class="col-md-4 col-sm-8 col-xs-16 feature">
                 &nbsp;<i class="icon-person titleicon "></i>
                   <h1>80</h1>
                   высококлассных<br>
специалистов в нашем штате. <br>
<span class="a-white t-h-none t-yes">Давайте познакомимся<i class="icon-right-arrow"></i></span>

               </a>
           </div>
       </div>
   </div>
   <div class="body work">
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-16 ">
                   <h1>Работай в удовольствие, изобретай будущее</h1>
                   <div class="col-md-8 col-sm-16">
                       <div class="col-md-8 col-sm-8 work workwithus">
                           <div class="titleimage">
                               <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/work-job.jpg" alt=""></a>
                           </div>
                           <h2>Вакансии</h2>
                           <div class="job">
                               <ul>
                                   <?php query_posts('category_name=jobs'); ?>
                                    <?php while (have_posts()) : the_post(); ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>" class="a-red">

                                             <?php the_title(); ?><i class="icon-right-arrow"></i>
                                        </a>
                                   </li>
                                    <?php endwhile; wp_reset_query();?>

                               </ul>

                           </div>

                          &nbsp;<i class="icon-down-arrow a-red t-h-none" onclick="jobsDown()"></i>

                       </div>

                       <a href="#" class="col-md-8 col-sm-8 study a-dark t-h-none">
                           <div class="titleimage">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/work-study.jpg" alt="">
                           </div>
                           <h2>Стажировка</h2>
                           Еще студент? Нет опыта? Наша стажировка — это работа
    с реальными оплачиваемыми задачами под руководством сильнейших программистов и быстрое приобретение профессиональных навыков.<br>
    <span class="a-red workfun">Познакомьтесь с условиями<i class="icon-right-arrow"></i></span>
                       </a>
                   </div>
                   <div class="col-md-8 col-sm-16 ">
                       <a href="#" class=" a-dark col-md-8 col-sm-8 t-h-none">
                           <div class="titleimage">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/work-why.jpg" alt="">
                           </div>
                           <h2>Почему «Симтек»</h2>
                          У нас нет ни одного человека,
    кто не любил бы свою работу.
    Мы каждый день работаем с отличными продуктами и делаем жизнь людей немного проще.
    А еще мы знаем секрет работоспособности сотрудников.<br>
    <span class="a-red workfun">Узнайте какой<i class="icon-right-arrow"></i></span>
                       </a>

                       <div class="col-md-8 col-sm-8 follow workwithus">
                           <div class="titleimage">
                               <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/work-follow.jpg" alt=""></a>
                           </div>
                           <h2>Присоединяйтесь к нам</h2>
                         Мы всегда рады новым лицам. Отправляйте резюме и
    не забудьте подписаться на новости и свежие вакансии
    в социальных сетях:<br>
                           <a href="#" class="a-red workfun col-md-16 col-sm-16 col-xs-5">Фейсбук&nbsp;<i class="icon-link"></i></a>
                           <a href="#" class="a-red col-md-16 col-sm-16 col-xs-6">Вконтакте&nbsp;<i class="icon-link"></i></a>
                           <a href="#" class="a-red col-md-16 col-sm-16 col-xs-5">Твиттер<i class="icon-link"></i></a>
                        </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
<?php get_footer(); ?>
