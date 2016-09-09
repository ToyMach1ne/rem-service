<?php get_header(); ?>
  <div class="wrap container-fluid">

  <div class="services-block wrap container-fluid wrap_breadcrumbs">
    <div class="breadcrumbs"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://rem-service.by/" itemprop="url"><span itemprop="title">Главная</span></a></span> <span class="sep">›</span> <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://rem-service.by/category/remont-stiralnyx-mashin/" itemprop="url"><span itemprop="title">Ремонт стиральных машин в Минске на дому</span></a></span> <span class="sep">›</span> <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://rem-service.by/category/remont-stiralnyx-mashin/problemy-so-stiralnymi-mashinami/" itemprop="url"><span itemprop="title">Проблемы со стиральными машинами</span></a></span> <span class="sep">›</span> <span class="current">Бесконечно стирает</span></div><!-- .breadcrumbs -->  </div>


  <h2 class="h2-style">Цены на ремонт (запчасти включены)</h2>
  <div class="wrap-table table-responsive">
    <noindex>
    <table width="100%">
<tbody>
<tr style="height: 24px;">
<th style="height: 24px;" width="60%">Вид услуги</th>
<th style="height: 24px;">Стоимость, руб. (BYN)</th>
</tr>

<?php query_posts("order=ASC&showposts=50&cat=9"); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <tr style="height: 24px;">
                  <td style="height: 24px;">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </td>
                  <td style="height: 24px;"><?php the_field('price'); ?></td>
                </tr>
                 <?php endwhile; endif; ?>
                  <?php wp_reset_query(); ?>

</tbody>
</table>
<p>&nbsp;</p>
</noindex>
    <span class="description-tb">
      *Итоговая стоимость ремонта зависит от трудоемкости работ и стоимости запасных частей.
    </span>
  </div>
  <section class="block-form wrap container-fluid">
    <div class="wrap-form wrap-form-int">
      <div class="wrapper-form-int">
        <div class="application2">Оставьте заявку, мастер свяжется с вами в течение 10 минут!</div>
        <div class="wrapper-form">
          <form action="http://rem-service.by/send.php" method="post" onsubmit="yaCounter34596230.reachGoal(&#39;order&#39;);return true;">
            <div class="wrap-input">
              <input type="text" placeholder="Ваше имя" name="firstname" required="">
              <input type="tel" placeholder="Ваш телефон" name="phone" class="ytel" required="">
              <select name="brand">
                <option value="no" selected="">Бренд стиральной машины</option>

                                    <option value="AEG">AEG</option>
                                    <option value="Ardo">Ardo</option>
                                    <option value="Ariston">Ariston</option>
                                    <option value="Asko">Asko</option>
                                    <option value="Bauknecht">Bauknecht</option>
                                    <option value="Beko">Beko</option>
                                    <option value="Bosch">Bosch</option>
                                    <option value="Brandt">Brandt</option>
                                    <option value="Candy">Candy</option>
                                    <option value="Daewoo">Daewoo</option>
                                    <option value="Electrolux">Electrolux</option>
                                    <option value="Euronova">Euronova</option>
                                    <option value="General Electric">General Electric</option>
                                    <option value="Gorenje">Gorenje</option>
                                    <option value="Hansa">Hansa</option>
                                    <option value="Indesit">Indesit</option>
                                    <option value="Kaiser">Kaiser</option>
                                    <option value="LG">LG</option>
                                    <option value="Miele">Miele</option>
                                    <option value="Otsein">Otsein</option>
                                    <option value="Philco">Philco</option>
                                    <option value="Privileg">Privileg</option>
                                    <option value="Rosieres">Rosieres</option>
                                    <option value="Samsung">Samsung</option>
                                    <option value="Siemens">Siemens</option>
                                    <option value="Thomson">Thomson</option>
                                    <option value="Whirlpool">Whirlpool</option>
                                    <option value="Zanussi">Zanussi</option>
                                    <option value="Атлант">Атлант</option>
                                              </select></div>
            <textarea name="comm" placeholder="Кратко опишите проблему. Например: не включается, течет и т.д."></textarea><input type="hidden" name="type" value="rem">
            <input type="submit" value="Отправить заявку на ремонт"></form>
          <div class="tel-form">
            <span>Или звоните:</span>
            +375(29) 105-28-09 (вел), +375 (33) 684-68-44 (мтс)
          </div>
        </div>
      </div>
    </div>
  </section>  <div class="text-content">



<!-- <div class="services-block wrap container-fluid wrap_breadcrumbs">
  </div> -->



<article id="post-58" class="post-58 post type-post status-publish format-standard hentry category-problemy-so-stiralnymi-mashinami">
  <header class="entry-header">
  <h1 class="entry-title">
      Устраняем проблемы со стиральными машинами: <span class="lowertitle">Бесконечно стирает</span>
    </h1>
      </header><!-- .entry-header -->




  <div class="entry-content">
    <p>Ваша стиральная машина стирает очень долго? Вот основные причины!</p>
<ul>
<li><a href="http://rem-service.by/stiralnaya-mashina-beskonechno-stiraet/#voda">Проблемы с подачей воды</a></li>
<li><a href="http://rem-service.by/stiralnaya-mashina-beskonechno-stiraet/#sliv">Проблемы со сливом воды</a></li>
<li><a href="http://rem-service.by/stiralnaya-mashina-beskonechno-stiraet/#uhodit">Вода постоянно поступает и уходит</a></li>
<li><a href="http://rem-service.by/stiralnaya-mashina-beskonechno-stiraet/#nagrev">Проблемы с нагревом воды</a></li>
<li><a href="http://rem-service.by/stiralnaya-mashina-beskonechno-stiraet/#dolgo">Стиральная машина долго крутит барабан или зависает</a></li>
</ul>
<p>Ситуация, когда стиральная машина долго (бесконечно) стирает, встречается достаточно часто. Иногда это может быть просто субъективная оценка времени владельцем машинки, но чаще всего это вызвано неисправностью, которая увеличивает время стирки.</p>
<h2><a id="voda"></a>Проблемы с подачей воды</h2>
<p>Примерно 79% обращений по причине бесконечной стирки — проблемы с подачей воды (стиралка не набирет воду).</p>
<p>Чтобы вы могли сами диагностировать проблему, откройте смеситель и проверьте напор воды. Снимите фильтр-сеточку в наливном клапане и проверьте кран, открыт ли он до конца.</p>
<figure id="attachment_1608" style="width: 500px" class="wp-caption aligncenter"><img class="wp-image-1608 size-full" src="<?php echo get_template_directory_uri(); ?>/img/20150406155952.jpg" alt="Достаем фильтр из наливного клапана" width="500" height="375" srcset="http://rem-service.by/wp-content/uploads/2016/03/20150406155952.jpg 500w, http://rem-service.by/wp-content/uploads/2016/03/20150406155952-300x225.jpg 300w" sizes="(max-width: 500px) 85vw, 500px"><figcaption class="wp-caption-text">Достаем фильтр из наливного клапана</figcaption></figure>
<p>Проблем может быть и в клапане подачи воды. Если он начал барахлить, то следует выполнить замену, для этого позвоните нашему мастеру, мы выполним ремонт уже сегодня!</p>
<h3><a id="sliv"></a>Проблемы со сливом воды</h3>
<p>Ситуация аналогичная, но встречается несколько реже по причине того, что засоры патрубков, шланга или фильтров воды устраняются гораздо чаще. Если же возникла ситуация, то выполните прочистку.</p>
<figure id="attachment_1609" style="width: 500px" class="wp-caption aligncenter"><img class="wp-image-1609 size-full" src="<?php echo get_template_directory_uri(); ?>/img/20150406160028.jpg" alt="Достаем сливной фильтр из стиральной машины" width="500" height="175" srcset="http://rem-service.by/wp-content/uploads/2016/03/20150406160028.jpg 500w, http://rem-service.by/wp-content/uploads/2016/03/20150406160028-300x105.jpg 300w" sizes="(max-width: 500px) 85vw, 500px"><figcaption class="wp-caption-text">Достаем сливной фильтр из стиральной машины</figcaption></figure>
<p>Если же проблема в патрубке, то самостоятельно вы вряд ли сможете решить проблему. Вызывайте мастера, и уже сегодня ваша машина будет исправна!</p>
<blockquote><p><strong>ВНИМАНИЕ!</strong> При самостоятельном ремонте патрубка возможно получение травмы, возникновение короткого замыкания и выход из строя помпы. Поэтому лучше вызвать мастера!</p></blockquote>
<h2><a id="uhodit"></a>Вода постоянно поступает и уходит</h2>
<p>Ситуация, когда проблема с подачей и сливом возникает одновременно. Бывает достаточно редко, но у нас были обращения и по таким причинам.</p>
<h3>Неправильное подключение стиральной машины</h3>
<p>Если машина подключена неправильно, шланг не поднят на нужный уровень, не установлен сифон, то вода может уходить «самотеком».</p>
<p>Необходимо, чтобы мастер проводил подключение стиральной машины. Тогда вы избавитесь от этой проблемы. Если же вы хотите подключать самостоятельно, то поднимите сливной шланг на 50 см от уровня пола, либо используйте сифон.</p>
<figure id="attachment_1619" style="width: 550px" class="wp-caption aligncenter"><img class="wp-image-1619 size-full" src="<?php echo get_template_directory_uri(); ?>/img/20151205155756.jpg" alt="Правила установки сливного шланга стиральной машины" width="550" height="197" srcset="http://rem-service.by/wp-content/uploads/2016/03/20151205155756.jpg 550w, http://rem-service.by/wp-content/uploads/2016/03/20151205155756-300x107.jpg 300w" sizes="(max-width: 550px) 85vw, 550px"><figcaption class="wp-caption-text">Правила установки сливного шланга стиральной машины</figcaption></figure>
<h3>Сломался прессостат</h3>
<p>Прессостат — датчик уровня воды, он передает данные в модуль управления о количестве воды в стиральной машине. Если он сломан, то стиральная машина не понимает, сколько воды внутри и будет бесконечно набирать и сливать воду, соответственно и стирать будет бесконечно.</p>
<p>Проблема решается с помощью мастера и замены прессостата.</p>
<h2><a id="nagrev"></a>Проблемы с нагревом воды</h2>
<p>Если вода долго греется, то проблема в 99% случаев связана с нагревательным элементом стиральной машины (ТЭНом)</p>
<h3>Накипь на ТЭНе</h3>
<p>Накипь на ТЭНе увеличивает время стирки белья в стиральном автомате. Возможна очистка ТЭНа лимонной кислотой, но чаще всего необходима его замена.</p>
<figure id="attachment_1622" style="width: 500px" class="wp-caption aligncenter"><img class="wp-image-1622 size-full" src="<?php echo get_template_directory_uri(); ?>/img/20150406161247.jpg" alt="ТЭН с накипью" width="500" height="205" srcset="http://rem-service.by/wp-content/uploads/2016/03/20150406161247.jpg 500w, http://rem-service.by/wp-content/uploads/2016/03/20150406161247-300x123.jpg 300w" sizes="(max-width: 500px) 85vw, 500px"><figcaption class="wp-caption-text">ТЭН с накипью</figcaption></figure>
<h3>ТЭН вышел из строя</h3>
<p>После того, как накипи на ТЭНе станет слишком много, он выходит из строя. В этом случае стирка «зависает» и останавливается. Стиральный автомат выдаст ошибку. Некоторые машинки могут надолго так зависнуть, либо продолжить стирку в холодной воде.</p>
<blockquote><p>Выход один — замена ТЭНа. Этот ремонт недорогостоящий, мастер выполнит его буквально за полчаса-час.</p></blockquote>
<h3>Сломан термодатчик</h3>
<p>В стиральной машине находится термодатчик, который определяет температуру воды и передает модулю управления. Если модуль будет получать неверный сигнал о температуре воды, то нагрев может происходить дольше чем это предполагается, за счет чего время стирки будет длиннее.</p>
<p>Чтобы избежать проблемы вам нужно заменить термостат. Это может сделать наш мастер в течение одного дня!</p>
<h2><a id="dolgo"></a>Стиральная машина долго крутит барабан или зависает</h2>
<p>Если вода подается и сливается нормально, нагревается вода, но автомат стирает бесконечно, то возможны следующие редкие причины:</p>
<ul>
<li><strong>Проблема с модулем управления</strong> — в редких случаях (не более 3-5% от всех поломок) может давать сбой блок управления, некорректно выполняя программу стирки. Самостоятельно данная проблема не решается, нужна диагностика мастера. Возможно, придется перепрошить модуль, либо заменить его на новый.</li>
<li><strong>Стиральная машина перегружена</strong> — возможен дисбаланс в барабане или перегрузка бельем (примерно 0,5% случаев от общего числа). У автомата не хватает мощности, чтобы раскрутить барабан. Из-за этого программа стирки может выполняться очень долго. Просто не перегружайте машину, и она станет стирать корректно!</li>
</ul>
<p>Любые проблемы с тем, что ваша стиральная машина долго или бесконечно стирает решает наш мастер. Выезд и диагностика бесплатно! У мастера есть тапочки, мы убираем за собой весь мусор после проведения ремонта!</p>
  </div><!-- .entry-content -->

</article><!-- #post-## -->
  </div>

<noindex>
  <section class="block-form wrap container-fluid">
    <div class="wrap-form wrap-form-int">
      <div class="wrapper-form-int">
        <div class="application2">Оставьте заявку, мастер свяжется с вами в течение 10 минут!</div>
        <div class="wrapper-form">
          <form action="http://rem-service.by/send.php" method="post" onsubmit="yaCounter34596230.reachGoal(&#39;order&#39;);return true;">
            <div class="wrap-input">
              <input type="text" placeholder="Ваше имя" name="firstname" required="">
              <input type="tel" placeholder="Ваш телефон" name="phone" class="ytel" required="">
              <select name="brand">
                <option value="no" selected="">Бренд стиральной машины</option>

                                    <option value="AEG">AEG</option>
                                    <option value="Ardo">Ardo</option>
                                    <option value="Ariston">Ariston</option>
                                    <option value="Asko">Asko</option>
                                    <option value="Bauknecht">Bauknecht</option>
                                    <option value="Beko">Beko</option>
                                    <option value="Bosch">Bosch</option>
                                    <option value="Brandt">Brandt</option>
                                    <option value="Candy">Candy</option>
                                    <option value="Daewoo">Daewoo</option>
                                    <option value="Electrolux">Electrolux</option>
                                    <option value="Euronova">Euronova</option>
                                    <option value="General Electric">General Electric</option>
                                    <option value="Gorenje">Gorenje</option>
                                    <option value="Hansa">Hansa</option>
                                    <option value="Indesit">Indesit</option>
                                    <option value="Kaiser">Kaiser</option>
                                    <option value="LG">LG</option>
                                    <option value="Miele">Miele</option>
                                    <option value="Otsein">Otsein</option>
                                    <option value="Philco">Philco</option>
                                    <option value="Privileg">Privileg</option>
                                    <option value="Rosieres">Rosieres</option>
                                    <option value="Samsung">Samsung</option>
                                    <option value="Siemens">Siemens</option>
                                    <option value="Thomson">Thomson</option>
                                    <option value="Whirlpool">Whirlpool</option>
                                    <option value="Zanussi">Zanussi</option>
                                    <option value="Атлант">Атлант</option>
                                              </select></div>
            <textarea name="comm" placeholder="Кратко опишите проблему. Например: не включается, течет и т.д."></textarea><input type="hidden" name="type" value="rem">
            <input type="submit" value="Отправить заявку на ремонт"></form>
          <div class="tel-form">
            <span>Или звоните:</span>
            +375(29) 105-28-09 (вел), +375 (33) 684-68-44 (мтс)
          </div>
        </div>
      </div>
    </div>
  </section>  <section class="guarantee guarantee-index">
    <div class="wrap container-fluid">
      <div class="guarantee-block">
        <h2 class="h2-style">Гарантийная и постгарантийная поддержка</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="guarantee-img">
              <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/guarantee-img.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-8">
            <p>
              Мастер в обязательном порядке выписывает квитанцию, в которой указывает ваши данные, марку и модель стиральной машины, выполненные работы и гарантийный срок на них. По этой квитанции вы можете обратиться за гарантийным ремонтом в любое время. Срок гарантии на выполненные работы - до 12 месяцев.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="clients">
    <h2 class="h2-style">Отзывы наших клиентов</h2>
    <div class="wrap-clients">

              <div class="wrap container-fluid">
          <div class="client-block-content">
            <span class="client-title">“Инна: Очень приятно видеть профессионалов!”</span>
            <p>26.04.2016 мы вызвали мастера по ремонту машины (их у нас 2: Атлант и Bosch). Он приехал очень оперативно, хоть и не так как обещали, но позвонил и предупредил. Работу выполнил быстро и аккуратно — причину поломок устранил! Очень приятно видеть таких людей-профессионалов! Спасибо!</p>
            <div id="player4023" class="aplayer"></div>
            <div class="info-name">
              <strong>Выполненная работа: </strong>ремонт<br><strong>Марка:</strong> Атлант, Bosch                          </div>
          </div>
        </div>
              <div class="wrap container-fluid">
          <div class="client-block-content">
            <span class="client-title">“Владимир Петухов: Мастер отлично справился со сложной работой”</span>
            <p>Я, Владимир, обращался в фирму ремсервис по поводу ремонта стиральной машины Электролюкс. Неисправность заключалась в том, что не работал подшипник и требовалась его замена. Это довольно сложная операция, поэтому я подошел к поиску мастера достаточно серьезно и нашел такого мастера в фирме ремсервис. Им была выполнена работа достаточно квалифицированно. И я доволен тем, что обратился в фирму ремсервис по поводу данной услуги</p>
            <div id="player35" class="aplayer"></div>
            <div class="info-name">
              <strong>Выполненная работа: </strong>ремонт<br><strong>Марка:</strong> Электролюкс                          </div>
          </div>
        </div>

              <div class="wrap container-fluid">
          <div class="client-block-content">
            <span class="client-title">“Татьяна Вершаль: У мастера была сменная обувь и он убрал весь мусор”</span>
            <p>Здравствуйте, меня зовут Татьяна. Две недели назад мы вызывали мастера по ремонту стиральной машины с организации ремсервис. Очень довольны работой мастера, ремонтом стиральной машины. Мастер приехал в удобное для нас время, которое было заранее оговорено, при себе имел сменную обувь, а также за собой убрал весь мусор после ремонта. Объяснил некоторые тонкости по стиральной машинке и по выбору стирального порошка. Работу выполнил быстро и качественно. Работой остались очень довольны, за что огромное спасибо.</p>
            <div id="player31" class="aplayer"></div>
            <div class="info-name">
              <strong>Выполненная работа: </strong>ремонт<br><strong>Марка:</strong> LG                         </div>
          </div>
        </div>


    </div>
  </section>
  </noindex>

  <section class="block-form wrap container-fluid">
    <div class="wrap-form wrap-form-int">
      <div class="wrapper-form-int">
        <div class="application2">Оставьте заявку, мастер свяжется с вами в течение 10 минут!</div>
        <div class="wrapper-form">
          <form action="http://rem-service.by/send.php" method="post" onsubmit="yaCounter34596230.reachGoal(&#39;order&#39;);return true;">
            <div class="wrap-input">
              <input type="text" placeholder="Ваше имя" name="firstname" required="">
              <input type="tel" placeholder="Ваш телефон" name="phone" class="ytel" required="">
              <select name="brand">
                <option value="no" selected="">Бренд стиральной машины</option>

                                    <option value="AEG">AEG</option>
                                    <option value="Ardo">Ardo</option>
                                    <option value="Ariston">Ariston</option>
                                    <option value="Asko">Asko</option>
                                    <option value="Bauknecht">Bauknecht</option>
                                    <option value="Beko">Beko</option>
                                    <option value="Bosch">Bosch</option>
                                    <option value="Brandt">Brandt</option>
                                    <option value="Candy">Candy</option>
                                    <option value="Daewoo">Daewoo</option>
                                    <option value="Electrolux">Electrolux</option>
                                    <option value="Euronova">Euronova</option>
                                    <option value="General Electric">General Electric</option>
                                    <option value="Gorenje">Gorenje</option>
                                    <option value="Hansa">Hansa</option>
                                    <option value="Indesit">Indesit</option>
                                    <option value="Kaiser">Kaiser</option>
                                    <option value="LG">LG</option>
                                    <option value="Miele">Miele</option>
                                    <option value="Otsein">Otsein</option>
                                    <option value="Philco">Philco</option>
                                    <option value="Privileg">Privileg</option>
                                    <option value="Rosieres">Rosieres</option>
                                    <option value="Samsung">Samsung</option>
                                    <option value="Siemens">Siemens</option>
                                    <option value="Thomson">Thomson</option>
                                    <option value="Whirlpool">Whirlpool</option>
                                    <option value="Zanussi">Zanussi</option>
                                    <option value="Атлант">Атлант</option>
                                              </select></div>
            <textarea name="comm" placeholder="Кратко опишите проблему. Например: не включается, течет и т.д."></textarea><input type="hidden" name="type" value="rem">
            <input type="submit" value="Отправить заявку на ремонт"></form>
          <div class="tel-form">
            <span>Или звоните:</span>
            +375(29) 105-28-09 (вел), +375 (33) 684-68-44 (мтс)
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Выводим другие бренды -->

    <h2 class="h2-style">Ремонтируем также cтиральные машины других брендов</h2>
    <div class="brandlist">
        <?php query_posts("order=ASC&showposts=50&cat=12"); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'style=width=124;height:88;'); ?>

            </a>
            <?php endwhile; endif; ?>
                                <?php wp_reset_query(); ?>
        </div>

  <div class="problem-list">
    <h2 class="h2-style">Устраняем все поломки</h2>
    <div class="row">
      <div class="list-li">
        <ul>
              <?php query_posts("order=ASC&showposts=50&cat=11"); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>


        </ul>
      </div>
    </div>
  </div><!--list-info-->

</div>
<?php get_footer(); ?>

