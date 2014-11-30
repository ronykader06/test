   <section id="speaker" class="speaker-area">
        <div class="container">
            <div class="row">
                <header>
                    <div class="entry-speaker">
                        <img src="<?php echo IMAGES; ?>/speaker-icon.png" alt="Speakers">
                        <h2>SPEAKERS</h2>
                    </div>
                </header>
                <div class="clearfix"></div>

                <div id="effect-1" class="effects clearfix">

<?php
	global $post;
	$args = array(  'posts_per_page'=> 8,'post_type'=> 'etx-speaker','order' => 'ASC',);
	$myposts = get_posts( $args );
	$i=1;
	foreach( $myposts as $post ) : setup_postdata($post); ?>
	<?php 
		$facebook = get_post_meta( $post->ID,'facebook',true );
		$twitter = get_post_meta( $post->ID,'twitter',true );
		$google_plus = get_post_meta( $post->ID,'google-plus',true );
		$linkedin = get_post_meta( $post->ID,'linkedin',true );
		$facebook_link = get_post_meta( $post->ID, 'facebook-link',true );
		$twitter_link = get_post_meta( $post->ID, 'twitter-link',true );
		$google_link = get_post_meta( $post->ID, 'google-link',true );
		$linked_link = get_post_meta( $post->ID, 'linkedin-link',true );

	 ?>
<?php 
	$i > 8 ? $i=1 : $i = $i;

	$speaker = "cls:'uk-animation-fade', delay:400,";

	switch ($i) {
		case 1:
	       $speaker = "cls:'uk-animation-fade', delay:400,";
			
			break;
			case 2:
	       $speaker = "cls:'uk-animation-fade', delay:600,";
			
			break;
			case 3:
	       $speaker = "cls:'uk-animation-fade', delay:800,";
			
			break;
			case 4:
	       $speaker = "cls:'uk-animation-fade', delay:1000,";
			
			break;
			case 5:
	       $speaker = "cls:'uk-animation-fade', delay:1200,";
			
			break;
			case 6:
	       $speaker = "cls:'uk-animation-fade', delay:1400,";
			
			break;
			case 7:
	       $speaker = "cls:'uk-animation-fade', delay:1600,";
			
			break;
			case 8:
	       $speaker = "cls:'uk-animation-fade', delay:1800,";
			
			break;
		
	
	}
 ?>
<div class="col-md-3 col-sm-6">
                        <div class="speaker" data-uk-scrollspy="{<?php echo $speaker; ?>}">
                            <?php the_post_thumbnail('post-image', array('class' => 'responsive')); ?>
                            <div class="register-speaker">
                                <h2><?php the_title(); ?></h2>
                                <h3><?php the_content(); ?></h3>
                            </div>

                            <div class="hov"></div>

                            <div class="overlay">
                                <h2><?php the_title(); ?></h2>
                                <h3><?php the_content(); ?></h3>                                
                                <ul class="list-unstyled list-inline">

                   <?php if($facebook):?>
                    <li><a target="_blank" href="<?php echo $facebook_link; ?>"><i class="fa fa-<?php echo $facebook;?>"></i></a>
                    </li>                
                    <?php endif;?>

                    <?php if($twitter):?>
                    <li><a target="_blank" href="<?php echo $twitter_link; ?>"><i class="fa fa-<?php echo $twitter;?>"></i></a>
                    </li>                
                    <?php endif;?>

                    <?php if($google_plus):?>
                    <li><a target="_blank" href="<?php echo $google_link; ?>"><i class="fa fa-<?php echo $google_plus;?>"></i></a>
                    </li>                
                    <?php endif;?>

                    <?php if($linkedin):?>
                    <li><a target="_blank" href="<?php echo $linkedin_link; ?>"><i class="fa fa-<?php echo $linkedin;?>"></i></a>
                    </li>                
                    <?php endif;?>

                                </ul>

                            </div>
                        </div>
                    </div>
                    <!--End of Speaker-->

<?php $i++; ?>
<?php endforeach; wp_reset_query();?>

                </div>
            </div>
        </div>
    </section>