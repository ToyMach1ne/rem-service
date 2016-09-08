<?php /* Template Name: Home Page */ get_header(); ?>

    <section class="block-info">
        <div class="wrap container-fluid">
            <div class="row">
            <?php if( have_rows('our_committers') ):
    while ( have_rows('our_committers') ) : the_row();
    // vars
        $image = get_sub_field('repeater_image');?>
                <div class="col-lg-3">
                    <div class="wrapper-bl">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                        <span class="title-bl"><?php the_sub_field('committer_title'); ?></span>
                        <p>
                        <?php the_sub_field('committers_description'); ?>
                        </p>
                    </div>
                </div>
                <?php endwhile; else :
                // no rows found
                 endif; ?>
            </div>
        </div>
    </section>
    <div class="services-block wrap container-fluid wrap_breadcrumbs">
    </div>
    <section class="services">
        <div class="services-block wrap container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <h2 class="h2-style">Ремонтируем стиральные машины</h2>
                    <div class="row wrap-img">
                        <ul>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-aeg/">AEG</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-ardo/">Ardo</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-ariston/">Ariston</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-asko/">Asko</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-bauknecht/">Bauknecht</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-beko/">Beko</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-bosch/">Bosch</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-brandt/">Brandt</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-candy/">Candy</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-daewoo/">Daewoo</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-electrolux/">Electrolux</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-euronova/">Euronova</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-general-electric/">General Electric</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-gorenje/">Gorenje</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-hansa/">Hansa</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-indesit/">Indesit</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-kaiser/">Kaiser</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-lg/">LG</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-miele/">Miele</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-otsein/">Otsein</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-philco/">Philco</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-privileg/">Privileg</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-rosieres/">Rosieres</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-samsung/">Samsung</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-siemens/">Siemens</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-thomson/">Thomson</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-whirlpool/">Whirlpool</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-zanussi/">Zanussi</a></li>
                            <li><a href="http://rem-service.by/remont-stiralnyh-mashin-atlant/">Атлант</a></li>
                        </ul>
                    </div>
                    <h2 class="h2-style">Устраняем проблемы</h2>
                    <div class="row wrap-img">
                        <ul>
                            <li><a href="http://rem-service.by/stiralnaya-mashina-beskonechno-stiraet/">Бесконечно стирает</a></li>
                            <li><a href="http://rem-service.by/v-stiralnoy-mashine-boltaetsya-baraban/">Болтается барабан</a></li>
                            <li><a href="http://rem-service.by/stiralnaya-mashina-vse-vremya-nabiraet-vodu/">Все время набирает воду</a></li>
                            <li><a href="http://rem-service.by/stiralnaya-mashina-vybivaet-probki/">Выбивает пробки</a></li>
                            <li><a href="http://rem-service.by/stiralnaya-mashina-zavisaet/">Зависает</a></li>
                            <li><a href="http://rem-service.by/stiralnaya-mashina-iskrit/">Искрит</a></li>
                            <li><a href="http://rem-service.by/na-stiralnoj-mashine-migaut-lampochki/">Лампочки мигают</a></li>
                            <li><a href="http://rem-service.by/stiralnaya-mashina-ne-vklyuchaetsya/">Не включается</a></li>
                            <li><a href="http://rem-service.by/stiralnaya-mashina-ne-greet-vodu/">Не греет воду</a></li>
                            <li><a href="http://rem-service.by/stiralnaya-mashina-ne-zakryvaetsya/">Не закрывается</a></li>
                            <li><a href="http://rem-service.by/stiralnaya-mashina-ne-zalivaet-vodu/">Не заливает воду</a></li>
                            <li><a href="http://rem-service.by/stiralnaya-mashina-ne-krutit-baraban/">Не крутит барабан</a></li>
                            <li><a href="http://rem-service.by/stiralnaya-mashina-ne-otzhimaet/">Не отжимает</a></li>
                            <li><a href="http://rem-service.by/stiralnaya-mashina-ne-otkryvaetsya/">Не открывается</a></li>
                            <li><a href="http://rem-service.by/stiralnaya-mashina-ne-slivaet-vodu/">Не сливает воду</a></li>
                            <li><a href="http://rem-service.by/stiralnaya-mashina-ne-smyvaet-poroshok/">Не смывает порошок</a></li>
                            <li><a href="http://rem-service.by/stiralnaya-mashina-ne-stiraet-posle-nabora-vody/">Не стирает после набора воды</a></li>
                            <li><a href="http://rem-service.by/stiralnaya-mashina-ostanavlivaetsya-v-processe-stirki/">Останавливается в процессе стирки</a></li>
                            <li><a href="http://rem-service.by/iz-stiralnpj-mashiny-pahnet-kanalizaciej/">Пахнет канализацией</a></li>
                            <li><a href="http://rem-service.by/nakip-v-stiralnoi-mashine/">Появилась накипь</a></li>
                            <li><a href="http://rem-service.by/stiralnaya-mashina-poyavlyayutsya-pyatna/">Появляются пятна</a></li>
                            <li><a href="http://rem-service.by/stiralnaya-mashina-rvet-bele/">Рвет белье</a></li>
                            <li><a href="http://rem-service.by/stiralnaya-mashina-silno-shumit/">Сильно шумит</a></li>
                            <li><a href="http://rem-service.by/stiralnaya-mashina-skripit/">Скрипит</a></li>
                            <li><a href="http://rem-service.by/stiralnaya-mashina-stuchit-pri-otzhime-ili-stirke/">Стучит при отжиме или стирке</a></li>
                            <li><a href="http://rem-service.by/stiralnaya-mashina-techet-ili-podtekaet/">Течет или подтекает</a></li>
                        </ul>
                    </div>
                    <h2 class="h2-style">Ремонт и замена</h2>
                    <div class="row wrap-img">
                        <ul>
                            <li><a href="http://rem-service.by/diagnostika-stiralnyh-mashin/">Диагностика</a></li>
                            <li><a href="http://rem-service.by/zamena-amortizatorov-stiralnoy-mashiny/">Замена амортизаторов</a></li>
                            <li><a href="http://rem-service.by/zamena-vpusknogo-klapana-stiralnoy-mashiny/">Замена впускного клапана</a></li>
                            <li><a href="http://rem-service.by/zamena-dvigatelya-stiralnoy-mashiny/">Замена двигателя</a></li>
                            <li><a href="http://rem-service.by/zamena-komplekta-podshipnikov-salnik/">Замена комплекта подшипников + сальник</a></li>
                            <li><a href="http://rem-service.by/zamena-kondensatora-stiralnoy-mashiny/">Замена конденсатора</a></li>
                            <li><a href="http://rem-service.by/zamena-nagrevatelnogo-elementa-ten/">Замена нагревательного элемента (ТЭН)</a></li>
                            <li><a href="http://rem-service.by/zamena-remnya-privoda-barabana/">Замена ремня привода барабана</a></li>
                            <li><a href="http://rem-service.by/zamena-slivnogo-nasosa-pompa/">Замена сливного насоса (помпа)</a></li>
                            <li><a href="http://rem-service.by/zamena-termostata/">Замена термостата</a></li>
                            <li><a href="http://rem-service.by/zamena-uplotnitelnoj-reziny-lyuka-manzheta-gofra/">Замена уплотнительной резины люка (манжета, гофра)</a></li>
                            <li><a href="http://rem-service.by/zamena-ustrojstva-blokirovki-lyuka/">Замена устройства блокировки люка</a></li>
                            <li><a href="http://rem-service.by/zamena-filtra-slivnogo-nasosa/">Замена фильтра сливного насоса</a></li>
                            <li><a href="http://rem-service.by/zamena-cirkulyacionnogo-nasosa-pompa/">Замена циркуляционного насоса (помпа)</a></li>
                            <li><a href="http://rem-service.by/zamena-elektronnogo-modulya-plata-upravleniya/">Замена электронного модуля (плата управления)</a></li>
                            <li><a href="http://rem-service.by/remont-elektronnogo-modulya/">Ремонт электронного модуля</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <h2 class="h2-style">Цены на ремонт (запчасти включены)</h2>
                    <div class="wrap-table table-responsive">
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
                        <span class="description-tb">
              *Итоговая стоимость ремонта зависит от трудоемкости работ и стоимости запасных частей.
            </span>
                    </div>
                    <article>
                       <?php the_field('text_before_footer'); ?>
                    </article>
                </div>
            </div>
        </div>
    </section>
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
                            </select>
                        </div>
                        <textarea name="comm" placeholder="Кратко опишите проблему. Например: не включается, течет и т.д."></textarea>
                        <input type="hidden" name="type" value="rem">
                        <input type="submit" value="Отправить заявку на ремонт">
                    </form>
                    <div class="tel-form">
                        <span>Или звоните:</span> +375(29) 105-28-09 (вел), +375 (33) 684-68-44 (мтс)
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="guarantee guarantee-index">
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
    <noindex>
        <section class="clients">
            <h2 class="h2-style">Отзывы наших клиентов</h2>
            <div class="wrap-clients">
                <div class="wrap container-fluid">
                    <div class="client-block-content">
                        <span class="client-title">“Инна: Очень приятно видеть профессионалов!”</span>
                        <p>26.04.2016 мы вызвали мастера по ремонту машины (их у нас 2: Атлант и Bosch). Он приехал очень оперативно, хоть и не так как обещали, но позвонил и предупредил. Работу выполнил быстро и аккуратно — причину поломок устранил! Очень приятно видеть таких людей-профессионалов! Спасибо!</p>
                        <div id="player4023" class="aplayer"></div>
                        <div class="info-name">
                            <strong>Выполненная работа: </strong>ремонт
                            <br><strong>Марка:</strong> Атлант, Bosch </div>
                    </div>
                </div>
                <div class="wrap container-fluid">
                    <div class="client-block-content">
                        <span class="client-title">“Владимир Петухов: Мастер отлично справился со сложной работой”</span>
                        <p>Я, Владимир, обращался в фирму ремсервис по поводу ремонта стиральной машины Электролюкс. Неисправность заключалась в том, что не работал подшипник и требовалась его замена. Это довольно сложная операция, поэтому я подошел к поиску мастера достаточно серьезно и нашел такого мастера в фирме ремсервис. Им была выполнена работа достаточно квалифицированно. И я доволен тем, что обратился в фирму ремсервис по поводу данной услуги</p>
                        <div id="player35" class="aplayer"></div>
                        <div class="info-name">
                            <strong>Выполненная работа: </strong>ремонт
                            <br><strong>Марка:</strong> Электролюкс </div>
                    </div>
                </div>

                <div class="wrap container-fluid">
                    <div class="client-block-content">
                        <span class="client-title">“Татьяна Вершаль: У мастера была сменная обувь и он убрал весь мусор”</span>
                        <p>Здравствуйте, меня зовут Татьяна. Две недели назад мы вызывали мастера по ремонту стиральной машины с организации ремсервис. Очень довольны работой мастера, ремонтом стиральной машины. Мастер приехал в удобное для нас время, которое было заранее оговорено, при себе имел сменную обувь, а также за собой убрал весь мусор после ремонта. Объяснил некоторые тонкости по стиральной машинке и по выбору стирального порошка. Работу выполнил быстро и качественно. Работой остались очень довольны, за что огромное спасибо.</p>
                        <div id="player31" class="aplayer"></div>
                        <div class="info-name">
                            <strong>Выполненная работа: </strong>ремонт
                            <br><strong>Марка:</strong> LG </div>
                    </div>
                </div>

            </div>
        </section>
    </noindex>
    <!-- <section class="block-information wrap container-fluid">
    <div class="wrap-information">
      <div class="block-information-txt">
        <p>
          Можно купить новую стиральную машину, но зачем терять деньги и бесценное время? Куда проще обратиться к <strong>опытным мастерам</strong> , которые оперативно решат ваши проблемы.
        </p>
        <p>
          Достаточно позвонить нам или вызвать мастера через
          <strong>форму на сайте</strong> . Наши мастера свяжутся с вами<strong> в течение 10 минут!
          </strong>
        </p>
      </div>
      <div class="block-information-img">
        <img class="img-responsive" src="http://rem-service.by/wp-content/themes/rem-service/img/img-master.jpg" alt=""/>
      </div>
    </div>
  </section> -->
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
                            </select>
                        </div>
                        <textarea name="comm" placeholder="Кратко опишите проблему. Например: не включается, течет и т.д."></textarea>
                        <input type="hidden" name="type" value="rem">
                        <input type="submit" value="Отправить заявку на ремонт">
                    </form>
                    <div class="tel-form">
                        <span>Или звоните:</span> +375(29) 105-28-09 (вел), +375 (33) 684-68-44 (мтс)
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>
