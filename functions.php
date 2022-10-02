<?php
// CSSを有効化
add_theme_support('wp-block-styles');

function mytheme_setup() {
  // アイキャッチ画像を有効化
  add_theme_support('post-thumbnails');

  // nav menu
  register_nav_menus( array(
    'global-menu' => 'グローバルメニュー',
    'footer-menu' => 'フッターメニュー',
  ));
}
add_action('after_setup_theme', 'mytheme_setup');

function mytheme_enqueue() {
  // テーマのCSSを読み込む
  wp_enqueue_style(
    'mytheme-style',
    get_stylesheet_uri(),
    array(),
    filemtime(get_theme_file_path('style.css'))
  );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue');

// widget area
function mytheme_widgets() {
  
  if(function_exists('register_sidebar')) {
    register_sidebars(3, array(
      'name' => 'サイドウィジェット%d',
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget' => '</section>'
    ));
  }
}
add_action('widgets_init', 'mytheme_widgets');

add_filter('get_the_archive_title', function($title) {
  if(is_category()){
    $title = single_cat_title('', false);
  }elseif(is_tag()){
    $title = single_tag_title('',false);
  }elseif(is_date()){
    $title = get_the_time('Y年M');
  };
  return $title;
});