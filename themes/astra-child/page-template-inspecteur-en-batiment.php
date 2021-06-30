<?php
/**
 * Template Name: Inspecteur En Batiment Template
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


		if( have_rows('fields_group') ):
			while( have_rows('fields_group') ): the_row();
		
				if( get_row_layout() == 'section1' ):
					get_template_part( 'templates/inspecteur-en-batiment/section1');

                elseif( get_row_layout() == 'section2' ):
                    get_template_part( 'templates/inspecteur-en-batiment/Section2');

                elseif( get_row_layout() == 'section3' ):
                        get_template_part( 'templates/inspecteur-en-batiment/Section3');
                        
                elseif( get_row_layout() == 'section4' ):
                    get_template_part( 'templates/inspecteur-en-batiment/Section4');

                elseif( get_row_layout() == 'section5' ):
                    get_template_part( 'templates/inspecteur-en-batiment/Section5');

                elseif( get_row_layout() == 'section6' ):
                    get_template_part( 'templates/inspecteur-en-batiment/Section6');

                 elseif( get_row_layout() == 'logo_content' ):
                        get_template_part( 'templates/inspecteur-en-batiment/logo_content');

                elseif( get_row_layout() == 'form' ):
                    get_template_part( 'templates/inspecteur-en-batiment/form');

                elseif( get_row_layout() == 'table1-with2-columns' ):
                    get_template_part( 'templates/inspecteur-en-batiment/table1');   

				elseif( get_row_layout() == 'half_form' ):
						get_template_part( 'templates/inspecteur-en-batiment/half_form');   

                elseif( get_row_layout() == 'section3' ):
                    get_template_part( 'templates/inspection-immobiliere-a-montreal/Section3');
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

	$args = array('post_type' => 'themetemplate',);

	$templates = new WP_Query( $args );
	
	if( $templates->have_posts() ) {
	}

	display_custom_footer($templates);
	

}
	?>



<?php get_footer();?>
