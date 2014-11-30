<?php
/*
Template Name: Register Template
*/
 get_header(); ?>
<?php get_template_part( 'blog-banner' ); ?>

    <!-- START OF ARTICLE AREA -->
<article id="main-blog" class="blog-detail-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <!-- START OF BLOG DETAILS AREA -->
                    <div class="blog-details-area">
                        <div class="row">
                            <div class="col-md-12" data-uk-scrollspy="{cls:'uk-animation-fade',delay:900,}">
                                <div class="blogsub-thumb-area">  
                            <div class="blog-social">
                                <div class="comment-box" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:500}">
                                   

                                   <form action="<?php echo site_url('wp-login.php?action=register', 'login_post') ?>" method="post" class="form-group form-box">

                                        <input type="text" class="form-control signup-input" name="user_login" id="user_login" placeholder="Username">
                                        <input type="email" class="form-control signup-input" name="user_email" id="user_email" placeholder="Email Address">
                                       
                                        	<?php do_action( 'register_form' ); ?>
                                        <div class="clearfix"></div>
                                        <input type="submit" value="Registation" id="register">
                                    </form> 

					 
      


                                </div>                                
                            </div>                                  
                            </div>
                           <!-- /END OF BLOG SUB THUM AREA -->
                            </div>                       
                            
                        </div>
                        <!-- /END OF BLOG DETAILS ROW -->
                    </div>
                    <!-- END OF BLOG DETAILS AREA -->
                </div>
                <!-- /Blog content col MD 8-->
                <div class="col-md-4">
                    <aside id="sidebar" class="sidebar-area">

                        <!-- START OF ADD AREA -->
                        <div class="add-area" data-uk-scrollspy="{cls:'uk-animation-scale-up',delay:400,}">
                            <img class="responsive" src="<?php echo IMAGES;?>/add1.jpg" alt="Add">
                        </div>
                        <!-- /END OF ADD AREA -->

                        <div class="clearfix"></div>

                        <!-- START OF LATEST BLOG -->

                        <div class="row">
                            <div class="latest-blog">
                                <div class="col-md-12 col-sm-12">
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
                                                <img src="<?php echo IMAGES;?>/latest1.jpg" alt="Latest Post">
                                                <h2>This is Photoshop's version of Lorem Ipsum. Proin</h2>
                                                <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
                                            </div>
                                            <!-- /END OF LATEST POST -->
                                            <!-- START OF LATEST POST -->
                                            <div class="entry-latest" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:600,}">
                                                <img src="<?php echo IMAGES;?>/latest2.jpg" alt="Latest Post">
                                                <h2>This is Photoshop's version of Lorem Ipsum. Proin</h2>
                                                <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
                                            </div>
                                            <!-- /END OF LATEST POST -->

                                            <!-- START OF LATEST POST -->
                                            <div class="entry-latest" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:800,}">
                                                <img src="<?php echo IMAGES;?>/latest3.jpg" alt="Latest Post">
                                                <h2>This is Photoshop's version of Lorem Ipsum. Proin</h2>
                                                <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
                                            </div>
                                            <!-- /END OF LATEST POST -->

                                            <!-- START OF LATEST POST -->
                                            <div class="entry-latest" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:1000,}">
                                                <img src="<?php echo IMAGES;?>/latest4.jpg" alt="Latest Post">
                                                <h2>This is Photoshop's version of Lorem Ipsum. Proin</h2>
                                                <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
                                            </div>
                                            <!-- /END OF LATEST POST -->

                                            <!-- START OF LATEST POST -->
                                            <div class="entry-latest" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:1200,}">
                                                <img src="<?php echo IMAGES;?>/latest5.jpg" alt="Latest Post">
                                                <h2>This is Photoshop's version of Lorem Ipsum. Proin</h2>
                                                <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
                                            </div>
                                            <!-- /END OF LATEST POST -->

                                        </div>
                                        <div class="tab-pane" id="popular">


                                            <!-- START OF LATEST POST -->
                                            <div class="entry-latest" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:1400,}">
                                                <img src="<?php echo IMAGES;?>/latest5.jpg" alt="Latest Post">
                                                <h2>This is Photoshop's version of Lorem Ipsum. Proin</h2>
                                                <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
                                            </div>
                                            <!-- /END OF LATEST POST -->
                                            <!-- START OF LATEST POST -->
                                            <div class="entry-latest" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:1600,}">
                                                <img src="<?php echo IMAGES;?>/latest4.jpg" alt="Latest Post">
                                                <h2>This is Photoshop's version of Lorem Ipsum. Proin</h2>
                                                <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
                                            </div>
                                            <!-- /END OF LATEST POST -->

                                            <!-- START OF LATEST POST -->
                                            <div class="entry-latest" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:1800,}">
                                                <img src="<?php echo IMAGES;?>/latest3.jpg" alt="Latest Post">
                                                <h2>This is Photoshop's version of Lorem Ipsum. Proin</h2>
                                                <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
                                            </div>
                                            <!-- /END OF LATEST POST -->

                                            <!-- START OF LATEST POST -->
                                            <div class="entry-latest" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:2000,}">
                                                <img src="<?php echo IMAGES;?>/latest2.jpg" alt="Latest Post">
                                                <h2>This is Photoshop's version of Lorem Ipsum. Proin</h2>
                                                <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
                                            </div>
                                            <!-- /END OF LATEST POST -->

                                            <!-- START OF LATEST POST -->
                                            <div class="entry-latest" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:2200,}">
                                                <img src="<?php echo IMAGES;?>/latest1.jpg" alt="Latest Post">
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
                            <img class="responsive" src="<?php echo IMAGES;?>/add2.jpg" alt="Add">
                        </div>
                        <!-- /END OF ADD AREA -->
                        <div class="clearfix"></div>
                        <!-- START OF TWITTER AREA -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12">

                                <div class="twitter-area" data-uk-scrollspy="{cls:'uk-animation-fade',delay:300,}">
                                    <img class="responsive" src="<?php echo IMAGES;?>/twitter.jpg" alt="Twitter">
                                </div>
                                <!-- /END OF TWITTER AREA -->
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <!-- START OF ADD AREA -->
                        <div class="add-area" data-uk-scrollspy="{cls:'uk-animation-fade',delay:600,}">
                            <img class="responsive" src="<?php echo IMAGES;?>/add3.jpg" alt="Add">
                        </div>
                        <!-- /END OF ADD AREA -->
                        <div class="clearfix"></div>
                        <!-- START OF FACEBOOK PAGE -->
                        <div class="facebook-page" data-uk-scrollspy="{cls:'uk-animation-fade',delay:900,}">
                            <h2>Facebook Fan Page</h2>
                            <img src="<?php echo IMAGES;?>/facebook-logo.jpg" alt="Facebook Logo">
                            <img src="<?php echo IMAGES;?>/fan.jpg" alt="Fan Image">
                        </div>
                        <!-- /END OF FACEBOOK PAGE -->
                    </aside>
                    <!-- END OF ASIDE/ SIDEBAR -->
                </div>

            </div>
        </div>
    </article>

<!-- /END OF ARTICLE AREA -->
<?php get_template_part( 'blog-register' ); ?>
<?php get_template_part( 'sponsor' ); ?>
<?php get_template_part('map'); ?>
<?php get_template_part( 'event-signup' ); ?>
<?php get_footer(); ?>
