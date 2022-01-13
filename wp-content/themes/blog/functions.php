<?php

function blog_metadata() {

?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<?php

}

add_action('wp_head', 'blog_metadata');

function blog_stylesheets() {
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;family=Teko:wght@300;400;500;600;700&amp;display=swap');
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css', false, false, 'all');
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri().'/css/fontawesome-all.css', false, false, 'all');
    wp_enqueue_style('owl', get_stylesheet_directory_uri().'/css/owl.css', false, false, 'all');
    wp_enqueue_style('flaticon', get_stylesheet_directory_uri().'/css/flaticon.css', false, false, 'all');
    wp_enqueue_style('animate', get_stylesheet_directory_uri().'/css/animate.css', false, false, 'all');
    wp_enqueue_style('jquery-ui', get_stylesheet_directory_uri().'/css/jquery-ui.css', false, false, 'all');
    wp_enqueue_style('jquery-fancybox', get_stylesheet_directory_uri().'/css/jquery.fancybox.min.css', false, false, 'all');
    wp_enqueue_style('hover', get_stylesheet_directory_uri().'/css/hover.css', false, false, 'all');
    wp_enqueue_style('custom-animate', get_stylesheet_directory_uri().'/css/custom-animate.css', false, false, 'all');
    wp_enqueue_style('rtl', get_stylesheet_directory_uri().'/css/rtl.css', false, false, 'all');
    wp_enqueue_style('blog-main-stylesheet', get_stylesheet_uri());
    wp_enqueue_style('responsive', get_stylesheet_directory_uri().'/css/responsive.css', false, false, 'all');
    wp_enqueue_style('default-colours', get_stylesheet_directory_uri().'/css/colors/color-default.css', false, false, 'all');
}

add_action('wp_enqueue_scripts', 'blog_stylesheets');

function add_header_scripts() {
    if ( !is_admin() )
        wp_enqueue_script('jquery', get_stylesheet_directory_uri().'/js/jquery.js', NULL, '1.0', true);
        wp_enqueue_script('popper', get_stylesheet_directory_uri().'/js/popper.min.js', NULL, '1.0', true);
        wp_enqueue_script('bootstrap', get_stylesheet_directory_uri().'/js/bootstrap.min.js', NULL, '1.0', true);
        wp_enqueue_script('TweenMax', get_stylesheet_directory_uri().'/js/TweenMax.js', NULL, '1.0', true);
        wp_enqueue_script('jquery-ui', get_stylesheet_directory_uri().'/js/jquery-ui.js', NULL, '1.0', true);
        wp_enqueue_script('jquery-fancybox', get_stylesheet_directory_uri().'/js/jquery.fancybox.js', NULL, '1.0', true);
        wp_enqueue_script('owl', get_stylesheet_directory_uri().'/js/owl.js', NULL, '1.0', true);
        wp_enqueue_script('mixitup', get_stylesheet_directory_uri().'/js/mixitup.js', NULL, '1.0', true);
        wp_enqueue_script('appear', get_stylesheet_directory_uri().'/js/appear.js', NULL, '1.0', true);
        wp_enqueue_script('wow', get_stylesheet_directory_uri().'/js/wow.js', NULL, '1.0', true);
        wp_enqueue_script('jquery-style-switcher', get_stylesheet_directory_uri().'/js/jQuery.style.switcher.min.js', NULL, '1.0', true);
        // wp_enqueue_script('cookie', get_stylesheet_directory_uri().'../../cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js', NULL, '1.0', true);
        wp_enqueue_script('jquery-easing', get_stylesheet_directory_uri().'/js/jquery.easing.min.js', NULL, '1.0', true);
        // wp_enqueue_script('validate', get_stylesheet_directory_uri().'/js/jquery.validate.min.js', array('validate'), '1.0', true);
        // wp_enqueue_script('validate-02', '//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js', NULL, '1.0', true);
        wp_enqueue_script('jarallax', get_stylesheet_directory_uri().'/js/jarallax.min.js', NULL, '1.0', true);
        wp_enqueue_script('custom-script', get_stylesheet_directory_uri().'/js/custom-script.js', NULL, '1.0', true);
        // wp_enqueue_script('lang', get_stylesheet_directory_uri().'/js/lang.js', NULL, '1.0', true);
        // wp_enqueue_script('color-switcher', get_stylesheet_directory_uri().'/js/color-switcher.js', NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'add_header_scripts');

function blog_features() {
    // Title Tag
    add_theme_support('title-tag');

    // Post Thumbnails
    add_theme_support('post-thumbnails');

    // Menu
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));

    // Widgets
    register_sidebar(array(
        'name' => 'Main Sidebar',
        'id' => 'main-sidebar',
        'before_title' => '<h3>',
        'afrte_title' => '</h3>'
    ));
}

add_action('after_setup_theme', 'blog_features');

// Load Custom Comments Layout file.
require get_template_directory().'/comments-helper.php';

// User avatar
function wpb_new_gravatar ($avatar_defaults) {
    $myavatar = /*'https://pegatonconsults.com/images/pegaton-consults-user-avatar.png'*/ 'https://build.pegatonconsults.com/images/pegaton-consults-user-avatar.png';
    $avatar_defaults[$myavatar] = "Pegaton Avatar";

    $myavatar2 = /*'https://pegatonconsults.com/images/pegaton-consults-user-avatar-02.png'*/ 'https://build.pegatonconsults.com/images/pegaton-consults-user-avatar-02.png';
    $avatar_defaults[$myavatar2] = "Pegaton Avatar 2";

    $myavatar3 = /*'https://pegatonconsults.com/images/pegaton-consults-user-avatar-03.png'*/ 'https://build.pegatonconsults.com/images/pegaton-consults-user-avatar-03.png';
    $avatar_defaults[$myavatar3] = "Pegaton Avatar 3";

    return $avatar_defaults;
}

add_filter( 'avatar_defaults', 'wpb_new_gravatar' );

?>