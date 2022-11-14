<?php 
/* Template Name: Kot */ 
get_header();  ?>

<main>
    <section class="box-banner-cate">
        <div class="container">
            <div class="caption-banner text-center">
                <h1><?php the_field('title_banner') ?></h1>
                <div class="search-banner">
                    <div class="icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/search.png" class="img-fluid" alt=""></div>
                    <input type="text" placeholder="Ga opzoek naar een kot in de regio van jouw studieplaats...." class="txt_search">
                    <button type="submit"><span>Zoek</span><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-light.png" class="img-fluid" alt=""></button>
                </div>
            </div>
        </div>
    </section>
    <section class="box-kot">
        <div class="project">
                <div class="container"> 
                    <div class="list-project"> 
                        <div class="row">
                            <?php 
                                $args=array(
                                    'post_type' => 'vind_een_kot',
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
                                        <div class="item-project">
                                            <div class="avarta">
                                                <a href="<?php echo get_the_permalink() ?>" target="_blank"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt="<?php echo get_the_title(); ?>"></a>
                                            </div>
                                            <div class="info">
                                                <div class="btn-view text-center"><a href="<?php echo get_the_permalink() ?>" target="_blank"><span>Check it out!</span><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-right.png" class="img-fluid" alt=""></a></div>
                                                <h3><a href="<?php echo get_the_permalink() ?>" ><?php echo get_the_title(); ?></a></h3>
                                                <p><?php the_field('lange_pennincstraat') ?></p>
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
    <section class="box-maps-kot">
        <?php the_field('iframe_maps') ?>
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