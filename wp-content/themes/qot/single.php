<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package qot
 */

get_header();
?>

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
        <div class="content-blog content-blog-detail">
            <div class="avr-abs"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/bn-concept.png" class="img-fluid w-100" alt=""></div>
            <div class="container"> 
                <div class="avarta-detail text-center"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></div>
                <div class="content-detail">
                    <div class="detail">
                        <div class="top-detail">
                            <!-- <div class="date">Antwerpen - 22 Augustus 2022</div> -->
                            <div class="date"><?php echo the_author_meta( 'user_nicename', $post->post_author ); ?> - <?php echo get_the_date('d F Y'); ?></div>
                            <h1><?php the_title() ?></h1> 
                        </div>
                        <div class="info-detail">
                            <?php echo get_the_content(); ?> 
                        </div>
                        <div class="recv-blog">
                            <div class="item-btn-blog blog-left">
                                <a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/light-left.png" class="img-fluid" style="margin-right: 12px;" alt=""><span>Lees vorige blog post</span></a>
                            </div>
                            <div class="item-btn-blog blog-right">
                                <a href=""><span>Lees volgende blog post</span><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/light-right.png" class="img-fluid" style="margin-left: 12px;" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-blog">
                    <div class="row">
                    	<?php 
	                        $args=array(
	                            'post_type' => 'post',
	                            'orderby'   => 'publish_date',
	                            'order'     => 'DESC',
	                            'posts_per_page' => 3,
	                            'post__not_in' => array(get_the_ID()),
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
                                <h4><label>Heeft er <span>iemand</span></label> nog vragen?</h4>
                                <p>Niet goed opgelet?</p>
                                <p>Geen probleem. Stuur je vragen maar door</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <!-- <div class="frm-contact">
                            <div class="item-frm">
                                <input type="text" placeholder="Naam" class="txt_field">
                            </div>
                            <div class="item-frm">
                                <input type="text" placeholder="E-mailadres" class="txt_field">
                            </div>
                            <div class="item-frm">
                                <input type="text" placeholder="Bericht" class="txt_field">
                            </div>
                            <div class="item-frm text-right">
                                <div class="btn-frm">
                                    <input type="submit" value="Verzenden" class="btn_field">
                                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-right.png" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div> -->
                        <?php echo do_shortcode('[contact-form-7 id="61" title="contact form"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
