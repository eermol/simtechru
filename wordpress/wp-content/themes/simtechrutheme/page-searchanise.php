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
                           <a href="<?php echo get_home_url(); ?>/merchium">
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
                           <a class="selected" href="<?php echo get_home_url(); ?>/searchanise">
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
                 <div class="col-md-4"></div>
                  <div class="col-md-8">
                   <a href="http://searchanise.com"  target="_blank">
                       <img src="<?php echo $templateLink; ?>/images/logo-searchnice.png" alt="">
                   </a>
                   <h1 class="title">Облачный поиск</h1>
                     Searchanise — облачный сервис интеллектуального полнотекстового поиска. Позволяет организовать в интернет-магазине быстрый персонализированный поиск товаров.
                  </div>
                  <div class="links">
                      <a href="http://searchanise.com"  target="_blank" class="a-red">searchanise.com <i class="icon-link"></i></a>
                  </div>
                  <div class="col-md-16">
                      <img src="<?php echo $templateLink; ?>/products/searchanice/mac.png" alt="">
                  </div>
                  <div class="col-md-4 col-sm-3 col-xs-1"></div>
                  <div class="col-md-8 col-sm-10 col-xs-14 text">
                     <p>
                     Хороший поиск для интернет-магазина — это быстрый и релевантный поиск. Чем скорее посетитель найдет то, что искал, тем выше вероятность, что он это купит.  Поиск в интернет-магазине выводит название продукта, его изображение, стоимость, акции, скидки. Он всегда актуален: если товар в магазине закончился минуту назад, его не должно быть в выдаче. Зная эти и другие нюансы, мы создали поисковый сервис, который работает с любым магазином.
                      </p>
                      <p>
Searchanise — последняя разработка группы компаний «Симтек». Мы рассчитываем, что  через несколько лет наш поисковый сервис станет таким же популярным в электронной коммерции, как Wordpress в блогосфере.
</p><p>
О Searchanise есть <a href="http://habrahabr.ru/company/searchanise/blog/203234/"  target="_blank" class="a-red">отличная статья на Хабре<i class="icon-link"></i></a>
                     </p>
                  </div>
                  <div class="col-md-16 product-features">
                      <div class="col-md-16 col-sm-16">
                         <div class="col-md-2 col-sm-2"></div>
                          <div class="col-md-4 col-sm-4 feature">
                              <i class="icon-three-people"></i>
                              <h1>1500</h1>
                              пользователей
                          </div>
                          <div class="col-md-4  col-sm-4 feature">
                              <img src="<?php echo $templateLink; ?>/products/searchanice/sphinx.png" alt="">
                              <h1>Sphinx</h1>
                              Построен на базе
поисковой системы Sphinx
                          </div>

                          <div class="col-md-4 col-sm-4 feature">
                              <i class="icon-lan"></i>
                              <h1>3</h1>
                              Доступен для трех платформ:
Magento, CS-Cart и Merchium
                          </div>

                      </div>
                  </div>
                  <div class="col-md-16 margin-bot">
                      <h1>Возможности</h1>
                      <div class="col-md-16 content margin-bot image-left">

                           <img src="<?php echo $templateLink; ?>/products/searchanice/show-results.png" alt="">
                           <div class="text">
<h4>Мгновенная выдача результатов</h4>

Результаты поиска отображаются с первых введенных символов.
                           </div>
                      </div>
                      <div class="col-md-16 content margin-bot image-right">

                           <img src="<?php echo $templateLink; ?>/products/searchanice/view-results.png" alt="">
                            <div class="text">
<h4>Иллюстрированная выдача</h4>

Вместе с названием артикула поиск выдает его изображение и информацию о стоимости, наличии, скидках и акциях.
                           </div>
                      </div>
                      <div class="col-md-16 content margin-bot image-left">

                           <img src="<?php echo $templateLink; ?>/products/searchanice/smart-result.png" alt="">
                            <div class="text">
<h4>Умные поисковые подсказки</h4>

Система использует персонализированный опыт покупателя и при наборе запроса предлагает подходящие товары.
                           </div>
                      </div>
                      <div class="col-md-16 content  image-right">

                           <img src="<?php echo $templateLink; ?>/products/searchanice/vidgets.png" alt="">
                            <div class="text">
<h4>Индивидуально настраиваемый виджет</h4>

Дизайн поискового виджета легко настраивается под внешний вид интернет-магазина из панели администратора.

Все о Searchanise вы узнаете на  <a href="http://searchanise.com" class="a-red">официальном сайте продукта<i class="icon-link"></i></a>
                           </div>
                      </div>
                  </div>
                  <div class="col-md-16">
                      <a href="<?php echo get_home_url(); ?>/simtechdevelopment" class="whitebutton a-dark t-h-none">
                           Что дальше? &nbsp;&nbsp;<span class="a-red">Simtech Development<i class="icon-right-arrow"></i></span>
                       </a>
                   </div>
               </div>





           </div>
   </div>
<?php get_footer(); ?>
