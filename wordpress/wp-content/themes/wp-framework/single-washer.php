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
                    <?php query_posts("order=ASC&showposts=50&cat=11"); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php endwhile; endif; ?>
                                <?php wp_reset_query(); ?>
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
      Ремонт стиральных машин <?php the_title(); ?>  </h1>
                </header>
                <!-- .entry-header -->
                <div class="entry-content">
                    <p><?php the_content(); ?></p>
                </div>
                <!-- .entry-content -->
            </article>
            <!-- #post-## -->
        </div>
        <section class="error_codes">
            <h3>Коды ошибок стиральных машин <?php the_title(); ?></h3>
            <ul>
            <?php if( have_rows('eroor_code') ):
    while ( have_rows('eroor_code') ) : the_row(); ?>
                <li><strong><?php the_sub_field('number'); ?></strong>
                <?php the_sub_field('desc'); ?></li>
              <?php endwhile; else :
                // no rows found
                 endif; ?>
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
    <?php if( have_rows('support_mark') ):
    while ( have_rows('support_mark') ) : the_row();
    // vars
    $image = get_sub_field('image');?>
      <div class="guarantee-block">
        <h2 class="h2-style"><?php the_sub_field('title'); ?></h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="guarantee-img">
               <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
            </div>
          </div>
          <div class="col-lg-8">
            <p>
              <?php the_sub_field('text'); ?>
            </p>
          </div>
        </div>
      </div>
      <?php endwhile; else :
                // no rows found
                 endif; ?>
    </div>
        </section>
        <noindex>
            <section class="clients">
                <h2 class="h2-style">Отзывы наших клиентов</h2>
                <div class="wrap-clients">
                    <div class="wrap container-fluid">
                                    <?php if( have_rows('comment') ):
    while ( have_rows('comment') ) : the_row(); ?>
                        <div class="client-block-content">
                            <span class="client-title"><?php the_sub_field('name_title'); ?></span>
                            <p><?php the_sub_field('content'); ?></p>
                            <div id="player4023" class="aplayer"></div>
                            <div class="info-name">
                                <strong>Выполненная работа: </strong><?php the_sub_field('job_done'); ?>
                                <br><strong>Марка:</strong> <?php the_sub_field('brand'); ?></div>
                        </div>
                        <?php endwhile; else :
                // no rows found
                 endif; ?>
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
        <?php query_posts("order=ASC&showposts=50&cat=12"); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'style=width=124;height:88;'); ?>

            </a>
            <?php endwhile; endif; ?>
                                <?php wp_reset_query(); ?>
        </div>
    </div>
    <?php get_footer(); ?>
