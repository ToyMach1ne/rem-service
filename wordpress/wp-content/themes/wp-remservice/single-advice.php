<?php get_header(); ?>
<div class="wrap container-fluid">
    <section class="services pad30">
        <div class="services-block wrap container-fluid">
            <div class="row">
                <?php get_sidebar(); ?>
                <div class="col-lg-9 cont-block">
                    <h1><?php the_title(); ?></h1>

                    <div class="cont-all">
                    <p> <?php the_content(); ?></p>
                    </div>
                    <div class="incf2">
                        <section class="block-form wrap container-fluid">
                            <div class="wrap-form wrap-form-int">
                                <div class="wrapper-form-int">
                                    <div class="application2">Нужен ремонт стиральной машины? Оставьте заявку!</div>
                                    <div class="wrapper-form">
                                        <?php echo do_shortcode('[contact-form-7 id="542" title="Без названия"]'); ?>
                                        <div class="tel-form">
                                            <span>Или звоните:</span> +375(29) 105-28-09 (вел), +375 (33) 684-68-44 (мтс)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>
