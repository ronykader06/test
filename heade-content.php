<section class="heade-content">
        <div class="container">
            <div class="row">          



<?php
	global $post;
	$args = array(  'posts_per_page'=> 1,'post_type'=> 'event-items','event_cat'=>'running-event','order' => 'ASC',);
	$myposts = get_posts( $args );

	 foreach( $myposts as $post ) : setup_postdata($post); ?>


                <div class="header-registation clear">
                    <div class="col-md-4 col-md-offset-1">
                        <div class="event-logo" data-uk-scrollspy="{cls:'uk-animation-slide-left',delay:1200}">
                           <?php the_post_thumbnail( 'runningevent-logo',array('class'=>'responsive') ) ?>
                        </div>
                    </div>
                    <!--End of Event Logo Area-->
                    <div class="col-md-6 col-md-offset-1">
                        <div class="event-registation" data-uk-scrollspy="{cls:'uk-animation-slide-right',delay:1200}">
                            <h2>J DAY BANGALDESH 1</h2>
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_content(); ?></p>
                            <div class="register">

                                <h2><a href="#register" data-uk-smooth-scroll="{offset: 190}"><?php _e( 'REGISTER NOW' ); ?></a></h2>
                            </div>

                        </div>
                    </div>
                </div>
<!--END OF HEADER REGISTATION AREA-->
<?php endforeach; wp_reset_query();?>

                


<?php get_template_part( 'content-timeline' ); ?>

            </div>
        </div>
    </section>