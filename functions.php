<?php 

function wpdocs_register_plugin_styles()
 {
	
	 wp_register_style('animate', get_template_directory_uri() . '/assets/vendor/animate.css/animate.min.css', array(), 1, 'all');
    wp_enqueue_style('animate');
	
	 wp_register_style('aosa', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), 1, 'all');
    wp_enqueue_style('aosa');
	
	 wp_register_style('bootstrapMIn', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrapMIn');
	
	
	 wp_register_style('bs_icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), 1, 'all');
    wp_enqueue_style('bs_icons');
	

   wp_register_style('boxicon', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), 1, 'all');
    wp_enqueue_style('boxicon');

    wp_register_style('light_box', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', array(), 1, 'all');
    wp_enqueue_style('light_box');

    wp_register_style('remixicon', get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css', array(), 1, 'all');
    wp_enqueue_style('remixicon');

    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
    wp_enqueue_style('style');

    wp_register_style('costume_css', get_template_directory_uri() . '/assets/css/costumeStylelo.css', array(), 1, 'all');
    wp_enqueue_style('costume_css');


//    wp_register_style('normalize', get_template_directory_uri() . '/assets/normalize.css', array(), 1, 'all');
//    wp_enqueue_style('normalize');
//
//    wp_register_style('responsive', get_template_directory_uri() . '/assets/responsive.css', array(), 1, 'all');
//    wp_enqueue_style('responsive');
//    wp_deregister_style('style');
//    wp_register_style('style', get_template_directory_uri() . '/assets/style.css', array(), 1, 'all');
//    wp_enqueue_style('style');
//
//    wp_register_style('costume', get_template_directory_uri() . '/assets/costume.css', array(), 1, 'all');
//    wp_enqueue_style('costume');
//	

  
 }


add_action( 'wp_enqueue_scripts', 'wpdocs_register_plugin_styles' );




function wpdocs_register_plugin_scripts()
{


    wp_register_script('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), 1, 1, 1);
    wp_enqueue_script('aos');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), 1, 1, 1);
    wp_enqueue_script('bootstrap');

    wp_register_script('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), 1, 1, 1);
    wp_enqueue_script('glightbox');

    wp_register_script('isotope', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), 1, 1, 1);
    wp_enqueue_script('isotope');

    wp_register_script('php-email', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), 1, 1, 1);
    wp_enqueue_script('php-email');



    wp_register_script('purecounter', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter.js', array(), 1, 1, 1);
    wp_enqueue_script('purecounter');

    wp_register_script('Typedm', get_template_directory_uri() . '/assets/vendor/typed.js/typed.js', array(), 1, 1, 1);
    wp_enqueue_script('typedjsm');
    wp_register_script('Typed', get_template_directory_uri() . '/assets/vendor/typed.js/typed.min.js', array(), 1, 1, 1);
    wp_enqueue_script('typedjs');

    wp_register_script('waypoint', get_template_directory_uri() . '/assets/vendor/waypoints/noframework.waypoints.js', array(), 1, 1, 1);
    wp_enqueue_script('waypointjs');


    wp_register_script('php-', get_template_directory_uri() . '/assets/js/main.js', array(), 1, 1, 1);
    wp_enqueue_script('php-');

//
//    wp_deregister_script('main1');
//    wp_register_script('main1', get_template_directory_uri() . '/assets/assets/js/main.js', array(), 1, 1, 1);
//    wp_enqueue_script('main1');

    //    wp_deregister_script('swiper1');
//
//    wp_register_script('swiper1', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), 1, 1, 1);
//    wp_enqueue_script('swiper1');
//
//    wp_register_script( 'swiper1', 'https://unpkg.com/swiper/swiper-bundle.min.js', null, null, true );
//    wp_enqueue_script('swiper1');


//     wp_register_script('scroll', get_template_directory_uri() . '/assets/scrolltopcontrol.js', array(), 1, 1, 1);
//    wp_enqueue_script('scroll');
//
//    wp_register_script('wow', get_template_directory_uri() . '/assets/wow.min.js', array(), 1, 1, 1);
//    wp_enqueue_script('wow');
//
//	    wp_register_script('partico', get_template_directory_uri() . '/assets/particles.min.js', array(), 1, 1, 1);
//    wp_enqueue_script('partico');
//       wp_register_script('applice', get_template_directory_uri() . '/assets/app.js', array(), 1, 1, 1);
//    wp_enqueue_script('applice');
//
//    wp_register_script('inview', get_template_directory_uri() . '/assets/jquery.inview.min.js', array(), 1, 1, 1);
//    wp_enqueue_script('inview');
//
//
//     wp_register_script('main', get_template_directory_uri() . '/assets/main.js', array(), 1, 1, 1);
//    wp_enqueue_script('main');
//





   

    
}

add_action( 'wp_enqueue_scripts', 'wpdocs_register_plugin_scripts' );

add_image_size( 'cta_background_img', 1280, 800, false );
add_image_size( 'custome_size', 1200, 800, false);
add_image_size( 'team_img_size', 160, 160, true);
add_image_size( 'team_img_background', 596, 337, true);
add_image_size( 'post-thumbnail size', 800, 240 );
add_image_size( 'homepage-thumb size', 220, 180 );
add_image_size( 'fullpage-thumb size', 590, 9999 );
add_image_size( 'background_img', 1288, 800, false);
add_image_size( 'cta_picture_border', 1280, 309, false);
add_image_size( 'lesson_img', 400, 300, false);
add_image_size( 'image_icon_size', 600, 600, true);
add_image_size( 'team_image', 300,300, true);
add_image_size( 'team_blog_image', 800,533, true);
add_image_size( 'team_blog_image_sub', 70,70, true);
add_image_size( 'crumb_image', 1280,300, true);



//menu support

add_theme_support('menus');

// setting our nav menu location // the good part is that it can be used in other web sections as well

register_nav_menus(

// setting the menu location

    array(

        'top-menu'=>__('Top Menu', 'theme'),
    )


);




