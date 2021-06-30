<?php
/**
 * Template Name: SoumissionsTemplate
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>


	<div id="primary" <?php astra_primary_class(); ?>>
<?php


$header_field = get_field_object( 'select-header' );


		if($header_field['value'] == 'default')
		{
			$args = array('post_type' => 'themetemplate',);
	
			$templates = new WP_Query( $args );
			
			if( $templates->have_posts() ) {
			}
		
			display_default_header($templates);
			
		}
		else{

			$args = array('post_type' => 'themetemplate',);
	
			$templates = new WP_Query( $args );
			
			if( $templates->have_posts() ) {
			}
		
			display_custom_header($templates);

		}
		// render header
		/////////////////////////////////////

    if( have_rows('index_page_template') ):
			while( have_rows('index_page_template') ): the_row();
		
				// Layout 1.
				if( get_row_layout() == 'banner_form' ):

					get_template_part( 'templates/homepage/home_banner');

				elseif(get_row_layout()== 'section1'):

					get_template_part( 'templates/homepage/section1');

                elseif(get_row_layout()== 'index_footer'):
                    
                    get_template_part( 'templates/homepage/index_footer');

				endif;
			endwhile;
		endif;


		$footer_field = get_field_object( 'select_footer' );
	
		if($footer_field['value'] == 'default')
		{
			$args = array('post_type' => 'themetemplate',);
	
			$templates = new WP_Query( $args );
			
			if( $templates->have_posts() ) {
			}
		
			display_default_footer($templates);
			
		}
		else{

			// $args = array('post_type' => 'themetemplate',);
	
			// $templates = new WP_Query( $args );
			
			// if( $templates->have_posts() ) {
			// }
		
			// display_custom_header($templates);

		}
	



		?>

	</div><!-- #primary -->



<?php get_footer(); ?>

