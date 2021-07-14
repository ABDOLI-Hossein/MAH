<?php
/*Template Name: Blog2 */
get_header();
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$my_query = new WP_Query(array(
    'post_type' => 'post',
    'paged' => $paged,
    'posts_per_page' => 3
));
?>
<style>
/* 	body{
		background-color: #EBEBEC;
	} */
/* 	header:before{
		content: "";
		width: 100%;
		height: 60px;
		background-color: #fff;
		position: absolute;
		top: -59px;
	} */
	
	.eachCardWrap:nth-child(odd) .per-8{
		flex-direction: row-reverse;
	}
	
	.eachCardWrap:nth-child(odd) .per-8 .right{
		border-radius: 10px 0 0 10px!important;
	}
	
	
	
	
	@media only screen and (max-width: 1000px) {
		.eachCardWrap .left img {
    		height:auto!important;
		}
/* 		.sa_logo {
			top:-15px;
		} */
		.eachCardWrap:nth-child(odd) .per-8{
			flex-direction: column;
		}
		.eachCardWrap:nth-child(odd) .per-8 .right{			
			border-radius: 0 0 10px 10px!important;
		}
	}
</style>

    <div class="saBlogCardWrap" style="margin-top: 15px">
        <h1>OUR <b>BLOG</b></h1>
        <?php
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <div class="per-10 eachCardWrap">
                <div class="per-8 mrl-auto d-flex flex-direction-column">
                    <div class="per-5 left mw-100m">
                        <!--                        <img src='--><?php //bloginfo("template_directory"); ?><!--/images/blog_thumbnail.png' alt="">-->
                        <?php  the_post_thumbnail('medium-large');  ?>
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

            <?php wp_reset_query(); endwhile; ?>

    </div>

<?php
if (function_exists("cpt_pagination")) {
    cpt_pagination($my_query->max_num_pages);
}
?>




    <script>

        if($(window).width() < 1000){
            $('.homePart1 .right svg,.homePart4 .left svg').removeAttr('width').removeAttr('height')
        }


        $('.sa_logo').children().remove()
        let logo = '<?php bloginfo("template_directory"); ?>/images/blog-logo.png';
        $('.sa_logo').html('<img src='+logo+' alt="">')

    </script>

<?php
get_footer();
?>