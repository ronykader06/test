 
     <?php 
     $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'blog-image' );

     ?>
          
        <div class="blog-content">
                        <a href="<?php the_permalink(); ?>"><img class="responsive" src="<?php echo $thumb[0]; ?>" alt="Insert Your Blog Image" data-uk-scrollspy="{cls:'uk-animation-fade',delay:600,}"></a>
                        <!-- START OF SINGLE BLOG AREA -->
                        <div class="single-blog-area">
                            <!-- BLOG INFO -->
                           <div class="row">

                            
    
                                <div class="col-md-3">
                                    <div class="blog-info pull-left" data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:400,}">
                                        <div class="entry-date">
                                            <h2><?php the_time( 'd' ) ?></h2>
                                            <p><?php the_time('M'); ?> <?php the_time('Y'); ?></p>
                                        </div>
                                        <!-- /entry date -->

                                        <ul class="list-unstyled view-list">
                                            <li>
                                                <span><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                                <?php the_author(); ?>

                                                </a>
                                                </span> <i class="fa fa-pencil-square-o"></i>
                                            </li>
                                            <li>
                                                <span><?php the_category(', '); ?> </span> <i class="fa fa-eye"></i>
                                            </li>
                                            <li>
                                                <span><?php comments_popup_link('No Comment', '1', '% Comments'); ?> </span> <i class="fa fa-comments-o"></i>
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
                                    <div id="post-<?php the_ID(); ?>"  class="single-blog pull-left" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:1200,}" <?php post_class(); ?>>
                                       <a href="<?php the_permalink(); ?>"><?php the_title('<h2>', '</h2>'); ?></a>
                                            <p><?php the_excerpt(); ?> </p>
                                            <?php
                                                wp_link_pages( array(
                                                    'before' => '<div class="page-links">' . __( 'Pages:', 'etx' ),
                                                    'after'  => '</div>',
                                                ) );
                                            ?>
                                        <div class="readmore">
                                        <?php edit_post_link( __( 'Edit', 'etx' ), '<span class="edit-link">', '</span>' ); ?>
                                            <a href="<?php the_permalink(); ?>">Read More</a>
                                        </div>
                                    </div>
                                </div>





                            </div>
                            <!-- /END OF ROW -->
                        </div>
                        <!-- /END OF SINGLE BLOG AREA -->
                    </div>
                    <!-- /END OF BLOG CONTENT -->