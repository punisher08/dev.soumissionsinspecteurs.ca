<?php


global $wp;
$current_slug = $wp->request;
if($current_slug == 'soumissions'){?>

	<script>
		document.getElementById("first-contact").style.display ='none';
	</script>

	<?php }
	else{
		?>
		<script>
				document.getElementById("tagline").innerHTML ="<div class='tagline'>Trouvez votre Inspecteur en Bâtiment <br>Pour un excellent rapport qualité-prix,choisissez parmi vos 3<br> soumissions dès maintenan</div>";
	
		</script>
		<?php

	}
        $banner_group = get_sub_field('banner_group');
?>

<div class="custom-content" style="background-image:url(<?php echo $banner_group['background_image']['url'] ?>)">
				<div class="row">
					<div class="col-lg-3">
					<!-- first column -->
					</div>
					<div class="col-lg-6">
						<div class="subtitle"><?php echo $banner_group['form_title'];?></div>
					</div>
					<div class="col-lg-3">\
					<!-- last column -->
					</div>
				</div>
			<!-- form row -->
				<div class="row">
					<div class="col-lg-4 ">
					<!-- first column -->
					</div>
					<div class="col-lg-4 form">
						<!-- Form  -->
						<div class="row">
							<div class="col-3" style="padding: 0px;text-align:right;">
								<img class="form-logo" style="height:100px;" src="<?php echo $banner_group['form-top-logo']['url'];?>"> 
							</div>
							<div class="col" style="align-self: center;">
							<p class="logo-title" style="color:white; font-weight:500; font-size:15px; line-height:18px; padding-top:10px;"><?php echo $banner_group['form-top-logo-description'];?></p>
							</div>
						</div>
						<form class="main-form-banner">
						<div class="row form-row">
							<div class="col form-col-desktop" >
							<input type="text" class="form-control" placeholder="Nom*">
							</div>
							<div class="col">
							<input type="text" class="form-control" placeholder="Prenon*">
							</div>
						</div>
						<br>
							<div class="row">
							<div class="col form-col-desktop" >
							<input type="text" class="form-control" placeholder="Courriel*">
							</div>
							<div class="col">
							<input type="text" class="form-control" placeholder="Telephone*">
							</div>
						</div>
						<br>
							<div class="row">
							<div class="col form-col-desktop" >
							<input type="text" class="form-control" placeholder="Type of Prpriete*">
							</div>
							<div class="col">
							<input type="text" class="form-control" placeholder="Type d'Inspection*">
							</div>
						</div>
						<br>

						<div class="row">
							<div class="col form-col-desktop" >
							<input type="text" class="form-control" placeholder="Date prevue*">
							</div>
							<div class="col">
							<input type="text" class="form-control" placeholder="Adresse à Inspecter (pas la vôtre)*">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col form-col-desktop" >
							<input type="text" class="form-control" placeholder="Ville de l'Inspection *">
							</div>
							<div class="col">
							<input type="text" class="form-control" placeholder="Code Postal de l'Inspection *">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col form-col-desktop" >
							<input type="text" class="form-control" placeholder="Avez-vous une autre propriété?*">
							</div>
							<div class="col">
							<input type="text" class="form-control" placeholder="Code postal de votre maison actuelle?*">
							</div>
						</div>
						<br>
							<div class="row">
							<div class="col" >
								<input type="text" class="form-control" placeholder="Besoin d'autres services? (Cliquer pour choisir)*">
							</div>
						</div><br>
						
							<div class="row">
							<div class="col">
									<textarea class="form-control" id="" rows="3" columns="12" placeholder="Autres précisions et détails*"></textarea>
									
							</div>
						</div><br>
						<div style="text-align:center">
							<button class="btn btn-danger form-control form-button" ><?php echo $banner_group['button_text'];?></button>
							<div class="row"  >
								
								<div class="col" style="">
									<p class="by-clicking-text"><img width="80" height="30" src="<?php echo $banner_group['bottom-image']['url'];?>" alt=""><br class="mobile-text-image" style="display:none;"> <?php echo $banner_group['bottom_text'];?></p>
								</div>
							</div>
						</div>
						</form>
					</div>
					<div class="col-lg-4">\
					<!-- last column -->
					</div>
				</div>
				<!-- bottom images -->
				<div class="container">
					<div class="row">
						<div class="col-lg-1"></div>
						<div class="col-lg-10">
						<div class="row">
						<div class="col-lg-4 img-arrow-col">
							<img class="img-arrow" src="<?php  echo  $banner_group['arrow_img']['url'];?>" alt="">
						</div>
						<div class="col-lg-4">
								
						</div>
						<div class="col-lg-4">
							
						</div>
					</div>
				<!-- bottom banner --> 
			
				<div class="row">
					<div class="col-lg-4 box">
						<img src="<?php  echo  $banner_group['service-img-1']['url'];?>" alt="">
					
						<div class="d-flex p-1" style="background-color:#2ab4c5; border-radius:0;">
							<div class="card services"><h3 class="text-center"><?php  echo  $banner_group['process1']['left_content'];?></h3></div>
							<div class=""><?php  echo  $banner_group['process1']['right_content'];?></div>
						</div>
	
					</div>				

					<div class="col-lg-4 box">
						<img src="<?php  echo  $banner_group['service-img-2']['url'];?>" alt="">
					
						<div class="d-flex p-1" style="background-color:#2ab4c5; border-radius:0;">
							<div class="card services" ><h3 class="text-center"><?php  echo  $banner_group['process2']['left_content'];?></h3></div>
							<div class=""><?php  echo  $banner_group['process2']['right_content'];?></div>
						</div>
					</div>

					<div class="col-lg-4 box">
					<img src="<?php  echo  $banner_group['service-img-3']['url'];?>" alt="">
					<div class="d-flex p-1" style="background-color:#2ab4c5; border-radius:0;">
						<div class="card services" ><h3 class="text-center"><?php  echo  $banner_group['process3']['left_content'];?></h3></div>
						<div class=""><?php  echo  $banner_group['process3']['right_content'];?></div>
					</div>
					</div>
				</div>
				</div>

						</div>
						<div class="col-lg-1"></div>
					</div>
				<!-- end container -->
			</div>
			<!-- End content class -->