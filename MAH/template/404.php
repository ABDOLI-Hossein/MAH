<?php


/**
 * Template Name: 404
 * Template Post Type: post, page
 */
get_header();
?>

    <style>
		header:after {
			height: 600px!important;
		}
		
        .p_404 h1{
            font-size: 35px;
            text-align: center;
            color: #25a1d8;
			font-weight: 500;
			padding-top:45px;

        }
        .p_404 .wrap_content{
            position: relative;
			width: 100%;
    		height: 350px;
    		margin: 0 auto;
    		display: flex;
    		align-items: flex-end;
    		justify-content: center;
        }
        .p_404 .svg_wrapper{
            color: #fff;
            font-size: 73px;
            width: 300px;
            height: 300px;
			position: absolute;
    		background-repeat: no-repeat;
    		display: flex;
    		top: 0;    
    		left: 0;
        }
		.svg_wrapper span{
			    position: absolute;
    			top: 60px;
    			left: 45px;
			    font-weight: 900;
		}
		.p_404  .wrap_whole{
			background: #fff;
			padding: 45px 115px;
			box-shadow: 0 0 20px 0 #b0b0b0;
			flex-direction: column;
    		align-items: center;
			position:relative;
		}
		.p_404 .wrap_whole svg:first-child{
			position:absolute;
			right: -32px;
		}
		.p_404 .wrap_whole svg:nth-child(2){
			position:absolute;
			bottom: 0;
    		left: -80px;
		}
		.p_404 a{
			background-color: #85bf3f;
			border: 1px solid #85bf3f;
			color: #fff;
			font-size: 15px;
			text-transform: uppercase;
			padding: 15px 20px;
			display: flex;
			width: 160px;
			margin: 0 auto;
			justify-content: center;
			margin-top: 45px;
			transition:1s all ease;
		}
		.p_404 a:hover{
			background:#fff;
			color:#85bf3f;
			
		}
		footer{
			 margin-top: 45px!important;
		}
		
		
		@media only screen and (max-width: 1000px){
    
			.p_404 .wrap_whole {
				padding: 45px 20px;			
			}
			
			.p_404 .wrap_whole img{
				    max-width: 60%;
			}
			.p_404 h1 {
				padding-top:0;
				font-size:30px;
			}
			.svg_wrapper{
				width: 160px!important;
    			height: 198px!important;
				background-size:contain!important;
				font-size:43px!important;
			}
			.p_404 .wrap_content {
				height:225px;
			}
			.svg_wrapper span {
				top: 41px;
				left: 31px;
			}
		}
		
		
		
		
    </style>



<div class="per-10 p_404" style="margin-top: 45px">
    <div class="per-7 mw-100m mrl-auto d-flex wrap_whole flex-direction-column">
		
		<svg class="d-noneM" width="60" height="14" viewBox="0 0 66 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g>
            <path d="M19.2642 13.6615C19.1824 13.6615 19.1014 13.6556 19.018 13.6438C18.0649 13.5077 17.403 12.6212 17.5374 11.6617C17.8028 9.76949 17.3204 7.88736 16.1795 6.3615C15.0395 4.83395 13.3753 3.84583 11.4958 3.57864C7.61822 3.02408 4.01526 5.75485 3.46693 9.66026C3.33256 10.6198 2.45205 11.2886 1.49894 11.1517C0.546668 11.0164 -0.116837 10.1283 0.017533 9.16956C0.834604 3.34925 6.20441 -0.715806 11.984 0.105944C17.7653 0.928534 21.8039 6.33209 20.986 12.1524C20.8633 13.0279 20.118 13.6615 19.2642 13.6615Z" fill="#231F20"></path>
            <path d="M46.7366 14C45.8828 14 45.1367 13.3673 45.014 12.491C44.1969 6.67151 48.2355 1.26795 54.0168 0.444524C56.8194 0.0470931 59.6044 0.769695 61.8645 2.48125C64.1246 4.19365 65.5868 6.68915 65.9832 9.50814C66.1176 10.4677 65.4541 11.355 64.5018 11.4903C63.5487 11.6247 62.6682 10.9575 62.5339 9.99884C62.2676 8.10663 61.287 6.43288 59.7697 5.28428C58.2532 4.13568 56.382 3.6475 54.505 3.91722C50.625 4.46925 47.915 8.09571 48.4634 12.0003C48.5977 12.9598 47.9351 13.8463 46.9828 13.9824C46.8993 13.9942 46.8176 14 46.7366 14Z" fill="#231F20"></path>
        </g>
        <defs>
            <clipPath id="clip0">
                <rect width="66" height="14" fill="white"></rect>
            </clipPath>
        </defs>
    	</svg>
		
		
		
		<svg class="d-noneM" width="17" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M14.7431 3.39984C14.7431 5.27633 13.2562 6.79968 11.4218 6.79968C9.58603 6.79968 8.09912 5.27633 8.09912 3.39984C8.09912 1.52204 9.58603 0 11.4218 0C13.2562 0 14.7431 1.52204 14.7431 3.39984Z" fill="#231f20"></path>
			<path d="M23 14.6002C23 16.4766 21.513 18 19.6786 18C17.8441 18 16.356 16.4766 16.356 14.6002C16.356 12.7224 17.8441 11.2003 19.6786 11.2003C21.513 11.2003 23 12.7224 23 14.6002Z" fill="#231f20"></path>
			<path d="M6.64399 14.6002C6.64399 16.4766 5.15708 18 3.32263 18C1.48818 18 0 16.4766 0 14.6002C0 12.7224 1.48818 11.2003 3.32263 11.2003C5.15708 11.2003 6.64399 12.7224 6.64399 14.6002Z" fill="#231f20"></path>
    	</svg>
		
        <div class="wrap_content">
            <div class="svg_wrapper" style="background: url('<?php bloginfo("template_directory"); ?>/images/404-img.svg') no-repeat"><span>404</span></div>
            <img src='<?php bloginfo("template_directory"); ?>/images/404-img.png'>
        </div>


        <h1>LOOKS LIKE <b>YOU’VE GOT LOST...</b></h1>
    </div>
	
	<a href="<?php echo get_home_url()  ?>">Go Home</a>
</div>






<?php get_footer(); ?>