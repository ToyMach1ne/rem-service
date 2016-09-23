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
                    <td style="height: 24px;">от <?php the_field('price'); ?></td>
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
          <?php echo do_shortcode('[contact-form-7 id="542" title="Без названия"]'); ?>
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
            <p>Мастер в обязательном порядке выписывает квитанцию, в которой указывает ваши данные, марку и модель стиральной машины, выполненные работы и гарантийный срок на них. По этой квитанции вы можете обратиться за гарантийным ремонтом в любое время. Срок гарантии на выполненные работы - до 12 месяцев.</p>
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
          <?php if( have_rows('comment', '36') ): while ( have_rows('comment', '36') ) : the_row(); ?>
            <div class="client-block-content">
              <span class="client-title"><?php the_sub_field('name_title'); ?></span>
              <p><?php the_sub_field('content'); ?></p>
              <div id="player4023" class="aplayer"></div>
              <div class="info-name">
                <strong>Выполненная работа: </strong><?php the_sub_field('job_done'); ?>
                <br><strong>Марка:</strong> <?php the_sub_field('brand'); ?>
              </div>
            </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </section>
  </noindex>

  <section class="block-form wrap container-fluid">
    <div class="wrap-form wrap-form-int">
      <div class="wrapper-form-int">
        <div class="application2">Оставьте заявку, мастер свяжется с вами в течение 10 минут!</div>
        <div class="wrapper-form">
            <?php echo do_shortcode('[contact-form-7 id="542" title="Без названия"]'); ?>
          <div class="tel-form">
            <span>Или звоните:</span> +375(29) 105-28-09 (вел), +375 (33) 684-68-44 (мтс)
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>
