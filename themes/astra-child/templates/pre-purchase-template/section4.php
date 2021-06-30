<?php
$section4 = get_sub_field('fields');
$second_field = get_sub_field('second_fields');
?>

<!-- <div class="container"> -->
    <div class="">
        <?php echo $section4['above_content'];?>
				<div class="mobile-section4-<?php echo $section4['right_content_image']['id'];?>" style="display:block;">
					<img class="mobile-section4-img-<?php echo $section4['right_content_image']['id'];?>" src="<?php echo $section4['right_content_image']['url'];?>" alt="">
				</div>
				
            <div class="row">
				<div class="col-lg-6">
                <?php echo $section4['left_content'];?>
				</div>
							
				<div class="col-lg-6 text-center">
					<img class="desktop-section4-img-<?php echo $section4['right_content_image']['id'];?>" src="<?php echo $section4['right_content_image']['url'];?>" alt="">
				</div>
                <?php echo $section4['below_content'];?>
			</div>

            <div class="row">
						<div class="col-lg-6">
						<?php echo $second_field['title'];?>
						<div class="mobile-section4-<?php echo $second_field['right_image_content']['id'];?>">
							<img class="mobile-section4-img" src="<?php echo $second_field['right_image_content']['url'];?>" alt="">
						</div>
                        <?php echo $second_field['left_content'];?>
						</div>

						<div class="col-lg-6 text-center desktop-section4">
							<img class="desktop-section4-img-<?php echo $second_field['right_image_content']['id'];?>" src="<?php echo $second_field['right_image_content']['url'];?>" alt="">
						</div>
						<p>
                        <?php echo $second_field['below_content'];?>
						</p>
			</div>

				
	
    </div>
<!-- </div> -->