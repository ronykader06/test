
    <section class="gallery-area">
        <div class="container">
            <div class="row">


                <div class="col-md-6">
                    <div class="signup" data-uk-scrollspy="{cls:'uk-animation-fade', delay:300,}">
                        <h2>SUBSCRIBE NEWSLETTER</h2>
                        <form action="receive.html" data-uk-scrollspy="{cls:'uk-animation-fade', delay:700,}">
                            <input type="text" name="email" placeholder="your email address">
                            <input type="submit" value="SUBSCRIBE">
                        </form>
                        <div class="clearfix"></div>
                        <p data-uk-scrollspy="{cls:'uk-animation-fade', delay:1100,}">
                            Follow us & stay updated about social activity
                        </p>
                        <ul class="list-unstyled list-inline custom-social" data-uk-scrollspy="{cls:'uk-animation-fade', delay:1500,}">
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

                <!--END OF SIGNUP AREA-->

                <div class="col-md-6">
                    <div class="event-gallery">
                        <div class="row">
                            <header>
                                <div class="gellary-list pull-right">
                                    <h2>Event Gallery</h2>
                                    <img src="<?php echo IMAGES; ?>/event-title.png" alt="Event Title">
                                </div>
                                <div class="clearfix"></div>
                            </header>


                            <?php
	global $post;
	$args = array(  'posts_per_page'=> 6,'post_type'=> 'fetured-items','fetured_cat'=>'gallery','order' => 'ASC',);
	$myposts = get_posts( $args );
	foreach( $myposts as $post ) : setup_postdata($post); ?>
                            <div class="col-md-4">
                                <div class="single-gallery" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:200,}">
                                   <?php the_post_thumbnail( 'gallery-image',array('width'=>'176','height'=>'120') ); ?>
                                </div>
                                <!--End of Single Gallery -->
                            </div>

<?php endforeach; wp_reset_query();?>
                            

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>