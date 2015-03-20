
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
            <div class="row">
               <div class="col-md-4 col-sm-3 col-xs-1"></div>
               <div class="col-md-8 col-sm-10 col-xs-14">
                    <h1>Я хочу у вас работать</h1>
                    <div class="content">
                        Добро пожаловать! Нам нужны профессионалы, которые любят свою работу, обладают независимым мышлением и не останавливаются на достигнутом.
                    </div>
               </div>
               <ul class="col-md-16 vacancy">
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
                    <?php endwhile; ?>



               </ul>
            </div>
        </div>
    </div>
    <div class="body gray">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-2"></div>
                <div class="col-md-10 col-sm-12 col-xs-16">
                    <h1>Не нашли подходящую вакансию?</h1>
                    <div class="col-md-2 col-sm-1"></div>
                    <div class="col-md-12 col-sm-16 col-xs-16">
                        Возможно, вы станете отправной точкой  нового проекта компании. Напишите нам короткий рассказ о себе на почту <a href="#" class="a-red">job@simtech.ru</a> или заполните форму ниже.
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
               <h1>Вы студент?</h1>
                <div class="col-md-16 margin-bot image-left">
                    <h4>Наша компания приглашает студентов и выпускников вузов на стажировку по веб-программированию</h4>
                    <div class="teamlead">
                        <img src="<?php echo get_template_directory_uri(); ?>/work/areyoustudent.png" alt="">
                    </div>
                    <div class="text">
                    График и нагрузка стажировки определяются с каждым индивидуально с учетом учебного расписания. Во время стажировки вы будете работать сначала над учебными, а после — над коммерческими проектами. Вы будете обучаться и совершенствовать свои навыки под наставничеством наших ведущих специалистов. Если вы проявите себя, то, вполне возможно, что после завершения стажировки мы пригласим вас на постоянную работу.
                    <br><br>
                    <a href="#" class="a-red">Узнать больше про стажировку <i class="icon-right-arrow"></i></a>
                    </div>



                </div>
            <div class="col-md-16 whatnext">
                   <a href="team.html" class="whitebutton a-dark t-h-none">
                       Что дальше? &nbsp;&nbsp;<span class="a-red">Стажировка <i class="icon-right-arrow"></i></span>
                   </a>
            </div>
            </div>

        </div>
    </div>
<?php get_footer(); ?>
