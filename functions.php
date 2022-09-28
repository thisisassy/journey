<?php
// CSSを有効化
add_theme_support('wp-block-styles');

function mytheme_setup() {
  // アイキャッチ画像を有効化
  add_theme_support('post-thumbnails');
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