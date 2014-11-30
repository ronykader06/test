
<section class="promo-area">
        <div class="container">
            <div class="row">

<?php
	global $post;
	$args = array(  'posts_per_page'=> 8,'post_type'=> 'fetured-items','fetured_cat'=>'fetured','order' => 'ASC',);
	$myposts = get_posts( $args );
	foreach( $myposts as $post ) : setup_postdata($post); ?>

<?php 
	$speaker_thumb = get_post_meta( $post->ID,'speaker-thumb',true );
	$blog_thumb = get_post_meta( $post->ID,'blog-thumb',true );
	$comment_thumb = get_post_meta( $post->ID,'comment-thumb',true );
	$gallery_thumb = get_post_meta( $post->ID,'gallery-thumb',true );
	$gallery_thumb = get_post_meta( $post->ID,'gallery-thumb',true );

	$speaker_title = get_post_meta( $post->ID,'speaker-title',true );
	$blog_title = get_post_meta( $post->ID,'blog-title',true );
	$comment_title = get_post_meta( $post->ID,'comment-title',true );
	$gallery_title = get_post_meta( $post->ID,'gallery-title',true );
	$gallery_title = get_post_meta( $post->ID,'gallery-title',true );

 ?>


                <div class="col-md-6">
                    <div class="promo-image" data-uk-scrollspy="{cls:'uk-animation-slide-left',delay:800,}">
                       <?php the_post_thumbnail('fetured-image',array('class' => 'responsive')) ?>
                    </div>
                </div>
                <!--END OF PORMOTION IMAGE-->
                <div class="col-md-6 col-sm-12" data-uk-scrollspy="{cls:'uk-animation-slide-right',delay:800,}">
                    <div class="promo">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                    </div>
                    <!--End of Promo-->
                    <div class="promo-menu">
                        <ul class="list-unstyled list-inline promo-list">
			<?php 
				if($speaker_thumb):?>

							<li data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:200,}">
                                <a href=""><img src="<?php echo $speaker_thumb; ?>" width="80" height="80" alt="Speaker"></a>
                                <p><?php echo $speaker_title; ?></p>
                            </li>
			 <?php endif; ?>
                            
               
				 <?php if($blog_thumb):?>
                            <li data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:400,}">
                                <a href=""><img src="<?php echo $blog_thumb; ?>" width="80" height="80" alt="Speaker"></a>
                                <p><?php echo $blog_title; ?></p>
                            </li>

                 <?php endif; ?>
                 <?php if($comment_thumb):?>
                            <li data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:600,}">
                                <a href=""><img src="<?php echo $comment_thumb; ?>" width="80" height="80" alt="Speaker"></a>
                                <p><?php echo $comment_title; ?></p>
                            </li>
                  <?php endif; ?>         
				<?php if($gallery_thumb):?>
                            <li data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:800,}">
                                <a href=""><img src="<?php echo $gallery_thumb; ?>" width="80" height="80" alt="Speaker"></a>
                                <p><?php echo $gallery_title; ?></p>
                            </li>
                <?php endif; ?>            

                        </ul>
                    </div>
                    <!--End of Promo Menu-->

                </div>

<?php endforeach; wp_reset_query();?>


            </div>
        </div>
    </section>