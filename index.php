<?php get_header(); ?>
<?php get_template_part( 'blog-banner' ); ?>
 <!-- START OF ARTICLE AREA -->
    <article id="main-blog" class="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- START OF BLOG CONTENT -->
  <?php if(have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>      
         
<?php get_template_part( 'content' ); ?>
  

<?php endwhile; wp_reset_query();?>
<?php endif; ?>
                </div>
                <!-- /Blog content col MD 8-->

<?php get_sidebar(); ?>

            </div>
        </div>
    </article>

    <!-- /END OF ARTICLE AREA -->

<?php get_template_part( 'blog-register' ); ?>

<?php get_template_part( 'sponsor' ); ?>

<?php get_template_part( 'map' ); ?>

<?php get_template_part( 'event-signup' ); ?>
   
<!--End of Gallery Area-->

<?php get_footer(); ?>