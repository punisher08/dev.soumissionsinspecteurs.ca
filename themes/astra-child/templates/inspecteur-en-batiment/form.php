<?php
$form = get_sub_field('optional_form');

?>
	<div class="container">
	<div class="row form-section">
					<div class="col-lg-3">
					</div>
					<!-- start form -->
					<div class="col-lg-6 form2 mt-5">
					<div class="row">
							<div class="col-3" style="padding: 0px;text-align:right;">
								<img class="form-logo" style="height:100px;" src="<?php echo $form['form-top-image']['url']; ?>"> 
							</div>
							<div class="col" style="align-self: center;">
							<p class="logo-title" style="color:white; font-weight:500; font-size:15px; line-height:18px; padding-top:10px;"><?php echo $form['form-top-image-description']; ?></p>
							</div>
						</div>
						<form class="main-form-banner">
						<div class="row form-row">
							<div class="col-lg-6 mobile-form form-col-desktop" >
							<input type="text" class="form-control" placeholder="Nom*">
							</div>
							<div class="col-lg-6 mobile-form">
							<input type="text" class="form-control" placeholder="Prenom*">
							</div>
						</div>
						<br>
							<div class="row">
							<div class="col-lg-6 mobile-form form-col-desktop" >
							<input type="text" class="form-control" placeholder="Courriel*">
							</div>
							<div class="col-lg-6">
							<input type="text" class="form-control" placeholder="Téléphone*">
							</div>
						</div>
						<br>
							<div class="row">
							<div class="col-lg-6 mobile-form form-col-desktop" >
							<input type="text" class="form-control" placeholder="Type de Propriete*">
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
							<button class="btn btn-danger form-control mb-5 form-button" ><?php echo $form['button-text']; ?></button>
							<div class="row"  >
								
								<div class="col" style="">
									<p class="by-clicking"> <?php echo $form['bottom-text']; ?></p>
								</div>
							</div>
						</div>
						</form>
					<!-- end form -->
</div>
					<div class="col-lg-3">
						
					</div>
	</div>
					