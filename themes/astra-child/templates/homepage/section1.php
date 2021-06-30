<?php
$section1 = get_sub_field('section1_groups');

?>


<div class="contianer">
    <div class="container">
    <div class="divider-image">
    <img class="img-<?php echo $section1['divider_image']['id'];?>" src="<?php  echo $section1['divider_image']['url'];?>" >
    </div>

    <div>
        <h2 class="h2-title-section1"> <?php echo $section1['main_title'];?></h2>
    </div>

    <div class="row">
        <div class="col-lg-2">
            
        </div>
        <div class="col-lg-8">
             <p class="section1-subtitle"><?php echo $section1['subtitle'];?></p>
        </div>
        <div class="col-lg-2">

        </div>
    </div><!-- end row -->

    <div class="row icons">
        <div class="col-lg-2">
           
        </div>
        <div class="col-lg-8">
            <div class="row">
            <div class="col-lg-4">
                <img class="icon" src="<?php  echo $section1['icon1']['url'];?>" >  
            </div>
            <div class="col-lg-4">
                 <img class="icon" src="<?php  echo $section1['icon2']['url'];?>" >
            </div>
            <div class="col-lg-4">
                <img class="icon" src="<?php  echo $section1['icon3']['url'];?>" >
            </div>
            </div>
          
        </div>
        <div class="col-lg-2">
          
        </div>
    </div><!-- end row -->

    <div class="row">
        <div class="col-lg-2">
            
        </div>
        <div class="col-lg-8">
             <p class="second-title-section1"><?php echo $section1['second_title'];?></p>
        </div>
        <div class="col-lg-2">

        </div>
    </div><!-- end row -->

    <div class="row">
        <div class="col-lg-2">
            
        </div>
        <div class="col-lg-8">
            <div class="row icons">
            <div class="col-lg-4">
                <img class="images" src="<?php  echo $section1['image1']['url'];?>" >
                <h2 class="img-text-inside"><?php  echo $section1['img-text1'];?></h2>
            </div>
            <div class="col-lg-4">
                <img class="images" src="<?php  echo $section1['image2']['url'];?>" >
                <h2 class="img-text-inside"><?php  echo $section1['img-text2'];?></h2>
            </div>
            <div class="col-lg-4">
                <img class="images" src="<?php  echo $section1['image3']['url'];?>" >
                <h2 class="img-text-inside"><?php  echo $section1['img-text3'];?></h2>
            </div>
            </div><!-- end row -->

        </div>
        <div class="col-lg-2">

        </div>
    </div>
    

    <div class="divider-image">
    <img src="<?php  echo $section1['divider_image']['url'];?>" >
    </div>

</div>
</div>