<?php
$section1 = get_sub_field('text_fields');
$slug = get_post_field( 'post_name' );
global $wp;
$current_url = home_url(add_query_arg(array(), $wp->request));
?>

<div class="container">
    <div class="with-padding">
    <h2 class="section2-<?=$slug?>-title"><?php echo $section1['h1']; ?></h2>
        <img class="mobile-img-<?php echo $section1['right_image']['id'];?>" src="<?php echo $section1['right_image']['url'] ?>" alt="">
        <div class="row">
            <div class="secction1-first-content"><?php echo $section1['first_content']; ?></div>
            <h2 class="h2-title-enbatiment"><?php echo $section1['first_content_title']; ?></h2>
                <!-- <div class="mobile-div-img-< ?php echo $section1['right_image']['id'];?>">
                 <img class="mobile-img-< ?php echo $section1['right_image']['id'];?>" src="<?php echo $section1['right_image']['url'] ?>" alt="">
                </div> -->
            <div class="col-lg-8">
                <div>
                 <?=  $section1['left_text_content'];?>
                </div>
            </div>
            <div class="col-lg-4">
                <div>
                 <img class="desktop-img-<?php echo $section1['right_image']['id'];?>" src="<?php echo $section1['right_image']['url'] ?>" alt="">
                </div>
            </div>
        </div>
        <div>
        <?php echo $section1['below_content']; ?>
        </div>
    </div>
</div>