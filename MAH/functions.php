<?php
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
    wp_enqueue_script('jquery');
}



function load_stylesheets(){

    wp_register_style('fontawesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
    wp_enqueue_style('fontawesome');

    wp_register_style('modal',get_template_directory_uri() . '/css/modal.css',array(),1,'all');
    wp_enqueue_style('modal');


    wp_register_style('OwlCarousel',get_template_directory_uri() . '/css/owl.carousel.min.css',array(),1,'all');
    wp_enqueue_style('OwlCarousel');

    wp_register_style('OwlCarousel-theme',get_template_directory_uri() . '/css/owl.theme.default.min.css',array(),1,'all');
    wp_enqueue_style('OwlCarousel-theme');


    wp_register_style('styles',get_template_directory_uri() . '/css/styles.css',array(),2,'all');
    wp_enqueue_style('styles');

}
add_action('wp_enqueue_scripts','load_stylesheets');









//load scripts
function addjs()
{



    wp_register_script('jquery',get_template_directory_uri() . '/js/jQuery.js',array(),1,1,1);
    wp_enqueue_script('jquery');

    wp_register_script('OwlCarousel',get_template_directory_uri() . '/js/owl.carousel.min.js',array(),1,1,1);
    wp_enqueue_script('OwlCarousel');
	
	wp_register_script('inputmask',get_template_directory_uri() . '/js/jquery.inputmask.min.js',array(),1,1,1);
    wp_enqueue_script('inputmask');
	
	wp_register_script('sweetalert','//cdn.jsdelivr.net/npm/sweetalert2@11');
    wp_enqueue_script('sweetalert');


    wp_register_script('modal',get_template_directory_uri() . '/js/modal.js',array(),1,1,1);
    wp_enqueue_script('modal');
	
	
    wp_register_script('custom',get_template_directory_uri() . '/js/custom.js',array(),1,1,1);
    wp_enqueue_script('custom');



}
add_action('wp_enqueue_scripts','addjs');

add_theme_support('menus');

//Register menus
function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active';
    }
    return $classes;
}





function message_form() {


    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'sorushabdoli@gmail.com';
    $subject = "Report";
    $headers = array('Content-Type: text/html; charset=UTF-8','From:'.$email,'Cc:  rajabitr@gmail.com');
    $m = wp_mail($to, $subject, $message,$headers);
    wp_send_json($m);


}
add_action('wp_ajax_message_form', 'message_form');
add_action("wp_ajax_nopriv_message_form", 'message_form');

add_theme_support( 'post-thumbnails' );



//  Custom post type pagination function

function cpt_pagination($pages = '', $range = 4)
{
    $showitems = ($range * 2)+1;
    global $paged;
    if(empty($paged)) $paged = 1;
    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }
    if(1 != $pages)
    {
        echo "<nav aria-label='Page navigation example'>  <ul class='pagination'>";
        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
        if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
                echo ($paged == $i)? "<li class=\"page-item active\"><a class='page-link'>".$i."</a></li>":"<li class='page-item'> <a href='".get_pagenum_link($i)."' class=\"page-link\">".$i."</a></li>";
            }
        }
        if ($paged < $pages && $showitems < $pages) echo " <li class='page-item'><a class='page-link' href=\"".get_pagenum_link($paged + 1)."\">i class='flaticon flaticon-back'></i></a></li>";
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo " <li class='page-item'><a class='page-link' href='".get_pagenum_link($pages)."'><i class='flaticon flaticon-arrow'></i></a></li>";
        echo "</ul></nav>\n";
    }
}








function  request_appointment(){
    $name = $_POST['name'];
    $patient_type=$_POST['patient_type'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time_of_day = $_POST['time_of_day'];
    $comment = $_POST['comment'];
    wp_send_json($date);

}
add_action('wp_ajax_request_appointment', 'request_appointment');
add_action("wp_ajax_nopriv_request_appointment", 'request_appointment');


function contactUsForm() {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    wp_send_json($phone);
    exit();

}
add_action('wp_ajax_contactUsForm', 'contactUsForm');
add_action("wp_ajax_nopriv_contactUsForm", 'contactUsForm');



















