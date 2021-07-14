<?php
get_header();
// First we need to show content from WordPress editor so use this code:
if ( have_posts() ){

    $pTitle = get_the_title( get_the_ID() );


    while ( have_posts() ) : the_post()
        ?>
  		 <style>
/* 			 header:before{
				content: "";
				width: 100%;
				height: 60px;
				background-color: #fff;
				position: absolute;
				top: -60px;
			}
			body{
				background-color: #EBEBEC;
			}	 */
			.SINGLEBLOGWRAP .center p{
				margin: 0;
			} 
			.SINGLEBLOGWRAP .per-10.d-flex.flex-direction-column{
				margin:0 30px;
			}
			 
            @media only screen and (max-width: 1000px) {
				.SINGLEBLOGWRAP .per-10.d-flex.flex-direction-column{
					margin:0!important;
				}
                .SINGLEBLOGWRAP .left{
                    display: none;
                }
                .SINGLEBLOGWRAP {
                    margin-top: 0;
                }
                input[type="search"]{
                    display: none;
                }
                .OURSERVICES_widget,.REQUESTAPPOINTMENT_widget{
                    margin: 0 30px;
                }
            }
        </style>

        <div class="per-10  SINGLEBLOGWRAP">
            <h1>BLOG</h1>
            <div class="per-10 d-flex flex-direction-column">
                <div class="per-2 left">
                    <?php
                        $my_query = new WP_Query(array(
                            'post_type' => 'post',
							'post_status' => 'publish',
                            'orderby' => 'rand',
                            'showposts' => 4
                        ));

                        while ($my_query->have_posts()) : $my_query->the_post();
            ?>
					

                    <div class="eachOtherPost">
                        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                        <p>
                            <?php  the_excerpt(); ?>
                        </p>
                        <svg version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                             x="0px" y="0px" width="38.7px" height="2.9px" viewBox="0 0 38.7 2.9" style="enable-background:new 0 0 38.7 2.9;"
                             xml:space="preserve">
<style type="text/css">
    .st0{fill:#FFFFFF;}
</style>
                            <defs>
                            </defs>
                            <g>
                                <path class="st0" d="M37.2,0h-29C7.4,0,6.7,0.7,6.7,1.5c0,0.8,0.7,1.5,1.5,1.5h29c0.8,0,1.5-0.7,1.5-1.5C38.7,0.7,38,0,37.2,0
		L37.2,0z"/>
                                <path class="st0" d="M2.7,0H1.5C0.7,0,0,0.7,0,1.5c0,0.8,0.7,1.5,1.5,1.5h1.3c0.8,0,1.5-0.7,1.5-1.5C4.2,0.7,3.5,0,2.7,0L2.7,0z"/>
                            </g>
</svg>
                    </div>

                 <?php wp_reset_query(); endwhile; ?>

                </div>
                <div class="per-6 center mw-100m">

                    <?php
                    the_post_thumbnail('medium');
                    the_content() ?>
                </div>
                <div class="per-2 right mw-100m">
                    <input type="search" placeholder="Search" id="search"  style="background-image: url('<?php bloginfo("template_directory"); ?>/images/search-icon.svg')">

                    <div class="OURSERVICES_widget">
                        <h6>OUR SERVICES</h6>
                        <p>
                            We strive to provide complete care for our patients. Learn more about all the services we provide.
                        </p>
                        <a href="<?php echo get_home_url() ?>/services/">READ MORE</a>
                    </div>


                    <div class="REQUESTAPPOINTMENT_widget">
                        <h6>REQUEST AN APPOINTMENT</h6>
                        <p>We will do our best to accommodate your busy schedule. Request an appointment today!</p>
                        <a target="_blank" href="https://my.vitusvet.com/Prescription/Refill/6e319cf4-a05b-43e3-8be1-385c053b1814">REQUEST NOW</a>
                    </div>
                </div>
            </div>

        </div>






    <?php
    endwhile;
}
?>
<script>

    $('.sa_logo').children().remove()
    let logo = '<?php bloginfo("template_directory"); ?>/images/blog-logo.png';
    $('.sa_logo').html('<img src='+logo+' alt="">')
	
	$('#search').keypress(function (e) {
        if (e.which == '13') {
            let search_value =  $(this).val();
            window.location.href = '<?php echo get_home_url() ?>/search/?search_value='+search_value;
        }
    });
	
</script>
<?php
get_footer();
?>




