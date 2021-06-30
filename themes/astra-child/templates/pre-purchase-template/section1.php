<?php 

$text__field = get_sub_field('text_field');
// $contact_field = get_sub_field('contact_field');
// $options = get_sub_field('options');
$img_class= $text__field['section1_image']['ID'];
$slug = get_post_field( 'post_name' );
global $wp;
$current_url = home_url(add_query_arg(array(), $wp->request))

?>
<div class="container">
<div class="with-padding">
<h2 class="title-main text-justify"><?php echo $text__field['h1']; ?></h2>
					<ul class="list-link small-text" >
						<li><a href="/<?php echo $slug; ?>"><?=  $text__field['small_text'];?></a></li>
					</ul>
					<div class="row">
					<div class="secxtion1-first-content"><?php echo $text__field['first_content']; ?></div><br>
					<?php
					if($text__field['h3'] != null){
						?>
						<h2  class="h2-subtitle mb-4"><em><?php echo $text__field['h3']; ?></em></h2><br>
						<?php
					}
					?>
					<!-- mobile img -->
						<div>
						<img class="mobile-section1-img-<?php echo $img_class;?>" src="<?php echo $text__field['section1_image']['url'] ?>" alt="">
						</div>
					</div>

					<!-- with columns -->
				<div class="row mx-2">
					<div class="col-lg-6 mx-0 px-0">
						<div style="font-size: 16px;"><?php echo $text__field['content']; ?></div>
						</div>
					<div class="col-lg-6 text-center">
						<img class="desktop-section1-img-<?php echo $img_class;?>" src="<?php echo $text__field['section1_image']['url'] ?>" alt="">
					</div>
					<!-- <div class="divider"> -->
						<?php
						if($slug == 'inspection-preachat'){
							?>
								<div class="divider-in-<?php echo the_title(); ?>">
								<hr style="border-top:1px solid black;" >
								</div>
							<?php
						}

						?>
					
				

					<div class="below-content-<?php echo the_title(); ?>">
						<?php echo  $text__field['below_content']; ?>
					<div>
					<?php
					
					if( empty($text__field['optional_form']))
					{
						?>
						<div class="row mt-5">
							<div class="col-lg-4 ">
							<!-- first col -->
							</div>
							<!-- Form -->   <!-- < ?php echo do_shortcode($footer['mid_column']);?> -->
							<div class="col-lg-4 form">
								<div class="row">
							<div class="col-3" style="padding: 0px;text-align:right;">
								<img class="form-logo" style="height:100px;" src="<?php echo $text__field['optional_form']['form-top-logo']['url'] ; ?>"> 
							</div>
							<div class="col" style="align-self: center;">
							<p class="logo-title" style="color:white; font-weight:500; font-size:15px; line-height:18px; padding-top:10px;">Compare 3 reliable Building Inspectors near you for your Pre-Purchase Inspection. Simply fill out the form!</p>
							</div>
						</div>
						<form class="main-form-banner">
						<div class="row form-row">
							<div class="col form-col-desktop" >
							<input type="text" class="form-control" placeholder="Last name*">
							</div>
							<div class="col">
							<input type="text" class="form-control" placeholder="First name*">
							</div>
						</div>
						<br>
							<div class="row">
							<div class="col form-col-desktop" >
							<input type="text" class="form-control" placeholder="Email*">
							</div>
							<div class="col">
							<input type="text" class="form-control" placeholder="Phone*">
							</div>
						</div>
						<br>
							<div class="row">
							<div class="col form-col-desktop" >
							<input type="text" class="form-control" placeholder="Property Type*">
							</div>
							<div class="col">
							<input type="text" class="form-control" placeholder="Type of Inspection*">
							</div>
						</div>
						<br>

						<div class="row">
							<div class="col form-col-desktop" >
							<input type="text" class="form-control" placeholder="Predicted date*">
							</div>
							<div class="col">
							<input type="text" class="form-control" placeholder="Address to Inspect(not yours)*">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col form-col-desktop" >
							<input type="text" class="form-control" placeholder="City of Inspection*">
							</div>
							<div class="col">
							<input type="text" class="form-control" placeholder="Postal Code of the Inspectorate*">
							</div>
						</div>
						<br>
						
						
							<div class="row">
							<div class="col">
									<textarea class="form-control" id="" rows="3" columns="12" placeholder="Other Clarifications and details*"></textarea>
									
							</div>
						</div><br>
						<div style="text-align:center">
							<button class="btn btn-danger form-control p-3 mt-5" style="width:70%; margin-bottom:20px; border-radius:15px;line-height: 0px;">Get My 3 Qoutes</button>
							<div class="row"  >
								
								<div class="col" style="">
									<p style="color:white; font-size:14px; line-height:15px;"> By clicking on the button, you agree to our Terms and Conditions</p>
								</div>
							</div>
						</div>
						</form>
					</div>
							</div>
							<!-- end Form -->
							<div class="col-lg-4">
							<!-- las col -->
							</div>
						
						</div>



						<?php
					}

					?>
</div>

