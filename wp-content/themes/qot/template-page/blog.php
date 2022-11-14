<?php 
/* Template Name: Blog */ 
get_header();  ?>

<main>
    <section class="box-banner-cate banner-blog">
        <div class="container">
            <div class="caption-banner text-center">
                <h1 class="txt-concept">
                    <p>De laatste nieuwe <span>roddels</span></p>
                    <p>van ons bruisend <span style="color: #b9dfec">Qotleven.</span></p>
                </h1>
            </div>
        </div>
    </section>
    <section class="box-blog"> 
        <div class="content-blog">
            <div class="avr-abs"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/bn-concept.png" class="img-fluid w-100" alt=""></div>
            <div class="container">
                <div class="list-blog">
                    <div class="row">
                        <?php 
                            $args=array(
                                'post_type' => 'post',
                                'orderby'   => 'publish_date',
                                'order'     => 'DESC',
                                'posts_per_page' => "",
                            );
                            $my_query = new wp_query($args);
                        ?>
                        <?php $i = 0; ?>

                        <?php if ( $my_query->have_posts() ): ?>
                            <?php while ($my_query->have_posts()):$my_query->the_post(); ?>
                                <div class="col-md-4">
                                    <div class="item-blog">
                                        <div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt="<?php echo get_the_title(); ?>"></a></div>
                                        <div class="info">
                                            <h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
                                            <div class="desc">
                                                <?php the_excerpt() ?>
                                            </div>
                                            <div class="view-link"><a href="<?php echo get_the_permalink() ?>"><span>Lees verder</span><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-light.png" class="img-fluid" alt="<?php echo get_the_title(); ?>"></a></div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile ?>
                        <?php endif;wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-contact">
        <div class="container">
            <div class="content-contact">
                <div class="row">
                    <div class="col-md-5">
                        <div class="txt-contact">
                            <div class="title-contact">
                                <h4><?php the_field('title_contact','option') ?></h4>
                                <?php the_field('description','option') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <?php echo do_shortcode('[contact-form-7 id="61" title="contact form"]'); ?>
                    </div>
                </div>
            </div> 
        </div>
    </section>
</main>

<?php get_footer(); 