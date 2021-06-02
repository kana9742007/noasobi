<?php


function enqueue_styles()
{
  // サイト内のCSSの読み込み
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/style/css/style.css');
  // swiper
  wp_enqueue_style('swiper_style', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css');
  // animate
  wp_enqueue_style('animate_style',  'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts()
{
  // サイト内のjs読み込み
  // Swiper カスタム
  wp_enqueue_script('swiper_custom', get_template_directory_uri() . '/assets/js/swiper.js', array(), '1.0.0', false);
  // header
  wp_enqueue_script('header_js', get_template_directory_uri() . '/assets/js/header.js', array(), '1.0.0', false);
  // wow
  wp_enqueue_script('wow_js', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array(), '1.0.0', true);
}


add_action('wp_enqueue_scripts', 'enqueue_scripts');

function register_my_menus()
{
  register_nav_menus(array( //複数のナビゲーションメニューを登録する関数
    //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
    'header-menu' => 'Header Menu',
  ));
}
add_action('after_setup_theme', 'register_my_menus');
?>