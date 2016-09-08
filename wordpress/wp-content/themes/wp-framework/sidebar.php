<div class="col-lg-3">
                    <h2 class="h2-style">Ремонтируем стиральные машины</h2>
                    <div class="row wrap-img">
                        <ul>
                        <?php query_posts("order=ASC&showposts=50&cat=12"); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php endwhile; endif; ?>
                                <?php wp_reset_query(); ?>
                        </ul>
                    </div>
                    <h2 class="h2-style">Устраняем проблемы</h2>
                    <div class="row wrap-img">
                        <ul>
                        <?php query_posts("order=ASC&showposts=50&cat=11"); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php endwhile; endif; ?>
                                <?php wp_reset_query(); ?>
                        </ul>
                    </div>
                    <h2 class="h2-style">Ремонт и замена</h2>
                    <div class="row wrap-img">
                        <ul>
                        <?php query_posts("order=ASC&showposts=50&cat=10"); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php endwhile; endif; ?>
                                <?php wp_reset_query(); ?>
                        </ul>
                    </div>
                </div>
