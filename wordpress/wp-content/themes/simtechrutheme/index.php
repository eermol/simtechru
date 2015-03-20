<?php get_header(); ?>

 <div class="body tabs job-tabs">
          <div class="container-fluid ">
              <div class="row ">
                 <div class="col-md-4 col-sm-16 col-xs-16"></div>
                  <div class=" col-md-8 col-sm-16 col-xs-16">
                     <div class="col-md-8 col-sm-8 col-xs-16">
                          <a href="about.html" class="col-md-10 col-sm-8 col-xs-8 ">
                              <i class="icon-cup2"></i><br>
                              Наша философия
                          </a>
                          <a href="geo.html" class="col-md-6 col-sm-8 col-xs-8">
                              <i class="icon-check"></i><br>
                              Почему Симтек
                          </a>
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-16">
                          <a href="team.html" class="col-md-9 col-sm-8 col-xs-8 selected">
                              <i class="icon-search-work"></i><br>
                              Вакансии
                          </a>
                          <a href="team.html" class="col-md-7 col-sm-8 col-xs-8">
                              <i class="icon-study2"></i><br>
                              Стажировка
                          </a>
                      </div>
                  </div>
              </div>
          </div>
    </div>
    <div class="body">

        <div class="container-fluid">
            <div class="row" style="padding-bottom:20px;">

               <div class="col-md-16 col-sm-16 col-xs-16 about-job">
                    <h1><?php the_title(); ?></h1>
                    <div class="views"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' назад'; ?>, <?php
                    $views = echo_post_views(get_the_ID());
                    echo $views.' просмотр'.NumberEnd($views, array('','а','ов'));

                    ?> </div>
                    <div class="col-md-16 image-left">
                       <div class="teamlead">
                          <?php $image = get_field('img_on_page'); ?>
                           <img src="<?php echo $image['url']; ?>" alt="">
                       </div>

                       <div class="text col-md-8 col-sm-8 col-md-16">
                       <?php the_content(); ?>
                        <div class="salary">
                            <?php echo the_field('salary'); ?> руб.

                            <div class="sub">
                                Итоговая сумма после налогового вычета 13%
                            </div>
                        </div>
                        <div class="job-links">
                        <a href="#areyouready" class="redbutton areuready">
                            Откликнуться на вакансию <i class="icon-right-arrow"></i>
                        </a>
                        <div class="send-to-friend a-red t-h-none">
                                Рекомендовать другу<i class="icon-right-arrow"></i>
                        </div>

                        </div>

                      </div>


                    </div>

               </div>
            </div>
        </div>

        <div class="opened-dialog">
            <div class="row">
               <span class="close"></span>
                <div class="col-md-4 col-sm-3 col-xs-1"></div>
                <div class="col-md-8 col-sm-10 col-xs-15">

                    <h1>Рекомендовать другу</h1>
                    Порекомендуйте вакансию «Веб-программист» другу, отправив ссылку на эту страницу.
                    <?php $siteurl =  current_page_url(); ?>
                    <span class="a-red t-h-none copy-in-bufer">
                        <span class="text-link">
                           <span class="animate fadeOutUp"><?php echo $siteurl[1]; ?></span>
                            <?php echo $siteurl[1]; ?></strong>
                           </span>
                           <input type="text" value="<?php echo $siteurl[0]; ?>" class="input-friend">
                           <span  class="redbutton">
                                Копировать
                           </span>
                    </span>

                    <div class="col-md-16">
                        Или поделитесь вакансией в социальных сетях.<br>
                        <a href="#" class="share">
                            <img src="<?php echo get_template_directory_uri(); ?>/work/job/share/vk.png" alt="">
                        </a>
                        <a href="#" class="share">
                            <img src="<?php echo get_template_directory_uri(); ?>/work/job/share/fb.png" alt="">
                        </a>
                        <a href="#" class="share">
                            <img src="<?php echo get_template_directory_uri(); ?>/work/job/share/tw.png" alt="">
                        </a>

                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row" style="padding-top:00px;">
               <div class="col-md-4 col-sm-3 col-xs-16"></div>
               <div class="col-md-8 col-sm-10 col-xs-16 margin-bot">
                   <h1>Вам предстоит</h1>
                   <?php echo the_field('you_will_do'); ?>
               </div>
               <div class="col-md-16 offer">
                  <h1>Мы&nbsp;предлагаем</h1>
                  <div class="col-md-16">У нас нет ни одного человека, кто не любил бы свою работу. Почему?</div>
                   <div class="col-md-4 col-sm-8 col-xs-16">
                       <div class="img">
                           <img src="<?php echo get_template_directory_uri(); ?>/work/job/we-offer-1.png" alt="">
                       </div>
                       <p>
                       Работа в сложных международных проектах. Творческая реализация для каждого.
                       </p>
                   </div>
                   <div class="col-md-4 col-sm-8 col-xs-16">
                       <div class="img">
                           <img src="<?php echo get_template_directory_uri(); ?>/work/job/we-offer-2.png" alt="">
                       </div>
                       <p>
                       Работа в сложных международных проектах. Творческая реализация для каждого.
                       </p>
                   </div>
                   <div class="col-md-4 col-sm-8 col-xs-16">
                       <div class="img">
                           <img src="<?php echo get_template_directory_uri(); ?>/work/job/we-offer-3.png" alt="">
                       </div>
                       <p>
                       Работа в сложных международных проектах. Творческая реализация для каждого.
                       </p>
                   </div>
                   <div class="col-md-4 col-sm-8 col-xs-16">
                       <div class="img">
                           <img style="margin-right:-20px;" src="<?php echo get_template_directory_uri(); ?>/work/job/we-offer-4.png" alt="">
                       </div>
                       <p>
                       Работа в сложных международных проектах. Творческая реализация для каждого.
                       </p>
                   </div>
               </div>
            </div>
        </div>
    </div>
    <div class="body gray">
        <div class="container-fluid">
            <div class="row"><span id="areyouready"></span>
                <div class="col-md-3 col-sm-2"></div>
                <div class="col-md-10 col-sm-12 col-xs-16">
                    <h1>Готовы работать у нас?</h1>
                    <div class="col-md-2 col-sm-1"></div>
                    <div class="col-md-12 col-sm-16 col-xs-16">
                       <span class="mobilehide" style="font-size:15px;">Напишите нам короткий рассказ о себе на почту <a href="#" class="a-red">job@simtech.ru</a>, позвоните по телефону (8422) 52-66-97 или заполните форму ниже.</span>
                       <span class="mobileshow">
                           Позвоните по телефону
                           <a href="tel:(8422) 52-66-97" class="whitebutton a-red phone-number"><i class="icon-phone"></i> (8422) 52-66-97</a>
                           Напишите нам короткий рассказ о себе на почту <a href="mailto: job@simtech.ru" class="a-red">job@simtech.ru</a> или заполните форму ниже.</span>



                       </span>
                        <form action="#" class="send-mail">
                            <input type="text" placeholder="Ваше Имя и Фамилия" pattern="[A-Za-zА-Яа-яЁё]" name="name" class="col-md-16 col-sm-16 col-xs-16">
                            <textarea name="message" placeholder="Напишите, почему нам стоит выбрать вас?" class="col-md-16  col-sm-16 col-xs-16" id="" cols="30" rows="10"></textarea>
                            <input type="text" placeholder="Ваш e-mail" class="mail">
                            <input type="text" placeholder="Ваш телефон" class="phone">

                            <span class="loadfile a-red t-h-none">
                                <input type="file">
                                <span><i class="icon-clip"></i> Загрузить резюме</span>

                            </span>
                            <span class="error"><i class="icon-info"></i> Извините, файл должен быть меньше 20 МБ</span>
                            <span class="selectedfile"></span><i class="icon-close deletefile"></i><br><br>
                            <div class="col-md-16 col-sm-16 col-xs-16" style="text-align:center;">
                                <input type="button" class="redbutton" value="Откликнуться на вакансию">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="container-fluid">
            <div class="row">
                <h1>Другие вакансии</h1>
                <ul class="slides vacancy margin-bot col-sm-16 col-xs-16  ">
                    <?php query_posts('category_name=jobs'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                           <div class="vacancy-img"></div>
                           <h2><?php the_title(); ?></h2>
                           <div class="price"><?php echo the_field('salary'); ?> руб.</div>
                           <div class="text">
                           <?php echo the_field('mini_description'); ?>
                           </div>
                           <span class="a-red">Подробнее<i class="icon-right-arrow"></i></span>
                        </a>
                   </li>
                    <?php endwhile;  wp_reset_query(); ?>
                </ul>
                <div class="col-md-16 col-sm-16 col-xs-16  margin-bot" style="text-align:center;">
                    <a href="#" class="a-red">
                        Все вакансии <i class="icon-right-arrow"></i>
                    </a>
                </div>
                <div class="col-md-16 col-sm-16 col-xs-16   whatnext">
                    <?php  $next_post = get_adjacent_post(false, '', false);
if(!empty($next_post)) {
$next_link = get_permalink($next_post->ID);
?>
                       <a href="<?php echo $next_link; ?>" class="whitebutton a-dark t-h-none">
                           Следующая вакансия. &nbsp;&nbsp;<span class="a-red"><?php echo $next_post->post_title; ?> <i class="icon-right-arrow"></i></span>
                       </a>
                    <?php   } ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        var checkIfFlashEnabled = function() {
       var isFlashEnabled = false;
       if (typeof(navigator.plugins)!="undefined"
           && typeof(navigator.plugins["Shockwave Flash"])=="object"
       ) {
          isFlashEnabled = true;
       } else if (typeof  window.ActiveXObject !=  "undefined") {
          try {
             if (new ActiveXObject("ShockwaveFlash.ShockwaveFlash")) {
                isFlashEnabled = true;
             }
          } catch(e) {};
       };
        return isFlashEnabled;
        }
    jQuery('.send-to-friend').click(function(){

                if (jQuery('.opened-dialog').hasClass('open-block')){
                    jQuery('.opened-dialog').removeClass('open-block');
                } else {
                    jQuery('.opened-dialog').addClass('open-block');
                }


        });

        if (checkIfFlashEnabled() == true ){
            jQuery('.copy-in-bufer').zclip({
                    path:'<?php echo get_template_directory_uri(); ?>/js/ZeroClipboard.swf',
                    copy:jQuery('.animate').text()
            });
        }

        jQuery('.opened-dialog .close').click(function(){
            jQuery('.opened-dialog').removeClass('open-block');
    });
    </script>
<?php get_footer(); ?>
