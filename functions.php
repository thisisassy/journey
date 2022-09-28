<?php

function mytheme_setup() {
  // アイキャッチ画像を有効化
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mytheme_setup');