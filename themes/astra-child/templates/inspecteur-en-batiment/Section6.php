<?php
$section6 = get_sub_field('fields');
$slug = get_post_field( 'post_name' );
global $wp;
$current_url = home_url(add_query_arg(array(), $wp->request));

?>

<div class="container">
    <div class="with-padding">
        <div class="<?=$slug;?>-title">
            <?=$section6['title'];?>
        </div>
        <div class="<?=$slug;?>-content">
             <?=$section6['top_content'];?>
        </div>
        <div class="<?=$slug;?>-image">
            <img class="<?=$slug;?>-image-<?=$section6['center_image']['id'];?>" src="<?=$section6['center_image']['url'];?>" alt="">
        </div>
        <?=$section6['below_content'];?>
    </div>
</div>