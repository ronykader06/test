<?php get_header(); ?>

    <section class="blog-banner">
        <div class="container">
            <div class="row">
                <div class="blog-event-logo" data-uk-scrollspy="{cls:'uk-animation-slide-top',delay:200,}">
                    <div class="col-md-8 col-md-offset-4">

                        <img src="<?php echo IMAGES; ?>/event-logo.png" alt="EventLogo">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="meetup-date" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:200,}">
                        <h2>Sessions</h2>
                    </div>
                    <!-- End of Meet up date -->
                </div>


            </div>
        </div>
    </section>
    <!--End of Header Area-->

    <!-- START OF ARTICLE AREA -->
    <article id="main-blog" class="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- START OF BLOG CONTENT -->
                    <?php
    global $post;
    $args = array(  'posts_per_page'=> 1,'post_type'=> 'post','order' => 'ASC',);
    $myposts = get_posts( $args );

     foreach( $myposts as $post ) : setup_postdata($post); ?>

     <?php 
     $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'blog-image' );

     ?>
                    <div class="blog-content">
                        <img class="responsive" src="<?php echo $thumb[0]; ?>" alt="Blog Image" data-uk-scrollspy="{cls:'uk-animation-fade',delay:600,}">
                        <!-- START OF SINGLE BLOG AREA -->
                        <div class="single-blog-area">
                            <!-- BLOG INFO -->
                           <div class="row">
                                <div class="col-md-3">
                                    <div class="blog-info pull-left" data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:400,}">
                                        <div class="entry-date">
                                            <h2>28</h2>
                                            <p>mar 14</p>
                                        </div>
                                        <!-- /entry date -->

                                        <ul class="list-unstyled view-list">
                                            <li>
                                                <span>admin</span> <i class="fa fa-pencil-square-o"></i>
                                            </li>
                                            <li>
                                                <span>56,689</span> <i class="fa fa-eye"></i>
                                            </li>
                                            <li>
                                                <span>450</span> <i class="fa fa-comments-o"></i>
                                            </li>
                                            <li>
                                                <span>GRAPHICS</span> <i class="fa fa-tag"></i>
                                            </li>
                                        </ul>
                                   </div>
                                    <!-- /BLOG INFO -->
                                </div>
                                <!-- /END OF COL MD 3 -->
                                <div class="col-md-9">
                                    <!-- SINGLE BLOG -->
                                    <div class="single-blog pull-left" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:1200,}">
                                        <h2><?php the_title(); ?></h2>
                                            <?php the_content(); ?>
                                        <div class="readmore">
                                            <a href="details.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /END OF ROW -->
                        </div>
                        <!-- /END OF SINGLE BLOG AREA -->
                    </div>
                    <!-- /END OF BLOG CONTENT -->
<?php endforeach; wp_reset_query();?>

                    

                </div>
                <!-- /Blog content col MD 8-->

                <div class="col-md-4">
                    <aside id="sidebar" class="sidebar-area">


                        <!-- START OF ADD AREA -->
                        <div class="add-area" data-uk-scrollspy="{cls:'uk-animation-scale-up',delay:300,}">
                            <img class="responsive" src="<?php echo IMAGES; ?>/add1.jpg" alt="Add">
                        </div>
                        <!-- /END OF ADD AREA -->
                        <div class="clearfix"></div>
                        <!-- START OF LATEST BLOG -->

                        <div class="row">
                            <div class="latest-blog">

                                <div class="col-md-12 col-sm-12" data-uk-scrollspy="{cls:'uk-animation-slide-right',delay:300,}">
                                    <ul class="latest-popular" role="tablist">
                                        <li class="active"><a href="#latest" role="tab" data-toggle="tab">LATEST</a>
                                        </li>
                                        <li><a href="#popular" role="tab" data-toggle="tab">POPULAR</a>
                                        </li>


                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-12 col-sm-12">

                                    <!-- Tab panes -->
                                    <div class="tab-content tab-latest">
                                        <div class="tab-pane active" id="latest">
                                            <!-- START OF LATEST POST -->
                                            <div class="entry-latest" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:400,}">
                                                <img src="<?php echo IMAGES; ?>/latest1.jpg" alt="Latest Post">
                                                <h2>This is Photoshop's version of Lorem Ipsum. Proin</h2>
                                                <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
                                            </div>
                                            <!-- /END OF LATEST POST -->
                                            <!-- START OF LATEST POST -->
                                            <div class="entry-latest" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:600,}">
                                                <img src="<?php echo IMAGES; ?>/latest2.jpg" alt="Latest Post">
                                                <h2>This is Photoshop's version of Lorem Ipsum. Proin</h2>
                                                <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
                                            </div>
                                            <!-- /END OF LATEST POST -->

                                            <!-- START OF LATEST POST -->
                                            <div class="entry-latest" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:800,}">
                                                <img src="<?php echo IMAGES; ?>/latest3.jpg" alt="Latest Post">
                                                <h2>This is Photoshop's version of Lorem Ipsum. Proin</h2>
                                                <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
                                            </div>
                                            <!-- /END OF LATEST POST -->

                                            <!-- START OF LATEST POST -->
                                            <div class="entry-latest" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:1000,}">
                                                <img src="<?php echo IMAGES; ?>/latest4.jpg" alt="Latest Post">
                                                <h2>This is Photoshop's version of Lorem Ipsum. Proin</h2>
                                                <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
                                            </div>
                                            <!-- /END OF LATEST POST -->

                                            <!-- START OF LATEST POST -->
                                            <div class="entry-latest" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:1200,}">
                                                <img src="<?php echo IMAGES; ?>/latest5.jpg" alt="Latest Post">
                                                <h2>This is Photoshop's version of Lorem Ipsum. Proin</h2>
                                                <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
                                            </div>
                                            <!-- /END OF LATEST POST -->

                                        </div>
                                        <div class="tab-pane" id="popular">


                                            <!-- START OF LATEST POST -->
                                            <div class="entry-latest" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:1400,}">
                                                <img src="<?php echo IMAGES; ?>/latest5.jpg" alt="Latest Post">
                                                <h2>This is Photoshop's version of Lorem Ipsum. Proin</h2>
                                                <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
                                            </div>
                                            <!-- /END OF LATEST POST -->
                                            <!-- START OF LATEST POST -->
                                            <div class="entry-latest" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:1600,}">
                                                <img src="<?php echo IMAGES; ?>/latest4.jpg" alt="Latest Post">
                                                <h2>This is Photoshop's version of Lorem Ipsum. Proin</h2>
                                                <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
                                            </div>
                                            <!-- /END OF LATEST POST -->

                                            <!-- START OF LATEST POST -->
                                            <div class="entry-latest" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:1800,}">
                                                <img src="<?php echo IMAGES; ?>/latest3.jpg" alt="Latest Post">
                                                <h2>This is Photoshop's version of Lorem Ipsum. Proin</h2>
                                                <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
                                            </div>
                                            <!-- /END OF LATEST POST -->

                                            <!-- START OF LATEST POST -->
                                            <div class="entry-latest" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:2000,}">
                                                <img src="<?php echo IMAGES; ?>/latest2.jpg" alt="Latest Post">
                                                <h2>This is Photoshop's version of Lorem Ipsum. Proin</h2>
                                                <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
                                            </div>
                                            <!-- /END OF LATEST POST -->

                                            <!-- START OF LATEST POST -->
                                            <div class="entry-latest" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:2200,}">
                                                <img src="<?php echo IMAGES; ?>/latest1.jpg" alt="Latest Post">
                                                <h2>This is Photoshop's version of Lorem Ipsum. Proin</h2>
                                                <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
                                            </div>
                                            <!-- /END OF LATEST POST -->


                                        </div>
                                        <div class="clearfix"></div>
                                        <h2><a href="#">Browse More <i class="fa fa-arrow-right"></i></a>
                                        </h2>

                                    </div>
                                    <!-- END OF LATEST BLOG -->


                                </div>
                            </div>

                        </div>

                    

                        <div class="clearfix"></div>
                        <!-- START OF ADD AREA -->
                        <div class="add-area" data-uk-scrollspy="{cls:'uk-animation-scale-up',delay:300,}">
                            <img class="responsive" src="<?php echo IMAGES; ?>/add2.jpg" alt="Add">
                        </div>
                        <!-- /END OF ADD AREA -->
                        <div class="clearfix"></div>
                        <!-- START OF TWITTER AREA -->
                            <div class="row">
                                <div class="col-md-12 col-sm-12">                       
                                
                        <div class="twitter-area" data-uk-scrollspy="{cls:'uk-animation-fade',delay:300,}">
                            <img class="responsive" src="<?php echo IMAGES; ?>/twitter.jpg" alt="Twitter">
                        </div>
                        <!-- /END OF TWITTER AREA -->
                        </div>
                    </div>
                        <div class="clearfix"></div>

                        <!-- START OF ADD AREA -->
                        <div class="add-area" data-uk-scrollspy="{cls:'uk-animation-fade',delay:600,}">
                            <img class="responsive" src="<?php echo IMAGES; ?>/add3.jpg" alt="Add">
                        </div>
                        <!-- /END OF ADD AREA -->
                        <div class="clearfix"></div>
                        <!-- START OF FACEBOOK PAGE -->
                        <div class="facebook-page" data-uk-scrollspy="{cls:'uk-animation-fade',delay:900,}">
                            <h2>Facebook Fan Page</h2>
                            <img src="<?php echo IMAGES; ?>/facebook-logo.jpg" alt="Facebook Logo">
                            <img src="<?php echo IMAGES; ?>/fan.jpg" alt="Fan Image">
                        </div>
                        <!-- /END OF FACEBOOK PAGE -->
                    </aside>
                    <!-- END OF ASIDE/ SIDEBAR -->
                </div>

            </div>
        </div>
    </article>

    <!-- /END OF ARTICLE AREA -->

    <section class="blog-register-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="registation-area">
                        <h2 data-uk-scrollspy="{cls:'uk-animation-fade',delay:300,}">SO WHAT DO YOU WAITING FOR</h2>
                        <p data-uk-scrollspy="{cls:'uk-animation-fade',delay:600,}">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                        </p>
                        <div class="blog-register" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:600,}">
                            <h2>REGISTER NOW</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End of Register Area-->


    <section class="sponsor-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sponsor">
                        <h2>sponsor</h2>



                        <ul class="list-unstyled list-inline logo-list" data-uk-scrollspy="{cls:'uk-animation-slide-top',delay:500,}">
                            <li>
                                <img src="<?php echo IMAGES; ?>/logo1.png" alt="Logo one">
                            </li>
                            <li>
                                <img src="<?php echo IMAGES; ?>/logo2.png" alt="Logo Two">
                            </li>
                        </ul>

                        <ul class="list-unstyled list-inline logo-list" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:600,}">
                            <li>
                                <img src="<?php echo IMAGES; ?>/logo3.png" alt="Logo Three">
                            </li>
                            <li>
                                <img src="<?php echo IMAGES; ?>/logo4.png" alt="Logo Three">
                            </li>
                            <li>
                                <img src="<?php echo IMAGES; ?>/logo5.png" alt="Logo Three">
                            </li>
                            <li>
                                <img src="<?php echo IMAGES; ?>/logo6.png" alt="Logo Three">
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!--End of Sponsor Area-->

    <section id="location" class="map-area" data-uk-scrollspy="{cls:'uk-animation-fade',delay:600,}">

        <div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-8 col-xs-offset-4">
            <div class="map-bg"></div>
            <div class="custom-map">
                <div class="location-custom">
                    <h2>Location</h2>
                    <img src="<?php echo IMAGES; ?>/map-location.png" alt="Map Location">
                </div>

                <div class="location">
                    <h2>KTC Königstein</h2>
                    <ul class="list-unstyled location-list">
                        <li>The Communication- and Training-Center in Hessen</li>
                        <li>Ölmühlweg 65, 61462 Königstein</li>
                        <li>Near Frankfurt, Germany</li>
                    </ul>
                </div>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d233879.2217538218!2d90.44793472275802!3d23.66297895413503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!1i0!3e6!4m0!4m5!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!3m2!1d23.810332!2d90.4125181!5e0!3m2!1sen!2sbd!4v1410125297427" width="100%" height="445" frameborder="0" style="border:0">

        </iframe>

    </section>
    <!--End of Map Area-->




    <section class="event-gallery-area">
        <div class="container">
            <div class="row">


                <div class="col-md-6">
                    <div class="signup" data-uk-scrollspy="{cls:'uk-animation-slide-left',delay:600,}">
                        <h2>SUBSCRIBE NEWSLETTER</h2>
                        <form action="receive.html">
                            <input type="text" name="email" placeholder="your email address">
                            <input type="submit" value="SUBSCRIBE">
                        </form>
                    </div>
                </div>

                <!--END OF SIGNUP AREA-->

                <div class="col-md-6 event-social" data-uk-scrollspy="{cls:'uk-animation-slide-right',delay:600,}">
                    <p>
                        Follow us & stay updated about social activity
                    </p>
                    <ul class="list-unstyled list-inline custom-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-tint"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
    </section>
    <!--End of Gallery Area-->

<?php get_footer(); ?>