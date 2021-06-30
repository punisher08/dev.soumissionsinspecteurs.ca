<?php
/**
 * Template Name: inspection-immobiliere-a-montreal Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); 

?>


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
/////////////////////////////////////////////////////////////


		if( have_rows('fields') ):
			while( have_rows('fields') ): the_row();
				if( get_row_layout() == 'Section1' ):
					get_template_part( 'templates/inspection-immobiliere-a-montreal/Section1');

				elseif( get_row_layout() == 'Section2' ):
                    get_template_part( 'templates/inspection-immobiliere-a-montreal/Section2');

				elseif( get_row_layout() == 'form' ):
					get_template_part( 'templates/inspection-immobiliere-a-montreal/form');
				endif;
			endwhile;
		endif;

	

		?>

	</div><!-- #primary -->
	<!-- </div> -->
	<!-- end container -->
	<?php

		
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



<?php get_footer();?>
