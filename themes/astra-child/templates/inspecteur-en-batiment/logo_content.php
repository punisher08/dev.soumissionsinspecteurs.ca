<?php
$logo = get_sub_field('fields');
$slug = get_post_field( 'post_name' );
global $wp;
$current_url = home_url(add_query_arg(array(), $wp->request));

?>

<div class="container">
    <div class="with-padding">
       <div class="<?=$slug;?>-page">
            <img src="<?=$logo['main_logo']['url'];?>" alt="">
       </div> 
       <div>
           <?=$logo['below_content'];?>
       </div>
    </div>
</div>