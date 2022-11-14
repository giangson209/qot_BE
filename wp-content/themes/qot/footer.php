<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package qot
 */

?>

<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="logo"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/logo-blue.png" class="img-fluid" alt=""></a></div>
                </div>
                <div class="col-md-8">
                    <div class="fter-menu">
                        <ul>
                            <li><a href="">Concept</a></li>
                            <li><a href="">Vind een kot</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="" class="active">Contact</a></li>
                            <li><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/bar.png" class="img-fluid" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="fter-bot">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="left">Algemene voorwaarde  -  © Qot 2022</div>
                </div>
                <div class="col-md-6">
                    <div class="social">
                        <ul>
                            <li><a href="" target="_blank">Facebook</a></li>
                            <li><a href="" target="_blank">Instagram</a></li>
                            <li><a href="" target="_blank">Twitter</a></li>
                            <li><a href="" target="_blank">Tiktok</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/js/lib/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/js/lib/slick.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/js/aos.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/js/private.js"></script>
<?php wp_footer(); ?>

</body>
</html>
