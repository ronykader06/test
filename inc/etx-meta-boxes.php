<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function custom_meta_boxes() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $fetured_meta_box = array(
    'id'          => 'fetured_meta_box',
    'title'       => __( 'Fetured Meta Box', 'theme-text-domain' ),
    'desc'        => __('<b style="color:red;">THIS META BOX OPTION ONLY FOR FETURED CATEGORY</b>'),
    'pages'       => array( 'fetured-items' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __( '<b>SPEAKER THUMBNAIL SECTION</b>', 'theme-text-domain' ),
        'id'          => 'speaker-thumb',
        'type'        => 'upload',
        'desc'        =>  __( 'Please Insert Your Speaker Image (<b>Image Size 80x80</b>)' )

      ),
      array(
        'label'       => __( '<b>WRITE YOUR TITLE</b>', 'theme-text-domain' ),
        'id'          => 'speaker-title',
        'type'        => 'text',
        'std'         => 'Speaker',
        'desc'        =>  __( 'Please Write Your Title' )

      ),

// BLOG AREA

        array(
        'label'       => __( '<b>BLOG THUMBNAIL SECTION</b>', 'theme-text-domain' ),
        'id'          => 'blog-thumb',
        'type'        => 'upload',
        'desc'        =>  __( 'Please Insert Your BLOG Image (<b>Image Size 80x80</b>)' )

      ),
      array(
        'label'       => __( '<b>WRITE YOUR BLOG TITLE</b>', 'theme-text-domain' ),
        'id'          => 'blog-title',
        'type'        => 'text',
        'std'         => 'Speaker',
        'desc'        =>  __( 'Please Write Your Title' )

      ),

// COMMENTS AREA
          array(
        'label'       => __( '<b>COMMENT THUMBNAIL SECTION</b>', 'theme-text-domain' ),
        'id'          => 'comment-thumb',
        'type'        => 'upload',
        'desc'        =>  __( 'Please Insert Your COMMENT Image (<b>Image Size 80x80</b>)' )

      ),
      array(
        'label'       => __( '<b>WRITE YOUR COMMENT TITLE</b>', 'theme-text-domain' ),
        'id'          => 'comment-title',
        'type'        => 'text',
        'std'         => 'Speaker',
        'desc'        =>  __( 'Please Write Your Title' )

      ),


// GALLERY AREA
          array(
        'label'       => __( '<b>GALLERY THUMBNAIL SECTION</b>', 'theme-text-domain' ),
        'id'          => 'gallery-thumb',
        'type'        => 'upload',
        'desc'        =>  __( 'Please Insert Your GALLERY Image (<b>Image Size 80x80</b>)' )

      ),
      array(
        'label'       => __( '<b>WRITE YOUR GALLERY TITLE</b>', 'theme-text-domain' ),
        'id'          => 'gallery-title',
        'type'        => 'text',
        'std'         => 'Speaker',
        'desc'        =>  __( 'Please Write Your Title' )

      ),
    )
  );
  
    ot_register_meta_box( $fetured_meta_box );



$event_meta_box = array(
    'id'          => 'event_meta_box',
    'title'       => __( '<h2 style="color:#e74c3c; font-size:20px;">THIS SECTION FOR UPCOMING EVENT</h2>', 'theme-text-domain' ),
    'desc'        => '',
    'pages'       => array( 'event-items' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __( 'PLEASE WRITE YOUR EVENT LOCATION ', 'theme-text-domain' ),
        'id'          => 'event_location',
        'type'        => 'text',
        'std'         => __( 'Mirpur 01, Dhaka - 1216'),
        'desc'        => sprintf( __( 'Please Write Your Event Location %s', 'theme-text-domain' ), '<code></code>' ),
      
      ), 
      array(
        'label'       => __( 'PLEASE WRITE YOUR EVENT DATE ', 'theme-text-domain' ),
        'id'          => 'event_date',
        'type'        => 'text',
        'std'         => __( '11 dec'),
        'std'         => __( 'Mirpur 01, Dhaka - 1216'),
        'desc'        => sprintf( __( 'Please Write Your Event Date %s', 'theme-text-domain' ), '<code></code>' ),
      
      ),      


    )
  );

 ot_register_meta_box( $event_meta_box );

}