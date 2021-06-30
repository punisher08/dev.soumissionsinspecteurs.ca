<?php
/*
 * Template Name: Featured Article
 * Template Post Type: post, page, product
 */
  
 get_header(); 
 ?>
 <div id="primary" <?php astra_primary_class(); ?>>
 <?php
//  header template
    $args = array('post_type' => 'themetemplate',);	
    $templates = new WP_Query( $args );
    display_default_header($templates);
// end header

    if( have_rows('post_fields') ):
        while( have_rows('post_fields') ): the_row();
            if( get_row_layout() == 'post_section1' ):
                get_template_part( 'templates/articles-post/Articles');

            endif;
        endwhile;
    endif;
 
 ?>
 </div><!--end primary-->
 <?php
$args = array('post_type' => 'themetemplate',);	
$templates = new WP_Query( $args );
display_default_footer($templates);