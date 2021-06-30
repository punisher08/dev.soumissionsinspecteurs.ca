<?php
$form = get_sub_field('form_field');
$fields = get_sub_field('section1_fields');
$articles = get_sub_field('articles');
$slug = get_post_field( 'post_name' );
global $wp;
$current_url = home_url(add_query_arg(array(), $wp->request));

?>
<div class="container">
    <div class="with-padding">
        <h2 class="title-main text-justify"><?php echo $fields['title']; ?></h2>
        <ul class="list-link small-text" >
			<li><a href="/<?php echo $slug; ?>"><?=  $fields['breadcrumbs'];?></a></li>
		</ul>

        <div class="row">
            <div class="col-lg-4">
            <div class="row form3">
                    <div class="col-lg-8 article-form"><?=$form['form_title'];?> </div>
                    <div class="col-lg-4"><img src="<?=$form['logo']['url'];?>" alt=""> </div>

                    <div class="article-form-inputs">
                        <input type="text" class="form-control" placeholder="Prenom*">
                        <input type="text" class="form-control" placeholder="Nom*">
                        <input type="text" class="form-control" placeholder="Courriel*">
                        <input type="text" class="form-control" placeholder="Téléphone*">
                        <input type="text" class="form-control" placeholder="Type de Propriété:*">
                        <input type="text" class="form-control" placeholder="Type d'Inspection*">
                        <input type="text" class="form-control" placeholder="Date prévue*">
                        <input type="text" class="form-control" placeholder="Adresse à Inspecter*">
                        <input type="text" class="form-control" placeholder="Ville de l'Inspection **">
                        <input class="form-control"  placeholder="Code Postal de l'Inspection*"></input>
                        <textarea name="" id="" rows="3" placeholder="Autres précisions et détails*"></textarea>
                        <button class="btn btn-danger form-control article-form-btn" ><?php echo $form['button_text']; ?></button>
                        <p class="bottom-text-article"><?php echo $form['bottom_text']; ?></p>
                    </div>
            </div>
            </div>
            <!-- Second Column -->
            <div class="col-lg-8">   
                <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = ['post_type' => 'post', 'posts_per_page' => 5, 'paged' => $paged ];
                    $wp_query = new WP_Query($args);

                    $posts= get_posts($args);
                    $post_slug = get_post_field( 'post_name' );

                    $count_posts = count($posts);
                    $x=0;
                    while($x < $count_posts) 
                    {
                        $post_id = $posts[$x]->ID;
                        $featured_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ));
                        $contents = get_field('post_fields',$post_id);
                        $post_slug = $posts[$x]->post_name;
                       
                   
                      foreach($contents as $content)
                        {
                            $field = $content['contents']; ?>
                            <div class="row">
                                <div class="col-lg-5 img-post-thumbnail">
                               <img class="<?=$slug;?>-cropped-img" src="<?=$featured_img[0];?>" alt="Set Featured Image">
                                </div>

                                <div class="col-lg-7">
                                    <div class="post-title"><?=$field['title'];?></div>
                                </div>

                                <div class="the_contents-<?=$slug;?>">
                                        <?php 
                                        $the_contents = $field['the_content_of_the_posts']; 
                                        $truncated_contents = mb_strimwidth( $the_contents, 0, 200, "[...]");?>
                                        <div class="truncated-contents">
                                        <?php 
                                            if(strip_tags($truncated_contents) == null){
                                                echo '<p>'.$field['title'].'[....]</p>';
                                            }
                                            else{
                                                echo strip_tags($truncated_contents);
                                            }
                                        ?>
                                        </div>
                                    <div class="post-link-btn">
                                    <a href="<?=$post_slug;?>"><button class="btn btn-primary lire-la-suite-btn post-button">LIRE LA SUITE →</button></a>
                                    </div>

                                </div><!--end row -->
                            </div>
                    <?php
                        } //end foreach loop
                    $x++;
                    }//end  while loop ?>

            <div class="page-numbers-pagination"></div>
                <?php
        
             
                echo '<div class="d-flex justify-content-between">';
                previous_posts_link( '<button class="prev-page">Previous</button>' ); 
                    echo '<div>';
                        echo paginate_links();
                    echo '</div>';
                next_posts_link( '<button class="next-page">Next</button>', $wp_query ->max_num_pages);
                echo '</div>';
                ?>
            </div>
            
            </div>
        </div> <!--end row -->  
    </div>
</div>