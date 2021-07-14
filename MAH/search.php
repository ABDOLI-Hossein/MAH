<?php


/**
 * Template Name:  sa search MAH
 * Template Post Type: post, page
 */
get_header();

$search_value = $_GET['search_value'];
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$my_query = new WP_Query(array(
    'post_type' => 'post',
    'paged' => $paged,
    'posts_per_page' => 3,
    's' => $search_value
));
    if($my_query->post_count === 0){
        ?>
            <style>
				header:before{
					content: "";
					width: 100%;
					height: 60px;
					background-color: #fff;
					position: absolute;
					top: -60px;
				}
				
                .not_found_error{
                    margin: 150px auto 300px auto;
                    text-align: center;
                }
                body{
                    background-color: #EBEBEC;
                }
                .not_found_error h1{
                    font-size: 50px!important;
                    font-weight: 400;
                    color: #25a3da;
                    text-align: center;
                }
                .not_found_error a{
                    font-size: 25px;
                    color: #25a3da;
                    text-align: center;
                    display: block;
                    text-decoration: none;
                }
            </style>
            <div class="not_found_error">
                <h1>No posts found</h1>
                <a href="<?php echo get_home_url() ?>/mah-blog/">Go to blog</a>
            </div>

        <?php
    }else{


        while ($my_query->have_posts()) : $my_query->the_post();

?>

    <div class="per-10 eachCardWrap" style="margin-top: 50px;">
        <div class="per-8 mrl-auto d-flex flex-direction-column">
            <div class="per-5 left mw-100m">
                <!--                        <img src='--><?php //bloginfo("template_directory"); ?><!--/images/blog_thumbnail.png' alt="">-->
                <?php  the_post_thumbnail();  ?>
            </div>
            <div class="per-5 right mw-100m">
                <h6>
                    <?php the_title(); ?>
                </h6>
                <?php
                the_excerpt();
                ?>

                <a href="<?php the_permalink() ?>">Read More</a>
            </div>
        </div>
    </div>


<?php
    wp_reset_query();
    endwhile;
    }
        if (function_exists("cpt_pagination")) {
            cpt_pagination($my_query->max_num_pages);
        }




    get_footer();
    ?>
