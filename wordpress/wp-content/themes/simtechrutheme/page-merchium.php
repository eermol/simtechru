<?php
    get_header();
    $templateLink = get_template_directory_uri();
?>
   <div class="body">
           <div class="product-tabs-out">
               <div class="product-tabs">
                   <ul>
                       <li>
                           <a href="<?php echo get_home_url(); ?>/cscart">
                           <i class="icon-cscart"></i>
                           CS-Cart
                           </a>
                       </li>
                       <li>
                           <a class="selected"  href="<?php echo get_home_url(); ?>/merchium">
                           <i class="icon-merchium"></i>
                           Merchium
                           </a>
                       </li>
                       <li>
                           <a href="<?php echo get_home_url(); ?>/twigmo">
                           <i class="icon-twigmo"></i>
                           Twigmo
                           </a>
                       </li>
                       <li>
                           <a href="<?php echo get_home_url(); ?>/searchanise">
                           <i class="icon-searchinice"></i>
                           Searchanise
                           </a>
                       </li>
                       <li>
                           <a href="<?php echo get_home_url(); ?>/simtechdevelopment">
                           <i class="icon-simtechdev"></i>
                           Simtech Development
                           </a>
                       </li>
                   </ul>
               </div>
           </div>
           <div class="container-fluid about-product">
               <div class="row">
                 <div class="col-md-2"></div>
                  <div class="col-md-12">
                   <a href="http://merchium.ru" target="_blank">
                       <img src="<?php echo $templateLink; ?>/images/logo-merchium.png" alt="">
                   </a>
                   <h1 class="title">Мгновенный интернет-магазин там,<br>
где он нужен</h1>
                     Merchium — бесплатный облачный сервис для создания интернет-магазина, позволяет развернуть витрину на любом веб-сайте или в соцсети за 10 секунд.
                  </div>
                  <div class="links">
                      <a href="http://merchium.ru" target="_blank" class="a-red">merchium.ru <i class="icon-link"></i></a>|
                      <a href="http://merchium.com" target="_blank" class="a-red">merchium.com <i class="icon-link"></i></a>
                  </div>
                  <div class="col-md-16">
                  <img src="<?php echo $templateLink; ?>/products/merchium/mac.png" alt="">
                  </div>
                  <div class="col-md-4 col-sm-3 col-xs-1"></div>
                  <div class="col-md-8 col-sm-10 col-xs-14 text">
                     <p>
                     В России Merchium был запущен в августе 2014 года. Компания «Яндекс.Деньги» заинтересовалась сервисом еще на этапе разработки и предложила сотрудничество. Благодаря тесному партнерству с «Яндекс.Деньги»  пользователи Merchium могут свободно работать с сервисами Яндекса. Яндекс.Деньги, в свою очередь, официально рекомендует наш сервис для создания интернет-магазинов.
                      </p><p>
Международная версия Merchium вышла в ноябре 2014 года.
                     </p>
                  </div>
                  <div class="col-md-16 product-features">
                      <div class="col-md-16 col-sm-16">
                         <div class="col-md-2 col-sm-2"></div>
                          <div class="col-md-4 col-sm-4 feature">
                              <i class="icon-shop"></i>
                              <h1>7000</h1>
                              интернет-магазинов
                          </div>
                          <div class="col-md-4  col-sm-4 feature">
                              <i class="icon-calendar"></i>
                              <h1>2014</h1>
                              год запуска
                          </div>

                          <div class="col-md-4 col-sm-4 feature">
                              <i class="icon-zero"></i>
                              <h1>0</h1>
                              рублей стоимость
сервиса
                          </div>

                      </div>
                  </div>
                  <div class="col-md-16">
                      <h1>Возможности</h1>
                      <div class="col-md-16 content margin-bot image-left">

                           <img src="<?php echo $templateLink; ?>/products/merchium/multiplatform.png" alt="">
                            <div class="text">
<h4>Интернет-магазин на нескольких платформах</h4>

Магазин на Merchium легко встроить в страницу в соцсети, блог и существующий сайт.
                           </div>
                      </div>
                      <div class="col-md-16 content margin-bot image-right">

                           <img src="<?php echo $templateLink; ?>/products/merchium/fast-start.png" alt="">
                            <div class="text">
<h4>Быстрый старт</h4>

Чтобы запустить интернет-магазин на Merchium, достаточно загрузить свои товары в каталог и подключить прием платежей.
                           </div>
                      </div>
                      <div class="col-md-16 content margin-bot image-left">

                           <img src="<?php echo $templateLink; ?>/products/merchium/mobile-touch.png" alt="">
                            <div class="text">
<h4>Мобильная touch-витрина</h4>

Для сенсорных экранов Merchium использует специальную витрину, которая делает шоппинг на мобильных устройствах удобнее.
                           </div>
                      </div>
                      <div class="col-md-16 content margin-bot  image-right">

                           <img src="<?php echo $templateLink; ?>/products/merchium/app-shop.png" alt="">
                            <div class="text">
<h4>Магазин дополнений</h4>

Сделайте свой магазин уникальнее благодаря приложениям и темам от разработчиков со всего мира.

Все о Merchium вы узнаете на <a href="http://merchium.ru" target="_blank" class="a-red">официальном сайте продукта<i class="icon-link"></i></a>
                           </div>
                      </div>
                  </div>
                  <div class="row"></div>
                  <div class="col-md-16">
                      <a href="<?php echo get_home_url(); ?>/twigmo" class="whitebutton a-dark t-h-none">
                           Что дальше? &nbsp;&nbsp;<span class="a-red">Twigmo<i class="icon-right-arrow"></i></span>
                       </a>
                   </div>
               </div>





           </div>
   </div>
<?php get_footer(); ?>
