<div class="timeline-area clear">

    <h2>Up Coming Events</h2>
    <div class="row">
                       

<?php
	global $post;
	$args = array(  'posts_per_page'=> 3,'post_type'=> 'event-items','event_cat'=>'upcoming-event','order' => 'DESC',);
	$myposts = get_posts( $args );
	 $i = 1;
	 foreach( $myposts as $post ) : setup_postdata($post); ?>
   	<?php
   	   $event_location = get_post_meta( $post->ID, 'event_location', true);
   	   $event_date = get_post_meta($post->ID, 'event_date', true);
   	   $i > 3 ? $i = 1 : $i = $i;

   	   $dy_css = "cls:'uk-animation-slide-left',delay:500";
   	   	switch ($i) {
   	   		case 1:
   	   			$dy_css = "cls:'uk-animation-slide-left',delay:500";
   	   			break;
   	   		case 2:
   	   			$dy_css = "cls:'uk-animation-slide-bottom',delay:700";
   	   			break;
   	   		case 3:
   	   			$dy_css = "cls:'uk-animation-slide-right',delay:900";
   	   			break;
   	   	}
 ?>
 <div class="col-md-4 col-lg-4 col-xs-8 kk">
	  <div class="box" data-uk-scrollspy="{<?php echo $dy_css; ?>}">
                                <h2><?php the_title(); ?></h2>
                                <h3><?php echo $event_location; ?></h3>
                               
                                	<?php the_content(); ?>
                              

                                <div class="date">
                                   <?php echo $event_date; ?>
                                </div>
                            </div>
  </div>
                        <!--END OF TIME LINE ONE-->
                        <?php $i++; ?>
<?php endforeach; wp_reset_query();?>

                      
                    </div>
                </div>
                <!--End of Time Line Area-->