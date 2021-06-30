<?php
$posts = get_sub_field('contents');
$slug = get_post_field( 'post_name' );
?>
<div class="container">
    <div class="with-padding">
        <h2 class="title-main text-justify"><?php echo $posts['title']; ?></h2>
            <ul class="list-link small-text" >
                <li><a href="/<?php echo $slug; ?>"><?=  $posts['breadcrumbs'];?></a></li>
            </ul>
        <div class="the-contents">
            <?=$posts['the_content_of_the_posts'];?>
        </div>
    </div>
</div>