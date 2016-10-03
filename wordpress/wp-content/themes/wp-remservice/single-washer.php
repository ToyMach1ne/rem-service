<?php get_header(); ?>
  <div class="wrap container-fluid">
<section class="services">
      <div class="wrap comment-wrap container-fluid">
        <div class="row for-sidebar">
          <?php get_sidebar(); ?>
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
      <span class="description-tb">*Итоговая стоимость ремонта зависит от трудоемкости работ и стоимости запасных частей.</span>
    </div>
  </div>
  </div>
  </section>
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
        <div class="text-content">

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
                    <?php echo do_shortcode('[contact-form-7 id="542" title="Без названия"]'); ?>
                        <div class="tel-form">
                            <span>Или звоните:</span> +375(29) 105-28-09 (вел), +375 (33) 684-68-44 (мтс)
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="instr-ekspl">
            <h3>Инструкции по эксплуатации стиральных машин <?php the_title(); ?></h3>
            <ul>
                <?php if( have_rows('instruction') ): while ( have_rows('instruction') ) : the_row(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>" target="_blank">
                        <?php the_sub_field('ins_name'); ?>
                    </a>
                </li>
                <?php endwhile; endif; ?>
            </ul>
            <p>&nbsp;</p>
        </section>
        <!-- Гарантии -->
        <section class="guarantee guarantee-index">
            <div class="wrap container-fluid">
    <?php if( have_rows('support_mark' , '36') ):
    while ( have_rows('support_mark' , '36') ) : the_row();
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
