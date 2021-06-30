<?php 
$section4 = get_sub_field('fields');
$slug = get_post_field( 'post_name' );
global $wp;
$current_url = home_url(add_query_arg(array(), $wp->request));

?>
<div class="container">
    <div class="with-padding">
        <div>
            <?=$section4['top_title']; ?>
        </div>
        <div class="row">

            <div class="col-lg-8">
                <?=$section4['left_content'];?>
            </div>
            <div class="col-lg-4">
                <img src="<?=$section4['right_image_content']['url'];?>" alt="">
            </div>
            
            <div>
            <?=$section4['below_content'];?>
            </div>
        </div>
    </div>
</div>