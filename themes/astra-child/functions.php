<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );



function display_custom_footer($templates){
			$custom = $templates->posts[0];
			$post_id =  $templates->posts[0]->ID;
			$layout = get_post_meta( $post_id);
		
			echo "
			<div>
				<div>
				<h1 class='text-center mt-3'>CUSTOM FOOTER NOT YET SET</h1>
				</div>
			</div>

			";


}

function display_posts(){
	$args = ['post_type' => 'post'];
	$posts= get_posts($args);
	echo '<pre>';
	print_r($posts);
	echo '</pre>';

   
	// foreach($posts as $post):
	// $post_slug = get_post_field( 'post_name' );
	// $post_id = $post->ID;
	// $featured_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ));
	// endforeach;
}



function display_default_footer($templates){
	$default = $templates->posts[1];
	$post_id =  $templates->posts[1]->ID;
	$layout = get_post_meta( $post_id);


	$first_column = $layout['default_footer_0_first_columns'][0];
	$second_column = $layout['default_footer_0_second_column'][0];
	$third_column = $layout['default_footer_0_third_column'][0];

	$copyright_text = $layout['default_footer_0_copyright'][0];

	$copyright_image_id = $layout['default_footer_0_copyright_image'][0];
	$copyright_img_url = wp_get_attachment_image_src( $copyright_image_id)[0]; 

	$footer_bg_image = $layout['default_footer_0_background_image'][0];
	$footer_img_url = wp_get_attachment_image_src( $footer_bg_image)[0]; 


	echo "<div class='footer mt-5' style='background-image:url($footer_img_url)'>
	<div class='container'>
		<div class='container with-padding'>
		<div class='row'>
			<div class='col-lg-4'>
			$first_column
			</div>
			<div class='col-lg-4'>
			$second_column
			</div>
			<div class='col-lg-4'>
			$third_column

			<div class='footer-form'>
		<form class='main-form-banner' style='line-height:5px;'>
		<div class='row form-row'>
			<div class='col form-col-desktop' >
			<input type='text' class='form-control' placeholder='Nom*'>
			</div>
			<div class='col'>
			<input type='text' class='form-control' placeholder='Email*'>
			</div>
		</div>
		<br>
			<div class='row'>
			<div class='col form-col-desktop' >
			<input type='text' class='form-control' placeholder='Tel*'>
			</div>
			<div class='col'>
			<input type='text' class='form-control' placeholder='Code Postal*'>
			</div>
		</div>
		<br>
			<div class='row'>
			<div class='col'>
					<textarea class='form-control' id='' rows='3' placeholder='Message*'></textarea>
					
			</div>
		</div><br>
		<div style='text-align:center'>
			<button class='btn btn-danger form-control tosend-btn' >ENVOYER</button>
		</div>
		</form>
					
	</div>
			</div>
		</div>
		<div class='copyright'>$copyright_text</span><img src='$copyright_img_url' alt=''>
		</div>
	</div>
</div>";
}

function the_breadcrumb() {

    $sep = ' > ';

    if (!is_front_page()) {
	
	// Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo '</a>' . $sep;
	
	// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
            the_category('title_li=');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
        }
	
	// If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }
	
	// If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }
	
	// if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }

        echo '</div>';
    }
}

function display_custom_header($templates){

	$default = $templates->posts[0];
	$post_id =  $templates->posts[0]->ID;
	$layout = get_post_meta( $post_id);
	$devenir_bg = get_stylesheet_directory_uri().'/assets/images/devenir_bg.jpg';
	$form_title = $layout['custom_header_0_form_title'];
	$form_heading = $layout['custom_header_0_heading'];
	$form_subheading = $layout['custom_header_0_subheading'];
	$background_image_id = $layout['custom_header_0_background_image'][0];
	$bg_img_url = wp_get_attachment_image_src( $background_image_id)[0]; 


	echo "
	<div class='custom-content custom-header' style='background-image:url($bg_img_url)'>
		<div class='container'>
			<div class='form-devenir'>
				<div class='card-header devenir-form'>$form_title[0]</div>
					<div class='card-body body-card'>
						<div class='heading'>
							<p class='card-text'>$form_heading[0]</p>
							<p class='card-text'>$form_subheading[0]</p>
								<div class='row'>
									<div class='col-lg-4'>
										<input type='text' class='form-control'>
									</div>
									<div class='col-lg-4'>
										<input type='text' class='form-control'>
									</div>
									<div class='col-lg-4'>
										<input type='text' class='form-control'>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>			
	";

}

function display_default_header($templates){



			// wp_get_attachment_image_src( $attachment_id); 

			$default = $templates->posts[1];
			$post_id =  $templates->posts[1]->ID;
			$layout = get_post_meta( $post_id);
			$form_top_logo_id = $layout ['default _header_0_form_top_logo'][0];
		

			$bg_image_id = $layout ['default _header_0_background_image'][0];
			$bg_img_url = wp_get_attachment_image_src( $bg_image_id)[0];
			
			$right_image_id = $layout ['default _header_0_right_image_for_background'][0];
			$right_img_url = wp_get_attachment_image_src( $right_image_id)[0]; 

			$bottom_image_id = $layout ['default _header_0_bottom_image'][0];
			$bottom_img_url = wp_get_attachment_image_src( $bottom_image_id)[0]; 

			$form_logo_img_url = wp_get_attachment_image_src( $form_top_logo_id)[0]; 

			$button_text = $layout['default _header_0_button_text'][0];
			$bottom_text = $layout['default _header_0_bottom_text'][0];

			$process1_left = $layout['default _header_0_process1_left_content'][0];
			$process1_right = $layout['default _header_0_process1_right_content'][0];
			
			$process2_left = $layout['default _header_0_process2_left_content'][0];
			$process2_right = $layout['default _header_0_process2_right_content'][0];
			
			$process3_left = $layout['default _header_0_process3_left_content'][0];
			$process3_right = $layout['default _header_0_process3_right_content'][0];

		
			$form_title = $layout['default _header_0_form_title'];
			$form_top_des = $layout['default _header_0_form-top-logo-description'];


			$arrow_image_id = $layout ['default _header_0_arrow_image'][0];
			$arrow_img_url = wp_get_attachment_image_src( $arrow_image_id)[0]; 
		

			$process1_img = get_stylesheet_directory_uri().'/assets/images/ACHETER-icon.png';
			$process2_img = get_stylesheet_directory_uri().'/assets/images/SOUCIEUX-icon.png';
			$process3_img = get_stylesheet_directory_uri().'/assets/images/VENDRE-icon.png';
			$bg_img = get_stylesheet_directory_uri().'/assets/images/header-bg.jpg';
			$man_img = get_stylesheet_directory_uri().'/assets/images/man-worker.png';
			
			echo "<div class='custom-content default-header'>
			<img  class='bg' src='$bg_img'>
			<div class='row'>
				<div class='col-lg-3'>
				<!-- first column -->
				</div>
				<div class='col-lg-6'>
					<div class='subtitle'>".$form_title[0]."</div>
				</div>
				<div class='col-lg-3'>
				
				</div>
			</div>
			<div class='row'>
		
				<div class='col-lg-4 '>
			
				</div>
				<div class='col-lg-4 form'>
					
					<div class='row'>
						<div class='col-3' style='padding: 0px;text-align:right;'>
							<img class='form-logo' style='height:100px;' src='".$form_logo_img_url."' alt=''> 
						</div>
						<div class='col' style='align-self: center;'>
						<p class='logo-title' style='color:white; font-weight:500; font-size:15px; line-height:18px; padding-top:10px;'>".$form_top_des[0]."</p>
						</div>
					</div>
					<form class='main-form-banner'>
					<div class='row form-row'>
						<div class='col-lg-6 mobile-form form-col-desktop' >
						<input type='text' class='form-control' placeholder='Nom*'>
						</div>
						<div class='col-lg-6 mobile-form'>
						<input type='text' class='form-control' placeholder='Prenon*'>
						</div>
					</div>
					<br>
						<div class='row'>
						<div class='col-lg-6 mobile-form form-col-desktop' >
						<input type='text' class='form-control' placeholder='Courriel*'>
						</div>
						<div class='col-lg-6 mobile-form'>
						<input type='text' class='form-control' placeholder='Telephone*'>
						</div>
					</div>
					<br>
						<div class='row'>
						<div class='col-lg-6 mobile-form form-col-desktop' >
						<input type='text' class='form-control' placeholder='Type of Prpriete*'>
						</div>
						<div class='col-lg-6 mobile-form'>
						<input type='text' class='form-control' placeholder='Type d'Inspection*'>
						</div>
					</div>
					<br>

					<div class='row'>
						<div class='col-lg-6 mobile-form form-col-desktop' >
						<input type='text' class='form-control' placeholder='Date prevue*'>
						</div>
						<div class='col-lg-6 mobile-form'>
						<input type='text' class='form-control' placeholder='Adresse à Inspecter (pas la vôtre)*'>
						</div>
					</div>
					<br>
					<div class='row'>
						<div class='col-lg-6 mobile-form form-col-desktop' >
						<input type='text' class='form-control' placeholder='Ville de l`Inspection *'>
						</div>
						<div class='col-lg-6 mobile-form'>
						<input type='text' class='form-control' placeholder='Code Postal de l`Inspection *'>
						</div>
					</div>
					<br>
					<div class='row'>
						<div class='col-lg-6 mobile-form form-col-desktop' >
						<input type='text' class='form-control' placeholder='Avez-vous une autre propriété?*'>
						</div>
						<div class='col-lg-6 mobile-form'>
						<input type='text' class='form-control' placeholder='Code postal de votre maison actuelle?*'>
						</div>
					</div>
					<br>
						<div class='row'>
						<div class='col mobile-form' >
							<input type='text' class='form-control single-row' placeholder='Besoin d`autres services? (Cliquer pour choisir)*'>
						</div>
					</div><br>
					
						<div class='row'>
						<div class='col mobile-form'>
								<textarea class='form-control single-row' id='' rows='3' placeholder='Autres précisions et détails*'></textarea>
								
						</div>
					</div><br>
					<div style='text-align:center'>
						<button class='btn btn-danger form-control form-button' >".$button_text."</button>
						<div class='row'  >
							
							<div class='col' style=''>
								<p class='by-clicking-text'><img width='80' height='30' src='$bottom_img_url' alt=''><br class='mobile-text-image' style='display:none;'> $bottom_text </p>
							</div>
						</div>
					</div>
					</form>
				</div>
				<div class='col-lg-4 man-work-div'>
				<img  class='man-work' src='$man_img' alt=''>
				</div>
			</div>
			<!-- bottom images -->
			<div class='container'>
				<div class='row'>
					<div class='col-lg-1'></div>
					<div class='col-lg-10 banner-group'>
					<div class='row'>
					<div class='col-lg-4 img-arrow-col'>
						<img class='img-arrow' src='$arrow_img_url' alt=''>
					
					</div>
					<div class='col-lg-4'>
							
					</div>
					<div class='col-lg-4'>
					
					</div>
				</div>
	
		
			<div class='row'>
				<div class='col-lg-4 box'>
					<img src='$process1_img' alt=''>
				
					<div class='d-flex p-1 services-box' style='background-color:#2ab4c5; border-radius:0;'>
						<div class='card services'><div class='text-center'>".$process1_left."</div></div>
						<div class=''>".$process1_right."</div>
					</div>

				</div>				

				<div class='col-lg-4 box'>
					<img src='$process2_img' alt=''>
				
					<div class='d-flex p-1' style='background-color:#2ab4c5; border-radius:0;'>
						<div class='card services' ><h3 class='text-center'>".$process2_left."</h3></div>
						<div class=''>".$process2_right."</div>
					</div>
				</div>

				<div class='col-lg-4 box'>
				<img src=$process3_img'' alt=''>
				<div class='d-flex p-1' style='background-color:#2ab4c5; border-radius:0;'>
					<div class='card services third-column' ><h3 class='text-center'>".$process3_left."</h3></div>
					<div class=''>".$process3_right."</div>
				</div>
				</div>
			</div>
			</div>

					</div>
					<div class='col-lg-1'></div>
				</div>

		</div>
		</div>
		";
		
}

function create_themetemplate_cpt() {

	$labels = array(
		'name' => _x( 'Theme templates', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Theme template', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Theme templates', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Theme template', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Theme template Archives', 'textdomain' ),
		'attributes' => __( 'Theme template Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Theme template:', 'textdomain' ),
		'all_items' => __( 'All Theme templates', 'textdomain' ),
		'add_new_item' => __( 'Add New Theme template', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Theme template', 'textdomain' ),
		'edit_item' => __( 'Edit Theme template', 'textdomain' ),
		'update_item' => __( 'Update Theme template', 'textdomain' ),
		'view_item' => __( 'View Theme template', 'textdomain' ),
		'view_items' => __( 'View Theme templates', 'textdomain' ),
		'search_items' => __( 'Search Theme template', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Theme template', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Theme template', 'textdomain' ),
		'items_list' => __( 'Theme templates list', 'textdomain' ),
		'items_list_navigation' => __( 'Theme templates list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Theme templates list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Theme template', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-customizer',
		'supports' => array('title', 'page-attributes', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'themetemplate', $args );

}
add_action( 'init', 'create_themetemplate_cpt', 0 );