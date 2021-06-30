<?php

$footer = get_sub_field('footer_fields');



?>
<div class="footer" style="background-image:url(<?php echo $footer['background_image']['url']; ?>)">
	<div class="container">
        <div>
            <div class="row">
				<div class="col-lg-1"></div>
				<!-- top-footer -->
					<div class="col-lg-10"><div class="row">
							<div class="col-lg-2 footer-img-section1-col">
								<img class="index-image footer-img-section1" src="<?php echo $footer['left_column']['url']; ?>" alt="">
							</div>
							<!-- < ?php echo do_shortcode($footer['mid_column']);?> -->
							<!-- form field -->
							<div class="col-lg-8 form-footer">
									<!-- Form  -->
									<div class="row">
										<div class="" style="align-self: center;">
										<p class="logo-title" style="color:white; font-weight:500; font-size:15px; line-height:18px; padding-top:10px;"><?php echo $footer['mid_column']['form-top-text'];?></p>
										</div>
									</div>
									<form class="main-form-banner">
									<div class="row form-row">
										<div class="col-lg-6 mobile-form form-col-desktop" >
										<input type="text" class="form-control" placeholder="Prenom*">
										</div>
										<div class="col-lg-6 mobile-form">
										<input type="text" class="form-control" placeholder="Nom*">
										</div>
									</div>
									<br>
										<div class="row">
										<div class="col-lg-6 mobile-form form-col-desktop" >
										<input type="text" class="form-control" placeholder="Courriel*">
										</div>
										<div class="col-lg-6 mobile-form">
										<input type="text" class="form-control" placeholder="Téléphone*">
										</div>
									</div>
									<br>
										<div class="row">
										<div class="col-lg-6 mobile-form form-col-desktop" >
										<input type="text" class="form-control" placeholder="Type de propriete*">
										</div>
										<div class="col-lg-6 mobile-form">
										<input type="text" class="form-control" placeholder="Type d'Inspection*">
										</div>
									</div>
									<br>

									<div class="row">
										<div class="col-lg-6 mobile-form form-col-desktop" >
										<input type="text" class="form-control" placeholder="Date prevue*">
										</div>
										<div class="col-lg-6 mobile-form">
										<input type="text" class="form-control" placeholder="Adresse à Inspecter*">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-6 mobile-form form-col-desktop" >
										<input type="text" class="form-control" placeholder="Ville de l'Inspection*">
										</div>
										<div class="col-lg-6 mobile-form">
										<input type="text" class="form-control" placeholder="Code Postal de l'Inspection*">
										</div>
									</div>
									<br>
									
									
										<div class="row">
										<div class="col">
												<textarea class="form-control single-row" id="" rows="3" columns="12" placeholder="Autres précisions et détails*"></textarea>
												
										</div>
									</div><br>
									<div style="text-align:center">
										<button class="btn btn-danger form-control p-3 form-button" style="line-height:3px;"><?php echo $footer['mid_column']['button-text'];?></button>
										<div class="row"  >
											
											<div class="col" style="">
												<p style="color:white; font-size:12px; line-height:20px; font-style:initial; font-weight:100;"><?php echo $footer['mid_column']['bottom_text'];?></p>
											</div>
										</div>
									</div>
									</form>
								</div>
								<!-- end form field -->
							<div class="col-lg-2">
								<img  class="index-image" src="<?php echo $footer['right_column']['url']; ?>" alt="">
							</div>
						</div>  <!--end row -->
					</div>
					<!-- top-footer -->
				<div class="col-lg-1"></div>
			</div>
        </div>
		<!-- start row -->
			<div class="row">
				<div class="col-lg-1">
					
				</div>
				<div class="col-lg-10">
				
				<div class="col-lg-1">

				</div>
			</div>
			<!-- end row -->
		</div>
</div>

