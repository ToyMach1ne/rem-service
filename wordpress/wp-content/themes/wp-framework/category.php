<?php /* Template Name: Page Advice */ get_header(); ?>
    <section class="services pad30">
        <div class="services-block wrap container-fluid">
            <div class="row">
                <?php get_sidebar(); ?>
                <div class="col-lg-9 cont-block">
                    <div class="wrap container-fluid wrap_breadcrumbs">
                        <div class="breadcrumbs"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?php echo home_url(); ?>" itemprop="url"><span itemprop="title">Главная</span></a>
                            </span> <span class="sep">›</span> <span class="current">Полезные советы</span></div>
                        <!-- .breadcrumbs -->
                    </div>
                    <h1>Полезные советы от профессионалов</h1>
<?php query_posts("order=ASC&showposts=50&cat=13"); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="post-prew">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="cont-prew">
                            <p style="text-align: justify;"><?php the_excerpt(); ?></p>
                            <p style="text-align: justify;">
                            </p>
                        </div>
                        <div class="readmore"><a rel="nofollow" href="<?php the_permalink(); ?>">Читать далее »</a></div>
                    </div>
                      <?php endwhile; endif; ?>
                       <?php wp_reset_query(); ?>
                    <div class="wp-pagenavi">
                        <span class="pages">Страница 1 из 2</span><span class="current">1</span><a class="page larger" href="http://rem-service.by/category/poleznye-sovety/page/2/">2</a><a class="nextpostslink" rel="next" href="http://rem-service.by/category/poleznye-sovety/page/2/">»</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
