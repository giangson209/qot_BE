<?php 
/* Template Name: Home */ 
get_header();  ?>
<main>
    <section class="box-banner">
        <div class="container">
            <div class="content-banner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="txt-banner">
                            <?php echo the_field('title_banner') ?>; 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="avarta-banner">
                            <img src="<?php ehco the_field('avarta_banner')['url'] ?>" class="img-fluid" alt=""> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-about">
        <div class="bg-about"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/bg-about.jpg" class="img-fluid w-100" alt=""></div>
        <div class="top">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="avarta-about"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/about.jpg" class="img-fluid w-100" alt=""></div>
                    </div>
                    <div class="col-md-7">
                        <div class="txt-about">
                            <div class="desc">
                                Een degelijk studentenkot vinden in hartje Mechelen? Geen sinecure! Omdat iedereen een onvergetelijke studententijd verdient, helpt Qot jongeren en hun ouders aan geschikte huisvesting. Iedere dag inspireren we hen met ongeziene innovatie en betrokkenheid. Want zo kan het ook: duurzame, hoogtechnologische koten en studio’s, gebouwd met respect voor het milieu en optimale energieprestaties. Een moderne infrastructuur die je motiveert om stevig te blokken én waar je vrienden voor het leven maakt.
                            </div>
                            <div class="btn-more"><a href=""><span>Ontdek het concept</span><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-light.png" class="img-fluid" alt=""></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="item-project">
                            <div class="avarta">
                                <a href="" target="_blank"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/pr-1.png" class="img-fluid w-100" alt=""></a>

                            </div>
                            <div class="info">
                                <div class="btn-view text-center"><a href="" target="_blank"><span>Check it out!</span><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-right.png" class="img-fluid" alt=""></a></div>
                                <h3><a href="" target="_blank">Qot Mechelen I</a></h3>
                                <p>LANGE PENNINCSTRAAT 16-18</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item-project">
                            <div class="avarta">
                                <a href="" target="_blank"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/pr-1.png" class="img-fluid w-100" alt=""></a>
                            </div>
                            <div class="info">
                                <div class="btn-view text-center"><a href="" target="_blank"><span>Check it out!</span><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-right.png" class="img-fluid" alt=""></a></div>
                                <h3><a href="" target="_blank">Qot Mechelen II</a></h3>
                                <p>LANGE PENNINCSTRAAT 16-18</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item-project">
                            <div class="avarta">
                                <a href="" target="_blank"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/pr-1.png" class="img-fluid w-100" alt=""></a>
                            </div>
                            <div class="info">
                                <div class="btn-view text-center"><a href="" target="_blank"><span>Check it out!</span><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/arrow-right.png" class="img-fluid" alt=""></a></div>
                                <h3><a href="" target="_blank">Qot Mechelen III</a></h3>
                                <p>coming soon</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-number">
        <div class="container">
            <div class="list-number">
                <div class="row">
                    <div class="col-md-3">
                        <div class="item-numb text-center">
                            <div class="icon icon-1"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/numb-1.png" class="img-fluid" alt=""></div>
                            <div class="numb">46</div>
                            <p>units</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-numb text-center">
                            <div class="icon icon-2"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/numb-2.png" class="img-fluid" alt=""></div>
                            <div class="numb">2</div>
                            <p>locaties</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-numb text-center">
                            <div class="icon icon-3"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/numb-3.png" class="img-fluid" alt=""></div>
                            <div class="numb">73</div>
                            <p>studenten<p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-numb text-center">
                            <div class="icon icon-4"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/numb-4.png" class="img-fluid" alt=""></div>
                            <div class="numb">15</div>
                            <p>huisdieren</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-news">
        <div class="container">
            <div class="list-new-home">
                <div class="row">
                    <div class="col-md-4">
                        <div class="item-news-home">
                            <div class="avarta"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/new-1.png" class="img-fluid w-100" alt=""></a></div>
                            <div class="info">
                                <h3><a href="">Blog title</a></h3>
                                <div class="desc">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                </div>
                                <div class="view-link"><a href=""><span>Lees verder</span><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/view-right.png" class="img-fluid" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item-news-home">
                            <div class="avarta"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/new-2.png" class="img-fluid w-100" alt=""></a></div>
                            <div class="info">
                                <h3><a href="">Blog title</a></h3>
                                <div class="desc">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                </div>
                                <div class="view-link"><a href=""><span>Lees verder</span><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/view-right.png" class="img-fluid" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item-news-home">
                            <div class="avarta"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/new-3.png" class="img-fluid w-100" alt=""></a></div>
                            <div class="info">
                                <h3><a href="">Blog title</a></h3>
                                <div class="desc">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                </div>
                                <div class="view-link"><a href=""><span>Lees verder</span><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/view-right.png" class="img-fluid" alt=""></a></div>
                            </div>
                        </div>
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
                        <div class="frm-contact">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer(); 