<?php

add_theme_support('post-thumbnails'); // поддержка миниатюр
set_post_thumbnail_size(170, 170, false);

function current_page_url() {
	$pageURL = 'http';
	if( isset($_SERVER["HTTPS"]) ) {
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
        $pageURLs.= $_SERVER["SERVER_NAME"].'<strong>'.$_SERVER["REQUEST_URI"].'</strong>';
	}
    $url[0] = $pageURL;
    $url[1] = $pageURLs;
	return $url;
}


    function my_theme_load_scripts(){
        $theme_url = get_template_directory_uri();

        // css
        wp_register_style('bootstrap', $theme_url.'/styles/bootstrap.min.css', false, '');
        wp_enqueue_style('bootstrap');

        wp_register_style('content', $theme_url.'/styles/contentstyle.css', false, '0.1');
        wp_enqueue_style('content');

        wp_register_style('my_theme_style', $theme_url.'/styles/style.css', false, '0.1');
        wp_enqueue_style('my_theme_style');

        wp_register_style('nav', $theme_url.'/styles/navmenu.css', false, '0.1');
        wp_enqueue_style('nav');

        wp_register_style('icons', $theme_url.'/styles/simtechicons.css', false, '0.1');
        wp_enqueue_style('icons');


        wp_register_style('owl-css', $theme_url.'/styles/owl.carousel.css', false, '0.1');
        wp_enqueue_style('owl-css');


        //job page
        if ( is_page(array(11))) {

            wp_register_style('work', $theme_url.'/styles/work.css', false, '0.1');
            wp_enqueue_style('work');

            wp_register_script('workjs', $theme_url.'/js/work.js', array('jquery'));
            wp_enqueue_script('workjs');

        } elseif ( in_category(array(2)) ){

            //jobs post page


            wp_register_style('job_work', $theme_url.'/styles/work.css', false, '0.1');
            wp_enqueue_style('job_work');



            wp_register_script('job_workjs', $theme_url.'/js/work.js', array('jquery'));
            wp_enqueue_script('job_workjs');

            wp_register_script('zclip', $theme_url.'/js/zclip.js', array('jquery'));
            wp_enqueue_script('zclip');


        }
        if ( is_page(array(33,35,38))) {

            wp_register_style('about', $theme_url.'/styles/about.css', false, '0.1');
            wp_enqueue_style('about');

            wp_register_script('aboutjs', $theme_url.'/js/about.js', array('jquery'));
            wp_enqueue_script('aboutjs');

        }

        if ( is_page(array('cscart','twigmo','merchium','searchanise','simtechdevelopment'))) {

            wp_register_style('products', $theme_url.'/styles/products.css', false, '0.1');
            wp_enqueue_style('products');

            wp_register_script('productsjs', $theme_url.'/js/products.js', array('jquery'));
            wp_enqueue_script('productsjs');

        }

        wp_register_style('media-css', $theme_url.'/styles/media.css', false, '0.1');
        wp_enqueue_style('media-css');
        // scripts
        wp_register_script('owl', $theme_url.'/js/owl.carousel.min.js', array('jquery'));
        wp_enqueue_script('owl');

        wp_register_script('html5shiv', $theme_url.'/js/html5shiv.js',  '1');
        wp_enqueue_script('html5shiv');

        wp_register_script('retina', $theme_url.'/js/retina.min.js',  '1');
        wp_enqueue_script('retina');

        wp_register_script('easing', $theme_url.'/js/easing.js', array('jquery'));
        wp_enqueue_script('easing');

        wp_register_script('menu', $theme_url.'/js/menu.js', array('jquery'));
        wp_enqueue_script('menu');

        wp_register_script('script', $theme_url.'/js/script.js', array('jquery'));
        wp_enqueue_script('script');
    }
    add_action('wp_enqueue_scripts', 'my_theme_load_scripts');

function NumberEnd($number, $titles) {
    $cases = array (2, 0, 1, 1, 1, 2);
    return $titles[ ($number%100>4 && $number%100<20)? 2 : $cases[min($number%10, 5)] ];
}


?>
