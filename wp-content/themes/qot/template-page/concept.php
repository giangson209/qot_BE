<?php 
/* Template Name: Concept */ 
get_header();  ?> 

<main>
    <section class="box-banner-cate banner-concept">
        <div class="container">
            <div class="caption-banner text-center">
                <h1 class="txt-concept">
                    <?php the_field('title_banner') ?>
                </h1>
                <div class="btn-banner">
                    <a href="<?php the_field('link_button') ?>"><span>Nog vragen ? Contacteer ons!</span> <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-right.png" class="img-fluid" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <section class="box-concept">
        <div class="content-concept">
            <div class="avr-abs"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/bn-concept.png" class="img-fluid w-100" alt=""></div>
            <div class="container">
                <div class="list-concept">
                    <?php while ( has_sub_field('box_concept') ) : ?>
                        <div class="item-concept">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="concept-left">
                                        <div class="avarta"><img src="<?php the_sub_field('avarta')['url'] ?>" class="img-fluid w-100" alt=""></div>
                                        <div class="info-caption">
                                            <h3><?php the_sub_field('title_avarta') ?></h3>
                                            <p><?php the_sub_field('info_title_avarta') ?></p>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="info">
                                        <div class="txt-concept">
                                            <?php the_sub_field('content_concept') ?>
                                        </div>
                                        <div class="btn-item">
                                            <a href=""><span>Nog vragen? Contacteer ons!</span><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-light.png" class="img-fluid" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="box-number">
        <div class="container">
            <div class="list-number">
                <div class="row">
                    <?php
                        $loop_number = 1;
                        $loop_number_1 = 1;
                    ?>
                    <?php while ( has_sub_field('list_number') ) : ?>
                        <div class="col-md-3">
                            <div class="item-numb text-center">
                                <div class="icon icon-<?php echo $loop_number++ ?>"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/numb-<?php echo $loop_number_1++ ?>.png" class="img-fluid" alt=""></div>
                                <div class="numb"><?php the_sub_field('number') ?></div>
                                <p><?php the_sub_field('title') ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="box-gall-concept">
        <div class="container">
            <div class="list-gallery">
                <div class="row">
                    <?php while ( has_sub_field('list_gallery') ) : ?>
                        <div class="col-md-4">
                            <div class="avarta"><img src="<?php echo the_sub_field('avarta')['url'] ?>" class="img-fluid w-100" alt=""></div>
                        </div>  
                    <?php endwhile; ?>
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