<?php
    get_header();
    $templateLink = get_template_directory_uri();
?>
   <div class="body tabs">
          <div class="container-fluid ">
              <div class="row ">
                 <div class="col-md-4 col-sm-5"></div>
                  <div class=" col-md-8 col-sm-8">
                      <a href="<?php echo get_home_url(); ?>/about" class="col-md-5 col-xs-5 ">
                          <i class="icon-info"></i><br>
                          О «Симтек»
                      </a>
                      <a href="<?php echo get_home_url(); ?>/geo" class="col-md-6 col-xs-6 ">
                          <i class="icon-globus"></i><br>
                          География и клиенты
                      </a>
                      <a href="<?php echo get_home_url(); ?>/team" class="col-md-5 col-xs-5 selected">
                          <i class="icon-team"></i><br>
                          Команда
                      </a>
                  </div>
              </div>
          </div>
   </div>
<div class="body">
    <div class="container-fluid">
        <div class="row">
           <h1 class="bigtitle">Более 80 специалистов в команде</h1>
            <div class="col-md-4 col-sm-2 col-xs-16"></div>

            <div class="col-md-8 col-sm-12 col-xs-16 content">
                <p>
                За успехом каждого нашего продукта стоят люди, которые его создают.
В него вложен труд, целеустремленность, талант и незаурядность — именно те качества, которые мы поощряем в своих сотрудниках.
                </p>
                <p>
Мы собрали команду лучших специалистов своего профиля. Каждый в команде «Симтек» знает, что сегодня он работает над тем, что завтра облегчит жизнь людей и сделает их бизнес успешнее. И это вдохновляет!
           </p>
            </div>
        </div>
    </div>
</div>
<div class="body gray">
    <div class="container-fluid">
        <div class="row slide">
          <h1>Руководство</h1>
           <ul class="boss">
               <li>
                   <div class="col-md-16">
                       <div class="col-md-6 slidetext">
                           «Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem».
                           <h4>Алексей Винокуров</h4>
                            Сооснователь и исполнительный директор
«Симбирские технологии»
                       </div>
                       <div class="col-md-10 slideimg">
                            <img src="<?php echo $templateLink; ?>/team/vinokurov.png" alt="">
                       </div>
                    </div>
               </li>
               <li>
                   <div class="col-md-16">
                       <div class="col-md-6 slidetext">
                           «Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem».
                           <h4>Алексей Винокуров</h4>
                            Сооснователь и исполнительный директор
«Симбирские технологии»
                       </div>
                       <div class="col-md-10 slideimg">
                            <img src="<?php echo $templateLink; ?>/team/vinokurov.png" alt="">
                       </div>
                    </div>
               </li>
           </ul>

        </div>
    </div>
</div>
<div class="body">
    <div class="container-fluid">
        <div class="row">
            <h1>Архитектура и разработка</h1>
            <div class="col-md-16">
                <div class="content image-left">
                 <div class="teamlead">
                         <img src="<?php echo $templateLink; ?>/team/architecture-and-development/makarov.jpg" alt="">
                  </div>
                   <div class="text">
                        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde assumenda, expedita. Ad velit, nostrum vel animi vero totam aspernatur nam fuga eveniet expedita incidunt cumque voluptatibus architecto suscipit illo dolorem.</div>
                        <div>Id deleniti, voluptate, praesentium dolore neque vel debitis. Earum ratione eos, tempora ducimus dolore! Consectetur similique molestias, modi accusamus ipsum, perferendis voluptatibus, facere illum corporis cupiditate commodi nobis itaque soluta.</div>

                        <div class="name">Илья Макаров</div>
                        технический директор
                    </div>
                </div>
                <div class="team-slide">
                    <ul>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/oleg.jpg" alt="">
                            <h4>Олег</h4>
                            Руководитель отдела системной интеграции
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/evgenii.jpg" alt="">
                            <h4>Евгений</h4>
                            Тимлид Twigmo
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/danil.jpg" alt="">
                            <h4>Даниил</h4>
                            Тимлид CS-Cart Россия
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/alexandr.jpg" alt="">
                            <h4>Александр</h4>
                            Архитектор
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/oleg2.jpg" alt="">
                            <h4>Олег</h4>
                            Архитектор
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/alex.jpg" alt="">
                            <h4>Александр</h4>
                            Архитектор
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/dmitrii.jpg" alt="">
                            <h4>Дмитрий</h4>
                            Архитектор
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/vladimir.jpg" alt="">
                            <h4>Владимир</h4>
                            Лид-разработчик
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/valerii.jpg" alt="">
                            <h4>Валерий</h4>
                            Разработчик
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/ramil.jpg" alt="">
                            <h4>Рамиль</h4>
                            Разработчик
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/ulia.jpg" alt="">
                            <h4>Юлия</h4>
                            1С-разработчик
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/maxim.jpg" alt="">
                            <h4>Максим</h4>
                            Разработчик
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/rustam.jpg" alt="">
                            <h4>Рустам</h4>
                            Разработчик
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/ivan.jpg" alt="">
                            <h4>Иван</h4>
                            Разработчик
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/azat.jpg" alt="">
                            <h4>Азат</h4>
                            Разработчик
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/sergei.jpg" alt="">
                            <h4>Сергей</h4>
                            Разработчик
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/constantine.jpg" alt="">
                            <h4>Константин</h4>
                            Разработчик
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/nikita.jpg" alt="">
                            <h4>Никита</h4>
                            Разработчик
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/andrey.jpg" alt="">
                            <h4>Андрей</h4>
                            Разработчик
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/dmitri-2.jpg" alt="">
                            <h4>Дмитрий</h4>
                            Разработчик
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/alexandr-2.jpg" alt="">
                            <h4>Александр</h4>
                            Разработчик
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/artur.jpg" alt="">
                            <h4>Артур</h4>
                            Александр
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/ekaterina.jpg" alt="">
                            <h4>Екатерина</h4>
                            Менеджер проектов
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/andrey-2.jpg" alt="">
                            <h4>Андрей</h4>
                            Менеджер проектов
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/serg.jpg" alt="">
                            <h4>Сергей</h4>
                            Менеджер проектов
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/mihail.jpg" alt="">
                            <h4>Михаил</h4>
                            Менеджер проектов
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/elena.jpg" alt="">
                            <h4>Елена</h4>
                            Менеджер проектов
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/anton.jpg" alt="">
                            <h4>Антон</h4>
                            Менеджер проектов
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/architecture-and-development/slider/gleb.jpg" alt="">
                            <h4>Глеб</h4>
                            Менеджер проектов
                        </li>



                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="body">
    <div class="container-fluid">
        <div class="row">
            <h1>Front-end разработка, верстка и дизайн</h1>
            <div class="col-md-16">
                <div class="content image-right">
                 <div class="teamlead">
                      <img src="<?php echo $templateLink; ?>/team/front-end/topimg.jpg" alt="">
                  </div>
                   <div class="text">
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde fugit possimus nam tempora earum minima, quasi magnam consequatur modi? Officiis in minima hic impedit quasi nesciunt labore nulla dolores animi!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus minima omnis laboriosam praesentium eius maiores, nam quasi. Fugiat ullam, aut itaque laudantium ut excepturi, numquam eligendi sit, expedita, velit dicta.

                        <div class="name">Алексей Мелекесов</div>
                        Разработчик интерфейсов CS-Cart
                    </div>
                </div>
                <div class="team-slide">
                    <ul>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/front-end/slider/alex.jpg" alt="">
                            <h4>Александр</h4>
                            Веб-технолог CS-Cart
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/front-end/slider/oleg.jpg" alt="">
                            <h4>Олег</h4>
                            Front-end разработчик Twigmo
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/front-end/slider/sergey.jpg" alt="">
                            <h4>Сергей</h4>
                            Front-end разработчик Merchium
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/front-end/slider/andrey.jpg" alt="">
                            <h4>Андрей</h4>
                            UX-дизайнер
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/front-end/slider/evgenii.jpg" alt="">
                            <h4>Евгений</h4>
                            Дизайнер-верстальщик
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/front-end/slider/lena.jpg" alt="">
                            <h4>Елена</h4>
                            Верстальщик
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/front-end/slider/maken.jpg" alt="">
                            <h4>Макен</h4>
                            Верстальщик
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/front-end/slider/natalya.jpg" alt="">
                            <h4>Наталия</h4>
                            Верстальщик
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="body">
    <div class="container-fluid">
        <div class="row">
            <h1>Контроль качества</h1>
            <div class="col-md-16">
                <div class="content image-right">
                  <div class="teamlead">
                      <img src="<?php echo $templateLink; ?>/team/control/topimg.jpg" alt="">
                  </div>
                   <div class="text">
                        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde assumenda, expedita. Ad velit, nostrum vel animi vero totam aspernatur nam fuga eveniet expedita incidunt cumque voluptatibus architecto suscipit illo dolorem.</div>
                        <div>Id deleniti, voluptate, praesentium dolore neque vel debitis. Earum ratione eos, tempora ducimus dolore! Consectetur similique molestias, modi accusamus ipsum, perferendis voluptatibus, facere illum corporis cupiditate commodi nobis itaque soluta.</div>

                        <div class="name">Алексей Мелекесов</div>
                        Разработчик интерфейсов CS-Cart
                    </div>
                </div>
                <div class="team-slide center-slides">
                    <ul>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/control/slides/ekaterina.jpg" alt="">
                            <h4>Екатерина</h4>
                            QA-специалист
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/control/slides/anastasiya.jpg" alt="">
                            <h4>Анастасия</h4>
                            QA-специалист
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/control/slides/dmitrii.jpg" alt="">
                            <h4>Дмитрий</h4>
                            QA-специалист
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/control/slides/alex.jpg" alt="">
                            <h4>Александр</h4>
                            QA-специалист
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/control/slides/ekaterina-2.jpg" alt="">
                            <h4>Екатерина</h4>
                            QA-специалист
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="body gray">
    <div class="container-fluid">
        <div class="row">
            <h1>Продажи и маркетинг</h1>
            <div class="col-md-16">
                <div class="content image-left">
                  <div class="teamlead">
                      <img src="<?php echo $templateLink; ?>/team/marketing/topimg.jpg" alt="">
                  </div>
                   <div class="text">
                        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde assumenda, expedita. Ad velit, nostrum vel animi vero totam aspernatur nam fuga eveniet expedita incidunt cumque voluptatibus architecto suscipit illo dolorem.</div>
                        <div>Id deleniti, voluptate, praesentium dolore neque vel debitis. Earum ratione eos, tempora ducimus dolore! Consectetur similique molestias, modi accusamus ipsum, perferendis voluptatibus, facere illum corporis cupiditate commodi nobis itaque soluta.</div>

                        <div class="name">Павел Трубецков</div>
                        Директор по маркетингу
                    </div>
                </div>
                <div class="team-slide">
                    <ul>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/marketing/slider/maria.jpg" alt="">
                            <h4>Мария</h4>
                            PR-менеджер
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/marketing/slider/alexandr.jpg" alt="">
                            <h4>Александр</h4>
                            Специалист по работе с партнерами
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/marketing/slider/anastasiya.jpg" alt="">
                            <h4>Анастасия</h4>
                            Менеджер по продажам
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/marketing/slider/tatyana.jpg" alt="">
                            <h4>Татьяна</h4>
                            Менеджер по работе с клиентами
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/marketing/slider/mihail.jpg" alt="">
                            <h4>Михаил</h4>
                            Специалист по лицензированию
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/marketing/slider/ekaterina.jpg" alt="">
                            <h4>Екатерина</h4>
                            Менеджер по продажам
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/marketing/slider/marie.jpg" alt="">
                            <h4>Мария</h4>
                            Менеджер по продажам
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="body gray">
    <div class="container-fluid">
        <div class="row">
            <h1>Текст</h1>
            <div class="col-md-16">
                <div class="content image-left">
                  <div class="teamlead">
                      <img src="<?php echo $templateLink; ?>/team/text/topimg.jpg" alt="">
                  </div>
                   <div class="text">
                        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde assumenda, expedita. Ad velit, nostrum vel animi vero totam aspernatur nam fuga eveniet expedita incidunt cumque voluptatibus architecto suscipit illo dolorem.</div>
                        <div>Id deleniti, voluptate, praesentium dolore neque vel debitis. Earum ratione eos, tempora ducimus dolore! Consectetur similique molestias, modi accusamus ipsum, perferendis voluptatibus, facere illum corporis cupiditate commodi nobis itaque soluta.</div>

                        <div class="name">Константин Молчанов</div>
                        Коммерческий писатель
                    </div>
                </div>
                <div class="team-slide center-slides">
                    <ul>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/text/slider/irina.jpg" alt="">
                            <h4>Ирина</h4>
                            Технический писатель
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/text/slider/yan.jpg" alt="">
                            <h4>Ян</h4>
                            Технический писатель
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/text/slider/ekaterina.jpg" alt="">
                            <h4>Екатерина</h4>
                            Переводчик
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/text/slider/yulia.jpg" alt="">
                            <h4>Юлия</h4>
                            Переводчик
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="body ">
    <div class="container-fluid">
        <div class="row">
            <h1>Поддержка клиентов</h1>
            <div class="col-md-16">
                <div class="content image-right">
                  <div class="teamlead">
                      <img src="<?php echo $templateLink; ?>/team/support/topimg.jpg" alt="">
                  </div>
                   <div class="text">
                        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde assumenda, expedita. Ad velit, nostrum vel animi vero totam aspernatur nam fuga eveniet expedita incidunt cumque voluptatibus architecto suscipit illo dolorem.</div>
                        <div>Id deleniti, voluptate, praesentium dolore neque vel debitis. Earum ratione eos, tempora ducimus dolore! Consectetur similique molestias, modi accusamus ipsum, perferendis voluptatibus, facere illum corporis cupiditate commodi nobis itaque soluta.</div>

                        <div class="name">Анастасия Козлова</div>
                        Руководитель техподдержки
                    </div>
                </div>
                <div class="team-slide center-slides">
                    <ul>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/support/slider/maria.jpg" alt="">
                            <h4>Мария</h4>
                            Специалист техподдержки
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/support/slider/evgenii.jpg" alt="">
                            <h4>Евгений</h4>
                            Специалист техподдержки
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="body ">
    <div class="container-fluid">
        <div class="row">
            <h1>Финансово-учетная служба</h1>
            <div class="col-md-16">
                <div class="content image-right">
                  <div class="teamlead">
                      <img src="<?php echo $templateLink; ?>/team/financial/topimg.jpg" alt="">
                  </div>
                   <div class="text">
                        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde assumenda, expedita. Ad velit, nostrum vel animi vero totam aspernatur nam fuga eveniet expedita incidunt cumque voluptatibus architecto suscipit illo dolorem.</div>
                        <div>Id deleniti, voluptate, praesentium dolore neque vel debitis. Earum ratione eos, tempora ducimus dolore! Consectetur similique molestias, modi accusamus ipsum, perferendis voluptatibus, facere illum corporis cupiditate commodi nobis itaque soluta.</div>

                        <div class="name">Марина Маринина</div>
                        Руководитель юридической службы
                    </div>
                </div>
                <div class="team-slide">
                    <ul>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/financial/slider/nelli.jpg" alt="">
                            <h4>Нелли</h4>
                            Главный бухгалтер
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/financial/slider/evgeniya.jpg" alt="">
                            <h4>Евгения</h4>
                            Юрисконсульт
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/financial/slider/ulia.jpg" alt="">
                            <h4>Юлия</h4>
                            Бухгалтер
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/financial/slider/rinata.jpg" alt="">
                            <h4>Рината</h4>
                            Бухгалтер
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/financial/slider/irina.jpg" alt="">
                            <h4>Ирина</h4>
                            HR-менеджер
                        </li>
                        <li class="item">
                            <img src="<?php echo $templateLink; ?>/team/financial/slider/olya.jpg" alt="">
                            <h4>Ольга</h4>
                            HR-менеджер
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row whatnext">
               <div class="col-md-16 ">
                   <a href="<?php echo get_home_url(); ?>/cscart" class="whitebutton a-dark t-h-none">
                       Что дальше? &nbsp;&nbsp;<span class="a-red">CS-Cart <i class="icon-right-arrow"></i></span>
                   </a>
               </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
