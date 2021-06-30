<?php
/**
 * Template Name: service-dinspection-immobilier Template
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


		if( have_rows('banner') ):
			while( have_rows('banner') ): the_row();
		
	
				if( get_row_layout() == 'section1' ):

					get_template_part( 'templates/pre-purchase-template/section1');
		
				// elseif( get_row_layout() == 'section1' ):
				
				// 	get_template_part( 'templates/pre-purchase-template/section1');

				elseif(get_row_layout()== 'section2'):
					get_template_part( 'templates/pre-purchase-template/section2');

				elseif(get_row_layout()== 'section3'):
						get_template_part( 'templates/pre-purchase-template/section3');

				elseif(get_row_layout()== 'section4'):
						get_template_part( 'templates/pre-purchase-template/section4');

				elseif(get_row_layout()== 'section5'):
							get_template_part( 'templates/pre-purchase-template/section5');
				elseif(get_row_layout()== 'table'):
								get_template_part( 'templates/pre-purchase-template/table');
				elseif(get_row_layout()== 'table2'):
								get_template_part( 'templates/pre-purchase-template/table2');
				elseif(get_row_layout()== 'table3'):
								get_template_part( 'templates/pre-purchase-template/table3');

				endif;
			endwhile;
		endif;

	

		?>

	</div><!-- #primary -->
	</div>
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
