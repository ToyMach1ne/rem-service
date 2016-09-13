<?php /* Template Name: Home Page */ get_header(); ?>
    <div class="services-block wrap container-fluid wrap_breadcrumbs">
    </div>
    <section class="services">
        <div class="services-block wrap container-fluid">
            <div class="row">
                <?php get_sidebar(); ?>
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
                <div class="wrap container-fluid">\
                                <?php if( have_rows('comment', '36') ):
    while ( have_rows('comment', '36') ) : the_row(); ?>
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
