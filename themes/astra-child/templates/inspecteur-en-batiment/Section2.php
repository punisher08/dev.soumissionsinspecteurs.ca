<?php 
$section2 = get_sub_field('fields');
$slug = get_post_field( 'post_name' );
global $wp;
$current_url = home_url(add_query_arg(array(), $wp->request));
?>
<div class="container">
    <div class="with-padding">
        <h2 class="h2-<?=$slug;?>"><?=$section2['title'];?></h2>
        <img  class="mobile-img-<?=$section2['right_image']['id'];?>" src="<?=$section2['right_image']['url'];?>" alt="">

        <div class="row">
            <div class="col-lg-6">
                <div>
                <?=$section2['left_content'];?>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                 <img  class="desktop-img-<?=$section2['right_image']['id'];?>" src="<?=$section2['right_image']['url'];?>" alt="">
                </div>
            </div>
        </div><!--end row -->

        <div>
            <?=$section2['below_content'];?>
        </div>
        <div class="row">
            <?=$section2['top_content'];?>
 <?php if($section2['title2'] != null ){ ?>
            <div class="title2">
                <?=$section2['title2'];?>
               <div class="img2-<?=$section2['right_image2']['id'];?>"> <img  class="mobile-img-<?=$section2['right_image2']['id'];?>" src="<?=$section2['right_image2']['url'];?>" alt=""></div>
            </div>

            <div class="col-lg-6">
                <?=$section2['left_content2'];?>
            </div>
            <div class="col-lg-6">
                 <img  class="desktop-img-<?=$section2['right_image2']['id'];?>" src="<?=$section2['right_image2']['url'];?>" alt="">
            </div>
 <?php } ?>
            <div> <?=$section2['below_content2'];?></div>
        </div>
    </div>
</div>