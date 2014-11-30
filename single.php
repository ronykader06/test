<?php get_header(); ?>
<?php get_template_part( 'blog-banner' ); ?>

    <!-- START OF ARTICLE AREA -->
    <article id="main-blog" class="blog-detail-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
  <?php if(have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>        
 
<?php 
	$gallery_post = get_post_meta( $post->ID,'gallery-post',true );
	$gallery_desc = get_post_meta( $post->ID, 'gallery-desc',true );
	
 ?>

                    <!-- START OF BLOG DETAILS AREA -->
                    <div class="blog-details-area">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="blog-thumb"  data-uk-scrollspy="{cls:'uk-animation-fade',delay:500,}">
                            		<?php the_post_thumbnail( 'blog-image' ); ?>

                                    <div class="entry-detail-date">
                                        <h2><?php the_time( 'd' ); ?></h2>
                                        <p><?php the_time( 'M' ); ?> <?php the_time( 'Y' ); ?> </p>
                                    </div>
                                </div>

                            </div>
                            <!-- /END OF BLOG DETAILS COL -->
                            <div class="col-md-12">
                                <div class="entry-blog-details"  data-uk-scrollspy="{cls:'uk-animation-fade',delay:900,}">
                                    <?php the_title( '<h2>','</h2>'); ?>
                                    </h2>
                                    <ul class="list-unstyled list-inline entry-blog-details-list">
                                        <li><i class="fa fa-edit"></i> <span><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ;?>"><?php the_author(); ?></a></span></li>
                                        <li><i class="fa fa-eye"></i> <span><?php the_category(', '); ?> </span></li>
                                        <li><i class="fa fa-comments-o"></i> <span><?php comments_popup_link('No Comment', '1', '% Comments'); ?> </span></li>
                                        <li><i class="fa fa-tag"></i> <span>Graphics</span></li>
                                    </ul>
                   <?php the_content(); ?>

                                </div>
                                <!-- END OF BLOG DETAILS -->
                            </div>
                            <!-- /END OF ENTRY BLOG DETAILS COL-MD-12 -->

                            <div class="col-md-12" data-uk-scrollspy="{cls:'uk-animation-fade',delay:900,}">
                              <div class="blogsub-thumb-area">

          
                    	<?php if($gallery_post) :?>

                                <div class="blog-sub-thumb" >
                                    <img src="<?php echo $gallery_post; ?>" alt="Blog Details Images">                               
                                    <div class="hov"></div>
                                    <div class="hov-content">                                        
                                            <?php echo $gallery_desc; ?>
                                        
                                    </div>
                                    
                                  </div><!-- END OF BLOG SUB THUMB -->

                                  <?php endif ;?>

                            <h2>Nam nec tellus a odio tincidunt auctor a ornare odio-</h2>
                            <ol>
                                <li>Mauris in erat justo.</li>
                                <li>Nullam ac urna eu felis dapibus.</li>
                                <li>Condimentum sit amet a augue.</li>
                                <li>Sed non neque elit.</li>
                                <li>Sed ut imperdiet nisi.</li>
                                <li>Proin condimentum fermentum nunc.</li>
                            </ol>
                      
                                Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.
                        

                            <div class="blog-social">
                                <h2><?php _e( 'Share this story-' ) ?></h2>
                                <ul class="list-unstyled list-inline">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                    <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>

                                <div class="comment-box" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:500}">
                                    <div action="comment" class="form-group form-box">
                                        
                                        <?php
                                        // If comments are open or we have at least one comment, load up the comment template
                                        if ( comments_open() || get_comments_number() ) :
                                            comments_template();
                                        endif;
                                    ?>
                                        
                                    </div>
                                </div>
                                
                            </div>
                                  
                            </div>
                           <!-- /END OF BLOG SUB THUM AREA -->
                            </div>  
                            
                        </div>
                        <!-- /END OF BLOG DETAILS ROW -->
                    </div>
                    <!-- END OF BLOG DETAILS AREA -->

<?php endwhile; ?>    
<?php endif; ?>
                </div>          
<?php get_sidebar(); ?>

            </div>
        </div>
    </article>

<!-- /END OF ARTICLE AREA -->
<?php get_template_part( 'blog-register' ); ?>
<?php get_template_part( 'sponsor' ); ?>
<?php get_template_part('map'); ?>
<?php get_template_part( 'event-signup' ); ?>
<?php get_footer(); ?>