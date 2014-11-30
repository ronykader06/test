<?php

define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT . '/assets/images');

function etx_scripts() {
	wp_enqueue_style( 'etx-uikit', THEMEROOT.'/assets/css/uikit.min.css' );
	wp_enqueue_style( 'etx-normalize', THEMEROOT.'/assets/css/normalize.css' );
	wp_enqueue_style( 'etx-bootstrap', THEMEROOT.'/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'etx-font-awesome', THEMEROOT.'/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'etx-flexslider', THEMEROOT.'/assets/css/flexslider.css' );
	wp_enqueue_style( 'etx-slicknav', THEMEROOT.'/assets/css/slicknav.css' );
	wp_enqueue_style( 'etx-style', THEMEROOT.'/style.css' );
	wp_enqueue_style( 'etx-responsive', THEMEROOT.'/assets/css/responsive.css' );


	wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', THEMEROOT . '/assets/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('jquery-plugins', THEMEROOT . '/assets/js/plugins.js', array('jquery'), false, true);
    wp_enqueue_script('jquery-slicknav', THEMEROOT . '/assets/js/jquery.slicknav.min.js', array('jquery'), false, true);
    wp_enqueue_script('etx-custom', THEMEROOT . '/assets/js/custom.js', array('jquery'), false, true);
    wp_enqueue_script('etx-jquery', THEMEROOT . '/assets/js/jquery.flexslider.js', array('jquery'), false, true);
    wp_enqueue_script('etx-modernizr', THEMEROOT . '/assets/js/vendor/modernizr-2.6.2.min.js', array('jquery'), false, true);

}
add_action( 'wp_enqueue_scripts', 'etx_scripts' );


//add_filter('ot_show_pages', '__return_false' );

add_filter('ot_show_new_layout', '__return_false' );

add_filter('ot_theme_mode', '__return_true' );

include_once('option-tree/ot-loader.php' );

include_once ('inc/etx-theme-options.php');
include_once ('inc/etx-meta-boxes.php');


//CUSTOM POST REGISTER
function etx_custom_post() {

	register_post_type( 'event-items',
		array(
			'labels' => array(
				'name' => __( 'Up Coming Event' ),
				'singular_name' => __( 'Event' ),
				'add_new_item' => __( 'Add New Up Coming Event' )
			),
			'public' => true,
			'supports' => array('author','editor','title', 'custom-fields','thumbnail'),
			'has_archive' => false,
		    'show_admin_column'     => true,
		    'menu_icon'    => 'dashicons-megaphone',
			
			'rewrite' => array('slug' => 'event-item'),
		)
	);
		register_post_type( 'fetured-items',
		array(
			'labels' => array(
				'name' => __( 'Fetured Section' ),
				'singular_name' => __( 'Fetured' ),
				'add_new_item' => __( 'Add New Up Fetured' )
			),
			'public' => true,
			'supports' => array('editor','title', 'custom-fields','thumbnail'),
			'has_archive' => false,
		    'show_admin_column'     => true,
		     'menu_icon' => 'dashicons-list-view',
			
			'rewrite' => array('slug' => 'fetured-item'),
		)
	);

	register_post_type('etx-speaker',
		array(
			'labels' => array(
				'name' => __( 'Speaker'),
				'singular_name' => __( 'speker' ),
				'add_new_item'  => __( 'Add New Speaker' ),
				),
			'public' => true,
			'supports' => array( 'editor','title','custom-fields','thumbnail'),
			'has_archive' => false,
			'show_admin_column' => true,
			'menu_icon'  => 'dashicons-microphone',
			'rewrite' => array('slug' => 'etx-speakers'), 
			)
		);	
}

add_action('init', 'etx_custom_post');

//THIS CODE FOR REGISTER TAXONOMY

function etx_register_taxonomy(){
	register_taxonomy(
		'fetured_cat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
		'fetured-items',                  //post type name
			 array(
				'hierarchical'          => true,
				'label'                 => 'Fetured Category',  //Display name
				'query_var'             => true,
			    'show_admin_column'     => true,
				'rewrite'               => array(
					'slug'              => 'fetured-category', // This controls the base slug that will display before each term
					'with_front'    => true // Don't display the category base before
					)
			)
		);

	if(!term_exists( 'fetured', 'fetured_cat' ) )
	   wp_insert_term( 'fetured', 'fetured_cat' );
	if(!term_exists( 'gallery', 'fetured_cat' ) )
		wp_insert_term( 'gallery', 'fetured_cat' );
	if(!term_exists( 'international-logo', 'fetured_cat' ) )
		wp_insert_term( 'international-logo', 'fetured_cat' );
	if(!term_exists( 'local-logo', 'fetured_cat' ) )
		wp_insert_term( 'local-logo', 'fetured_cat' );

	register_taxonomy(
		'event_cat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
		'event-items',                  //post type name
			 array(
				'hierarchical'          => true,
				'label'                 => 'Event Category',  //Display name
				'query_var'             => true,
			    'show_admin_column'     => true,
				'rewrite'               => array(
					'slug'              => 'event-category', // This controls the base slug that will display before each term
					'with_front'    => true // Don't display the category base before
					)
			)
		);
	if(!term_exists( 'upcoming-event','event_cat' ))
		wp_insert_term( 'upcoming-event','event_cat' );
	if(!term_exists( 'running-event','event_cat' ))
		wp_insert_term( 'running-event','event_cat' );
}
add_action( 'init', 'etx_register_taxonomy' );

add_theme_support( 'post-thumbnails', array('post', 'etx-speaker','event-items','fetured-items' ) );

add_image_size( 'runningevent-logo', 360, 119, true );
add_image_size( 'fetured-image', 437, 354, true );
add_image_size( 'fetured-title', 70, 70, true );
add_image_size( 'post-image', 270, 270, true );
add_image_size( 'gallery-image', 176, 120, true );
add_image_size( 'international-logo', 200, 60, true );
add_image_size( 'blog-image', 700, 400, true );
add_image_size( 'lates-post', 120, 180, true );




// add_filter( 'comment_form_default_fields', 'unset_url_comment_form', 10 );

// function unset_url_comment_form( $fields ) {
// 	unset( $fields['url'] );

// 	$fields['facebook'] = '<p class="comment-form-author">' . '<label for="author">' . __( 'Facebook' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
// 		            '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>';
// 	return $fields;
// } 


// Comment Page Filter
add_filter( 'comment_form_default_fields', 'my_form', 10, 1 );

function my_form ( $fields ) {
	$commenter = wp_get_current_commenter();
	$req      = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	unset( $fields['url'] );	
	unset( $fields['author'] );
	unset( $fields['email'] );

	$fields['author'] = '<input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />';
	$fields['email'] = '<input id="email" class="form-control" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />';
	
	return $fields;


}

 add_filter( 'comment_form_defaults','my_comment',10,1 );

 function my_comment($defaults){
 	$req      = get_option( 'require_name_email' );
	$required_text = sprintf( ' ' . __('Required fields are marked %s'), '<span class="required">*</span>' );
 	$defaults ['comment_field']   = ' <textarea id="comment" name="comment" class="form-contro2" cols="30" rows="10" placeholder="type your comments" aria-required="true"></textarea></p>';
 	$defaults ['comment_notes_before'] = '<p class="comment-notes">' . __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) . '</p>';
 	$defaults ['comment_notes_after' ] = '<p class="form-allowed-tags"></p>';
 	$defaults ['label_submit']         = __( 'Add Comment' );
 	return $defaults;
 }


add_filter( 'wp_list_comments_args','my_ava' );

function my_ava($ava){
	$ava['avatar_size'] = 85;
	
	return $ava;
}

// Filter For Signup
add_action( 'register_form', 'myplugin_register_form' );

function myplugin_register_form() {

    $first_name = ( ! empty( $_POST['first_name'] ) ) ? trim( $_POST['first_name'] ) : '';
        
        ?>
       <input type="text" name="first_name" id="first_name" placeholder="rony" class="form-control signup-input" value="<?php echo esc_attr( wp_unslash( $first_name ) ); ?>" />
        
        <?php
    }
