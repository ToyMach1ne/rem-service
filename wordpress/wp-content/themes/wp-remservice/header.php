<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <a name="top"></a>
  <header class="header">
    <div class="hed-top">
      <div class="data-block wrap container-fluid">
        <div class="row">
          <?php query_posts('page_id=53'); if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            <div class="col-lg-6">
              <figure class="logo">
                <a href="<?php echo home_url(); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                </a>
              </figure>
              <div class="txt-logo">
                <div class="site-url"><?php the_field('site_name'); ?></div>
                <span class="txt-logo-in">
                  <?php the_field('under_text'); ?>
                </span>
                <span class="txt-logo-int"><?php the_field('second_text'); ?></span>
              </div>
            </div>

            <div class="col-lg-3 col-lg-rs-in button-call">
              <div class="wrap-button">
                <button class="main-modal-submit" data-form="form-1">ЗАКАЗАТЬ ЗВОНОК</button>
              </div>
            </div>

            <div class="col-lg-3 col-lg-rs">
              <div class="block-tel">
                <span><?php the_field('first_telephone'); ?></span>
                <span><?php the_field('second_telephone'); ?></span>
                <div class="mode"><?php the_field('work_time'); ?></div>
              </div>
            </div>
          <?php endwhile; endif; wp_reset_query(); ?>
        </div>
      </div>
    </div>

    <div class="block-forma wrap container-fluid">
      <?php query_posts('page_id=53'); if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <div class="form-top-info">
          <h1 class="zag-h1"><?php the_field('site_slogan'); ?></h1>
          <span class="span-zag"><?php the_field('under_slogan'); ?></span>
          <span class="span-zag-in"><?php the_field('second_underslogan'); ?></span>
        </div>

        <div class="wrap-form form-bg">
          <div class="application2">Оставьте заявку, мастер свяжется с вами в течение 10 минут!</div>
            <div class="wrapper-form">
              <form action="#" method="post">
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
                <input type="submit" value="Отправить заявку на ремонт">
              </form>
            </div>
          </div>
        <?php endwhile; endif; wp_reset_query(); ?>
      </div>

      <section class="block-info">
        <div class="wrap container-fluid">
          <?php query_posts('page_id=53'); if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            <div class="row">
              <?php if( have_rows('our_committers') ): while ( have_rows('our_committers') ) : the_row(); $image = get_sub_field('repeater_image');?>
                <div class="col-lg-3">
                  <div class="wrapper-bl">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                    <span class="title-bl"><?php the_sub_field('committer_title'); ?></span>
                    <p><?php the_sub_field('committers_description'); ?></p>
                  </div>
                </div>
              <?php endwhile; endif; ?>
            </div>
          <?php endwhile; endif; wp_reset_query(); ?>
        </div>
      </section>
    </header>
