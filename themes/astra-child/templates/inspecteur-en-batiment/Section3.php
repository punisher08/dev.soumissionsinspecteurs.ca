<?php
$section3 = get_sub_field('fields');
$slug = get_post_field( 'post_name' );
global $wp;
$current_url = home_url(add_query_arg(array(), $wp->request));

?>


<div class="container">
    <div class="with-padding">

        <?=$section3['top_content'];?>
        <div class="mobile-img-<?=$section3['right_content']['id']?>">   <img class="img-<?=$slug;?>-<?=$section3['right_content']['id']?>" src="<?=$section3['right_content']['url']?>" alt=""></div>
        <div class="row">
            <div class="col-lg-6">
                <?=$section3['left_content'];?>
            </div>
            <div class="col-lg-6">
                <img class="desktop-img-<?=$section3['right_content']['id']?>" src="<?=$section3['right_content']['url']?>" alt="">
            </div>
        </div>
        <div>
            <?=$section3['below_content'];?>
        </div>
    </div>
</div>