<?php get_header(); ?>
    <div class="wrap container-fluid">
        <div class="services-block wrap container-fluid wrap_breadcrumbs">
            <div class="breadcrumbs"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?php echo home_url(); ?>" itemprop="url"><span itemprop="title">Главная</span></a>
                </span> <span class="sep">›</span> <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="#" itemprop="url"><span itemprop="title">Ремонт стиральных машин в Минске на дому</span></a>
                </span> <span class="sep">›</span> <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="#" itemprop="url"><span itemprop="title">Бренды стиральных машин</span></a>
                </span> <span class="sep">›</span> <span class="current"><?php the_title(); ?></span></div>
            <!-- .breadcrumbs -->
        </div>
        <!-- ------------------------------------------------------------------ -->
        <h2 class="h2-style">Цены на ремонт стиральных машин <?php the_title(); ?>  (запчасти включены)</h2>
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
        <div class="problem-list">
            <h2 class="h2-style">Проблемы, которые мы устраняем</h2>
            <div class="row">
                <div class="list-li">
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
            </div>
        </div>
        <!--list-info-->
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
        <div class="text-content">
            <!-- <div class="services-block wrap container-fluid wrap_breadcrumbs">
  </div> -->
            <article id="post-209" class="post-209 post type-post status-publish format-standard has-post-thumbnail hentry category-brendy-stiralnyx-mashin">
                <header class="entry-header">
                    <h1 class="entry-title">
      Ремонт стиральных машин AEG   </h1>
                </header>
                <!-- .entry-header -->
                <div class="entry-content">
                    <p><strong>AEG</strong> – немецкий гигант в производстве бытовых электроприборов. За время существования компания создала обширный ряд моделей, отличающихся от соседей на витрине техническими возможностями и внешней привлекательностью.</p>
                    <p>Ремонт стиральных машин AEG на дому следует проводить с пониманием сути процесса, используя профессиональные инструменты и «родные» комплектующие. Техника этого бренда относится к премиумной категории и неквалифицированный ремонт СМА АЕГ на дому может привести к серьёзным тратам на восстановление испорченных деталей.</p>
                    <h3>Вот поломки, с которыми чаще всего к нам обращаются владельцы за ремонтом стиральных машин AEG:</h3>
                    <ul>
                        <li><strong>Программатор или электрическая система управления</strong> – машинка не запускается, не набирает воду, происходит некорректное выполнение заданных программ</li>
                        <li><strong>Подшипники бака</strong> – присутствие металлического скрежета при работе СМА</li>
                        <li><strong>Сливная помпа</strong> – не происходит слив воды</li>
                        <li><strong>Термостат</strong> – при стирке не вода остаётся холодной</li>
                    </ul>
                    <p>Наш частный мастер – это оптимальное решение для обеспечения надлежащего ремонта машинки.<strong> Самым удобным считается ремонт стиралок АЕГ с выездом на дом, что избавляет от лишней волокиты с сервис-центром.</strong></p>
                </div>
                <!-- .entry-content -->
            </article>
            <!-- #post-## -->
        </div>
        <section class="error_codes">
            <h3>Коды ошибок стиральных машин AEG</h3>
            <ul>
                <li><strong>«</strong><strong>Е00</strong><strong>»</strong><strong> — </strong>Отсутствует Ошибка</li>
                <li><strong>«Е11</strong><strong>»</strong><strong> — </strong>Отсутствует залив воды в барабан во время цикла стирки. (время, отведенное на залив воды, истекло, а нужное количество воды не поступило)</li>
                <li><strong>«Е12» — </strong>Неисправность системы слива воды (откачка воды длится более 1,5 минуты) Затруднен залив воды в стиральную машинку во время режима сушки</li>
                <li><strong>«Е13» —</strong> Утечка воды из стиральной машинки</li>
                <li><strong>«</strong><strong>Е21</strong><strong>»</strong><strong> — </strong>Затруднен слив воды в стиральной машине (в течение 10 минут вода не была слита из бака)</li>
                <li><strong>«Е22</strong><strong>»</strong><strong> — </strong>Затруднен слив воды в стиральной машине (насос не откачивает воду на цикле сушка)</li>
                <li><strong>«Е23» — </strong>Имеет место неисправность симистора водооткачивающего насоса.</li>
                <li><strong>«Е24» — </strong>Возникла неисправность схемы считывания
                    <br> симистора водооткачивающего насоса (имеет место неверное напряжение на входе микропроцессора)</li>
                <li><strong>«Е31» — </strong>Возникла неисправность схемы электронного прессостата (частота его сигнала выходит за границы допустимого диапазона)</li>
                <li><strong>«Е32» — </strong>Имеет место ошибка калибровки электронного прессостата&nbsp; (в ходе слива электронный прессостат выдает сигнал с нестабильной частотой)</li>
                <li><strong>«Е33» — </strong>Возникла несогласованность работы датчиков уровня воды (датчика защиты ТЭНа от включения последнего без воды и датчика первого уровня)</li>
                <li><strong>«</strong><strong>Е34</strong><strong>»</strong><strong> — </strong>Имеет место несоответствие между прессостатом и уровнем антикипения (ошибка существует более 60 секунд)</li>
                <li><strong>«Е35</strong><strong>»</strong><strong> — </strong>Возник перелив воды в баке стиральной машинки.</li>
                <li><strong>«Е36» — </strong>Неисправность датчика уровня защиты ТЭНа (АВ S)</li>
                <li><strong>«Е37» — </strong>Неисправен датчик первого уровня воды (L1 S)</li>
                <li><strong>«</strong><strong>Е38</strong><strong>»</strong><strong> — </strong>Закупорка приёмника давления в прессостате (уровень воды в баке не изменяется при вращении барабана СМА по меньшей мере 30 сек.)</li>
                <li><strong>«Е39</strong><strong>»</strong><strong> — </strong>Неисправный датчик уровня перелива воды в баке (HV1 S)</li>
                <li><strong>«Е41» — </strong>Дверь люка дверцы не закрыта</li>
                <li><strong>«Е42» —</strong> Проблема в закрывании двери</li>
                <li><strong>«</strong><strong>Е43</strong><strong>»</strong><strong> — </strong>Неисправность симистора питания задерживающего устройства дверцы люка</li>
                <li><strong>«Е44</strong><strong>»</strong><strong> — </strong>Нарушение процесса считывания блокировки двери СМА</li>
                <li><strong>«Е45» — </strong>Нарушение процесса считывания блокировки двери (напряжение на входе микропроцессора не соответствует исходным данным)</li>
                <li><strong>«Е51» — </strong>Неисправность цепи управления приводным мотором</li>
                <li><strong>«Е52» — </strong>Имеет место отсутствие сигнала тахогенератора двигателя СМА (сигнал не поступает на контроллер)</li>
                <li><strong>«Е53» — </strong>Неисправность цепи управления симистора приводного мотора</li>
                <li><strong>«Е54» — </strong>Неисправность контактных групп реле реверса приводного мотора</li>
                <li><strong>«</strong><strong>Е55</strong><strong>»</strong><strong> — </strong>Неисправность цепи двигателя</li>
                <li><strong>«Е56</strong><strong>»</strong><strong> — </strong>Нет сигнала с тахометрического генератора (сигнал не поступает в течение 15 минут)</li>
                <li><strong>«Е57» — </strong>Запрошенный с инвертора ток имеет показания больше 15A</li>
                <li><strong>«Е58» — </strong>Запрошенный с инвертора ток имеет показания больше 4,5A, но меньше 15A</li>
                <li><strong>«Е59</strong><strong>»</strong><strong> — </strong>Тахометрический сигнал отсутствует в течение трёх секунд</li>
                <li><strong>«Е61» — </strong>Вода не нагревается до нужной температуры. Нагрев идет медленно</li>
                <li><strong>«Е62» — </strong>Имеет место перегрев воды (при этом температура нагрева
                    <br> превышает 88°C за время, большее, чем 5 мин.)</li>
                <li><strong>«</strong><strong>Е66</strong><strong>»</strong><strong> — </strong>Неисправно реле питания резистора на плате управления ТЭНа (имеет место несоответствие между считыванием и статусом реле)</li>
                <li><strong>«Е68</strong><strong>»</strong><strong> — </strong>Имеется утечка тока через ТЭН на землю (значение напряжения сети отличается от
                    <br> магистрального напряжения)</li>
                <li><strong>«Е69» — </strong>Резистор находится в нерабочем состоянии</li>
                <li><strong>«Е71» —</strong> Неисправность зонда NTC для стирки (имеется короткое замыкание внутри корпуса или самопроизвольное размыкание контактов устройства)</li>
                <li><strong>«</strong><strong>Е72</strong><strong>»</strong><strong> — </strong>Зонд NTC конденсатора сушки неисправен (значение напряжения данного устройства выходит за пределы значений при размыкании контактов)</li>
                <li><strong>«Е73</strong><strong>»</strong><strong> — </strong>Зонд NTC трубопровода сушки вышел из строя (величина
                    <br> напряжения в нем выходит за пределы нормальных значений)</li>
                <li><strong>«Е74» — </strong>В работе зонда NTC для стирки появились нарушения</li>
                <li><strong>«Е82» — </strong>Неверное положение ручки переключателя при запуске и перезапуске</li>
                <li><strong>«Е83» — </strong>Возникла ошибка считывания переключателя</li>
                <li><strong>«Е91» — </strong>Произошла ошибка обмена данными между основной электронной платой и платой визуализации.</li>
                <li><strong>«Е92» — </strong>Имеет место несоответствие обмена данными между основной электронной
                    <br> платой и платой визуализации (несовместимые версии)</li>
                <li><strong>«</strong><strong>Е93</strong><strong>»</strong><strong> — </strong>Возникла ошибка в конфигурации оборудования</li>
                <li><strong>«Е94</strong><strong>»</strong><strong> — </strong>Появилась ошибка конфигурации цикла стирки</li>
                <li><strong>«Е95» — </strong>Имеет место ошибка обмена данными между микропроцессором и ЭСППЗУ
                    <br> (EEPROM)
                </li>
                <li><strong>«Е96» — </strong>Ошибка в конфигурации при подключении контроллера к внешним элементам</li>
                <li><strong>«Е97» — </strong>Возникло несоответствие между выставленным режимом работы и конфигурацией цикла</li>
                <li><strong>«</strong><strong>Е98</strong><strong>»</strong><strong> — </strong>Появилась ошибка обмена данными между платой управления двигателем (основной электроникой)</li>
                <li><strong>«Е99</strong><strong>»</strong><strong> — </strong>Неправильное подсоединение входной/выходной электроники к звуковому блоку</li>
                <li><strong>«Е3</strong><strong>A</strong><strong>» — </strong>Появилась ошибка в работе реле резистора (неправильно считывает реле нагревательного элемента)</li>
                <li><strong>«Е5</strong><strong>A</strong><strong>» —</strong> Имеет место повышенная температура радиатора
                    <br> охлаждения инвертора (цикл заблокирован при закрытой двери)</li>
                <li><strong>«</strong><strong>Е5</strong><strong>B</strong><strong>»</strong><strong> — </strong>Напряжение на входе инвертора упало ниже 175 В</li>
                <li><strong>«Е5</strong><strong>C</strong><strong>»</strong><strong> — </strong>Слишком высокое напряжение на входе платы инвертора (больше 430 В)</li>
                <li><strong>«Е5</strong><strong>D</strong><strong>» — </strong>Возникла ошибка обмена данными между инвертором и основной платой (FCV не может принять и/или послать сообщение в течение 2 с)</li>
                <li><strong>«Е5</strong><strong>E</strong><strong>» — </strong>Возникла ошибка обмена данными между основной платой и инвертором</li>
                <li><strong>«Е5</strong><strong>F</strong><strong>» — </strong>Двигатель не запускается с платы инвертора (плата управления FCV непрерывно запрашивает параметры конфигурации)</li>
                <li><strong>«Е9</strong><strong>A</strong><strong>» — </strong>Проблемы в программном обеспечении между динамиком и входной/выходной электроникой</li>
                <li><strong>«Е9</strong><strong>B</strong><strong>» — </strong>Возникла ошибка обмена данными между микропроцессором и флэш-памятью платы</li>
                <li><strong>«</strong><strong>Е9</strong><strong>D</strong><strong>»</strong><strong> — </strong>Появилась неисправность в работе внутренних часов СМА</li>
                <li><strong>«Е9</strong><strong>F</strong><strong>»</strong><strong> — </strong>Произошла ошибка обмена данными между основной платой и платой инвертора СМА</li>
                <li><strong>«Е</strong><strong>A</strong><strong>1» — </strong>Имеет место неправильное позиционирование барабана (DSP)</li>
                <li><strong>«Е</strong><strong>A</strong><strong>2» — </strong>Ошибка опознавания в системе DSP</li>
                <li><strong>«</strong><strong>Е</strong><strong>A3</strong><strong>»</strong><strong> — </strong>DSP не фиксирует шкив двигателя</li>
                <li><strong>«</strong><strong>Е</strong><strong>A4</strong><strong>»</strong><strong> — </strong>Имеет место неисправность DSP</li>
                <li><strong>«Е</strong><strong>A5</strong><strong>»</strong><strong> — </strong>Неисправный тиристор DSP</li>
                <li><strong>«Е</strong><strong>A</strong><strong>6» — </strong>Неисправность DSP открывания двери</li>
                <li><strong>«Е</strong><strong>B</strong><strong>1» —</strong> Несоответствие частоты питающей сети допустимым значениям</li>
                <li><strong>«</strong><strong>C0</strong><strong>»</strong><strong> — </strong>Ошибка в системе залива воды</li>
                <li><strong>«</strong><strong>C1</strong><strong>»</strong><strong> — </strong>Не проходит залив воды</li>
                <li><strong>«C2» — </strong>Не происходит блокировка люка</li>
                <li><strong>«</strong><strong>C</strong><strong>3» — </strong>Ошибка в системе откачки воды</li>
                <li><strong>«</strong><strong>C</strong><strong>4» — </strong>Проблемы с откачкой воды (слив идет медленно)</li>
                <li><strong>«</strong><strong>C</strong><strong>5» — </strong>Имеет место перегрев датчика главного двигателя</li>
                <li><strong>«</strong><strong>C</strong><strong>6» — </strong>Проблемы в системе закачки воды (вода не наполняет бак до нужного уровня).</li>
                <li><strong>«</strong><strong>C7</strong><strong>»</strong><strong> — </strong>Не идет нагрев воды до нужной температуры</li>
                <li><strong>«</strong><strong>C</strong><strong>8» — </strong>Не идет нагрев воды до нужной температуры</li>
                <li><strong>«</strong><strong>C</strong><strong>9» — </strong>Двигатель не развивает нужных оборотов вращения</li>
                <li><strong>«</strong><strong>CF</strong><strong>» — </strong>Система не получает сигнал на начало работы</li>
                <li><strong>«</strong><strong>CD</strong><strong>»</strong><strong> — </strong>Система не получает сигнал на начало работы (не закрыта дверца люка)</li>
            </ul>
            <p>&nbsp;</p>
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
        <section class="instr-ekspl">
            <h3>Инструкции по эксплуатации стиральных машин AEG</h3>
            <ul>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg___214_KO_LAVAMA_45000.pdf" target="_blank">ÖKO-LAVAMA 45000</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg___214_KO_LAVAMAT__LAVALOGIC_1400_update.pdf" target="_blank" rel="">ÖKO-LAVAMAT LAVALOGIC 1400 update</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg___214_KO_LAVAMAT__LAVALOGIC_1600_update.pdf" target="_blank" rel="">AEG ÖKO-LAVAMAT LAVALOGIC 1600 UPDATE</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg___214_KO_LAVAMAT__LAVALOGIC_1800_update.pdf" target="_blank" rel="">AEG ÖKO-LAVAMAT LAVALOGIC 1800 UPDATE</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg___214_KO_LAVAMAT_1251_VI_ELECTRONIC.pdf" target="_blank" rel="">AEG ÖKO-LAVAMAT 1251 VI ELECTRONIC</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg___214_KO_LAVAMAT_1271_VI_ELECTRONIC.pdf" target="_blank" rel="">AEG ÖKO-LAVAMAT 1271 VI ELECTRONIC</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg___214_KO_LAVAMAT_1271_VI_TURBO_ELECTRONIC.pdf" target="_blank" rel="">AEG ÖKO-LAVAMAT 1271 VI TURBO ELECTRONIC</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg___214_KO_LAVAMAT_1451_VI_ELECTRONIC.pdf" target="_blank" rel="">AEG ÖKO-LAVAMAT 1451 VI ELECTRONIC</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg___214_KO_LAVAMAT_70530_update.pdf" target="_blank" rel="">AEG ÖKO-LAVAMAT 70530 UPDATE</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg___214_KO_LAVAMAT_70560_update.pdf" target="_blank" rel="">AEG ÖKO-LAVAMAT 70560 UPDATE</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg___214_KO_LAVAMAT_72620_update.pdf" target="_blank" rel="">AEG ÖKO-LAVAMAT 72620 UPDATE</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg___214_KO_LAVAMAT_74730_update.pdf" target="_blank" rel="">AEG ÖKO-LAVAMAT 74730 UPDATE</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg___214_KO_LAVAMAT_Jubi_Line_15_50_update.pdf" target="_blank" rel="">AEG ÖKO-LAVAMAT JUBI-LINE 15.50 UPDATE</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_47080.pdf" target="_blank" rel="">AEG L 47080</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_47280.pdf" target="_blank" rel="">AEG L 47280</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_47370.pdf" target="_blank" rel="">AEG L 47370</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_48580.pdf" target="_blank" rel="">AEG L 48580</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_52600.pdf" target="_blank" rel="">AEG L 52600</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_54600.pdf" target="_blank" rel="">AEG L 54600</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_60260_SL-1.pdf" target="_blank" rel="">AEG L 56006 SL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_57126_SL.pdf" target="_blank" rel="">AEG L 57126 SL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_58527_XFL.pdf" target="_blank" rel="">AEG L 58527 XFL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_58547_SL.pdf" target="_blank" rel="">AEG L 58547 SL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_58848_FL.pdf" target="_blank" rel="">AEG L 58848 FL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_59869_FL.pdf" target="_blank" rel="">AEG L 59869 FL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_60060_TLE1.pdf" target="_blank" rel="">AEG L 60060 TLE1</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_60260_SL-1.pdf" target="_blank" rel="">AEG L 60260 SL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_60260_TLE1.pdf" target="_blank" rel="">AEG L 60260 TLE1</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_60270_FL.pdf" target="_blank" rel="">AEG L 60270 FL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_60800.pdf" target="_blank" rel="">AEG L 60800</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_61060_TLE.pdf" target="_blank" rel="">AEG L 61060 TLE</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_61260_TLE.pdf" target="_blank" rel="">AEG L 61260 TLE</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_61470_WDBI.pdf" target="_blank" rel="">AEG L 61470 WDBI</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_62800.pdf" target="_blank" rel="">AEG L 62800</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_70260_TLE1.pdf" target="_blank" rel="">AEG L 70260 TLE1</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_70270_VFL.pdf" target="_blank" rel="">AEG L 70270 VFL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_71060_SL.pdf" target="_blank" rel="">AEG L 71060 SL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_71260_SL.pdf" target="_blank" rel="">AEG L 71260 SL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_74270_TL.pdf" target="_blank" rel="">AEG L 74270 TL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_74270_TLE.pdf" target="_blank" rel="">AEG L 74270 TLE</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_75260_TL1.pdf" target="_blank" rel="">AEG L 75260 TL1</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_75260_TLE1.pdf" target="_blank" rel="">AEG L 75260 TLE1</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_75274_ESL.pdf" target="_blank" rel="">AEG L 75274 ESL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_75280_FL.pdf" target="_blank" rel="">AEG L 75280 FL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_75484_EFL.pdf" target="_blank" rel="">AEG L 75484 EFL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_85275_XFL.pdf" target="_blank" rel="">AEG L 85275 XFL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_85470_SL.pdf" target="_blank" rel="">AEG L 85470 SL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_87680_FL.pdf" target="_blank" rel="">AEG L 87680 FL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_87695_WD.pdf" target="_blank" rel="">AEG L 87695 WD</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_L_98699_FL.pdf" target="_blank" rel="">AEG L 98699 FL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAV_15_50.pdf" target="_blank" rel="">AEG LAV 15.50</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAV_41380.pdf" target="_blank" rel="">AEG LAV 41380</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAV_45000.pdf" target="_blank" rel="">AEG LAV 45000</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAV_47280.pdf" target="_blank" rel="">AEG LAV 47280</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAV_48580.pdf" target="_blank" rel="">AEG LAV 48580</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAV_52600.pdf" target="_blank" rel="">AEG LAV 52600</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAV_54600.pdf" target="_blank" rel="">AEG LAV 54600</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAV_60800.pdf" target="_blank" rel="">AEG LAV 60800</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAV_62800.pdf" target="_blank" rel="">AEG LAV 62800</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAV_70230_W.pdf" target="_blank" rel="">AEG LAV 70230-W</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAV_70360.pdf" target="_blank" rel="">AEG LAV 70360</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAV_72628_W.pdf" target="_blank" rel="">AEG LAV 72628-W</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAV_BELLA_W.pdf" target="_blank" rel="">AEG LAV BELLA-W</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVALOGIC_1400.pdf" target="_blank" rel="">AEG LAVALOGIC 1400</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVALOGIC_1410.pdf" target="_blank" rel="">AEG LAVALOGIC 1410</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVALOGIC_1600.pdf" target="_blank" rel="">AEG LAVALOGIC 1600</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVALOGIC_1800.pdf" target="_blank" rel="">AEG LAVALOGIC 1800</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVALOGIC_1810.pdf" target="_blank" rel="">AEG LAVALOGIC 1810</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT__LAVALOGIC_1410.pdf" target="_blank" rel="">AEG LAVAMAT LAVALOGIC 1410</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT__LAVALOGIC_1800.pdf" target="_blank" rel="">AEG LAVAMAT LAVALOGIC 1800</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_1249.pdf" target="_blank" rel="">AEG LAVAMAT 1249</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_12843_VIT.pdf" target="_blank" rel="">AEG LAVAMAT 12843 VIT</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_14950A.pdf" target="_blank" rel="">AEG LAVAMAT 14950A</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_41070_UPDATE.pdf" target="_blank" rel="">AEG LAVAMAT 41070 UPDATE</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_41380_UPDATE.pdf" target="_blank" rel="">AEG LAVAMAT 41380 UPDATE</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_47080_aqua_alarm.pdf" target="_blank" rel="">AEG LAVAMAT 47080 AQUA ALARM</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_47280_aqua_alarm.pdf" target="_blank" rel="">AEG LAVAMAT 47280 AQUA ALARM</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_47330.pdf" target="_blank" rel="">AEG LAVAMAT 47330</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_47370.pdf" target="_blank" rel="">AEG LAVAMAT 47370</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_48380.pdf" target="_blank" rel="">AEG LAVAMAT 48380</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_48540.pdf" target="_blank" rel="">AEG LAVAMAT 48540</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_48580-1.pdf" target="_blank" rel="">AEG LAVAMAT 48580</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_48580_aqua_control.pdf" target="_blank" rel="">AEG LAVAMAT 48580 AQUA CONTROL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_52600.pdf" target="_blank" rel="">AEG LAVAMAT 52600</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_54600.pdf" target="_blank" rel="">AEG LAVAMAT 54600</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_60260TL.pdf" target="_blank" rel="">AEG LAVAMAT 60260TL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_60800.pdf" target="_blank" rel="">AEG LAVAMAT 60800</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_60840L.pdf" target="_blank" rel="">AEG LAVAMAT 60840L</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_61470_WDBI.pdf" target="_blank" rel="">AEG LAVAMAT 61470 WDBI</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_62800.pdf" target="_blank" rel="">AEG LAVAMAT 62800</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_62840L.pdf" target="_blank" rel="">AEG LAVAMAT 62840L</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_64840L.pdf" target="_blank" rel="">AEG LAVAMAT 64840L</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_70260TL.pdf" target="_blank" rel="">AEG LAVAMAT 70260TL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_71260SL.pdf" target="_blank" rel="">AEG LAVAMAT 71260SL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_72750.pdf" target="_blank" rel="">AEG LAVAMAT 72750</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_72850M.pdf" target="_blank" rel="">AEG LAVAMAT 72850M</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_74750.pdf" target="_blank" rel="">AEG LAVAMAT 74750</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_76850A.pdf" target="_blank" rel="">AEG LAVAMAT 76850A</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_84950A.pdf" target="_blank" rel="">AEG LAVAMAT 84950A</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_85470SL.pdf" target="_blank" rel="">AEG LAVAMAT 85470SL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_88489FL.pdf" target="_blank" rel="">AEG LAVAMAT 88489FL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_98699FL.pdf" target="_blank" rel="">AEG LAVAMAT 98699FL</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_LS_60840L.pdf" target="_blank" rel="">AEG LAVAMAT LS 60840L</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_LS_62840L.pdf" target="_blank" rel="">AEG LAVAMAT LS 62840L</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_LS_70840.pdf" target="_blank" rel="">AEG LAVAMAT LS 70840</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_LS_72840.pdf" target="_blank" rel="">AEG LAVAMAT LS 72840</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LAVAMAT_LS_84840.pdf" target="_blank" rel="">AEG LAVAMAT LS 84840</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LL_1400.pdf" target="_blank" rel="">AEG LL 1400</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LL_1800.pdf" target="_blank" rel="">AEG LL 1800</a></li>
                <li><a href="http://rem-service.by/wp-content/uploads/2016/03/Aeg_LL_1810.pdf" target="_blank" rel="">AEG LL 1810</a></li>
            </ul>
            <p>&nbsp;</p>
        </section>
        <!-- Гарантии -->
        <section class="guarantee guarantee-index">
            <div class="wrap container-fluid">
                <div class="guarantee-block">
                    <h2 class="h2-style">Гарантийная и постгарантийная поддержка</h2>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="guarantee-img">
                                <img class="img-responsive" src="./Ремонт стиральных машин_files/guarantee-img.jpg" alt="">
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
                    <script>
                    jQuery(document).ready(function() {
                        var ap35 = new APlayer({
                            element: document.getElementById('player35'),
                            narrow: false,
                            autoplay: false,
                            showlrc: false,
                            theme: '#e6d0b2',
                            music: {
                                title: 'Мастер отлично справился',
                                author: 'Владимир Петухов',
                                url: 'http://rem-service.by/wp-content/uploads/2016/02/vladimir-electrolux.mp3'
                            }
                        });
                        ap35.init();
                    });
                    </script>
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
                    <script>
                    jQuery(document).ready(function() {
                        var ap31 = new APlayer({
                            element: document.getElementById('player31'),
                            narrow: false,
                            autoplay: false,
                            showlrc: false,
                            theme: '#e6d0b2',
                            music: {
                                title: 'ремонт',
                                author: 'Татьяна Вершаль',
                                url: 'http://rem-service.by/wp-content/uploads/2016/02/tatjana-lg.mp3'
                            }
                        });
                        ap31.init();
                    });
                    </script>
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
        <!-- Выводим другие бренды -->
        <h2 class="h2-style">Другие бренды, которые мы ремонтируем</h2>
        <div class="brandlist">
            <a href="http://rem-service.by/remont-stiralnyh-mashin-aeg/"><img width="124" height="88" src="./Ремонт стиральных машин_files/aeg.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="aeg" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-ardo/"><img width="124" height="88" src="./Ремонт стиральных машин_files/ardo.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="ardo" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-ariston/"><img width="124" height="88" src="./Ремонт стиральных машин_files/aris.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="aris" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-asko/"><img width="123" height="88" src="./Ремонт стиральных машин_files/asko.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="asko" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-bauknecht/"><img width="123" height="88" src="./Ремонт стиральных машин_files/baukneht.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="baukneht" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-beko/"><img width="123" height="88" src="./Ремонт стиральных машин_files/beko.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="beko" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-bosch/"><img width="124" height="88" src="./Ремонт стиральных машин_files/bosche.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="bosche" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-brandt/"><img width="124" height="88" src="./Ремонт стиральных машин_files/brend.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="brend" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-candy/"><img width="124" height="88" src="./Ремонт стиральных машин_files/candy.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="candy" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-daewoo/"><img width="124" height="88" src="./Ремонт стиральных машин_files/deo.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="deo" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-electrolux/"><img width="124" height="88" src="./Ремонт стиральных машин_files/elec.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="elec" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-euronova/"><img width="124" height="88" src="./Ремонт стиральных машин_files/evronova.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="evronova" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-general-electric/"><img width="123" height="88" src="./Ремонт стиральных машин_files/GE.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="GE" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-gorenje/"><img width="123" height="88" src="./Ремонт стиральных машин_files/gorenje.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="gorenje" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-hansa/"><img width="123" height="88" src="./Ремонт стиральных машин_files/hansa.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="hansa" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-indesit/"><img width="124" height="88" src="./Ремонт стиральных машин_files/indezit.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="indezit" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-kaiser/"><img width="124" height="88" src="./Ремонт стиральных машин_files/kayzer.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="kayzer" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-lg/"><img width="124" height="88" src="./Ремонт стиральных машин_files/lg.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="lg" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-miele/"><img width="124" height="89" src="./Ремонт стиральных машин_files/mielj.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="mielj" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-otsein/"><img width="124" height="89" src="./Ремонт стиральных машин_files/oytsen.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="oytsen" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-philco/"><img width="124" height="89" src="./Ремонт стиральных машин_files/philko.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="philko" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-privileg/"><img width="123" height="89" src="./Ремонт стиральных машин_files/priv.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="priv" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-rosieres/"><img width="123" height="89" src="./Ремонт стиральных машин_files/ros.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="ros" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-samsung/"><img width="123" height="89" src="./Ремонт стиральных машин_files/samsung.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="samsung" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-siemens/"><img width="124" height="89" src="./Ремонт стиральных машин_files/simens.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="simens" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-thomson/"><img width="124" height="89" src="./Ремонт стиральных машин_files/tompson.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="tompson" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-whirlpool/"><img width="124" height="89" src="./Ремонт стиральных машин_files/wir.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="wir" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-zanussi/"><img width="124" height="89" src="./Ремонт стиральных машин_files/zan.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="zan" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
            <a href="http://rem-service.by/remont-stiralnyh-mashin-atlant/"><img width="124" height="88" src="./Ремонт стиральных машин_files/atlant.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="atlant" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px"></a>
        </div>
        <!-- ------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------ -->
    </div>
    <?php get_footer(); ?>
