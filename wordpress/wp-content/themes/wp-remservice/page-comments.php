<?php /* Template Name: Page Comments */ get_header(); ?>

  <noindex>

    <section class="services">
      <div class="wrap comment-wrap container-fluid">
        <div class="row for-sidebar">
          <?php get_sidebar(); ?>
        <div class="col-lg-9 border-right">
        <h2 class="h2-style"><span>Отзывы</span></h2>
        <?php if( have_rows('comment') ): while ( have_rows('comment') ) : the_row(); ?>
          <div class="wrap container-fluid">
            <div class="client-block-content">
              <span class="client-title"><?php the_sub_field('name_title'); ?></span>
              <p><?php the_sub_field('content'); ?></p>
              <div id="player4023" class="aplayer"></div>
              <div class="info-name">
                <strong>Выполненная работа: </strong><?php the_sub_field('job_done'); ?>
                <br><strong>Марка:</strong> <?php the_sub_field('brand'); ?>
              </div>
            </div>
          </div>
        <?php endwhile; endif; ?>
        </div>
       </div>
      </div>
    </section>
  </noindex>

  <?php get_footer(); ?>
