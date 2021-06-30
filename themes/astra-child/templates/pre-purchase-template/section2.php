<?php 

$text__field = get_sub_field('text_field');
$text__field2 = get_sub_field('text_field2');

?>

                <h2 class="h2-title"><?php echo $text__field['title']; ?></h2>
					<p class="mt-4">
					<?php echo $text__field['content']; ?>
					</p>

                    <h2 class="h2-title"><?php echo $text__field2['title']; ?></h2>
					<p style="text-align: justify;" class="mt-4"><?php echo $text__field2['content']; ?>
					</p>
                    <div class="row">
						<div class="col-lg-5">
							<img class="section2-img" src="<?php echo $text__field2['image']['url'] ?>" alt="">
						</div>

						<div class="col-lg-7">
							<p>
                            <?php echo $text__field2['image_content']; ?>
							</p>
						</div>
					</div>
                            <div>
                            <?php echo $text__field2['below_content']; ?>
							</div>
				</div>
