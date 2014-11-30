 <section class="sponsor-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sponsor">
                        <h2>sponsor</h2>

                     <ul class="list-unstyled list-inline logo-list" data-uk-scrollspy="{cls:'uk-animation-slide-top',delay:500, repeat:true}">

    <?php
    global $post;
    $args = array(  'posts_per_page'=> 2,'post_type'=> 'fetured-items','fetured_cat'=>'international-logo','order' => 'ASC',);
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) : setup_postdata($post); ?>
                        <li>
                           <?php the_post_thumbnail( 'international-logo',array('class'=>'responsive') ) ?>
                        </li>
                        

<?php endforeach; wp_reset_query();?>
                       

                    </ul>


<ul class="list-unstyled list-inline logo-list" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:600, repeat:true}">
                            

<?php
    global $post;
    $args = array(  'posts_per_page'=> 4,'post_type'=> 'fetured-items','fetured_cat'=>'local-logo','order' => 'ASC',);
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) : setup_postdata($post); ?>
                        <li>
                           <?php the_post_thumbnail( 'local-logo',array('class'=>'responsive') ) ?>
                        </li>
                          

<?php endforeach; wp_reset_query();?>

                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </section>
