<?php 
/* Template Name: Contact */ 
get_header();  ?>

<main>
    <section class="box-contact contact-cate">
        <div class="container">
            <div class="content-contact">
                <div class="row">
                    <div class="col-md-5">
                        <div class="txt-contact">
                            <div class="title-contact">
                                <h4><?php the_field('title_form') ?></h4>
                                <?php the_field('sapo') ?>
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
    <section class="box-maps">
        <?php the_field('iframe_maps') ?>
    </section>
</main>

<?php get_footer(); 