<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="l-wrapper">
    <header class="l-header">
      <h1 class="u-blogTitle"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
      <?php if(has_nav_menu('global-menu','social-links')): ?>
      <nav class="o-globalNavi">
        <div class="o-globalMenu">
          <?php wp_nav_menu(array(
        'theme_location' => 'global-menu',
        )); ?>
        </div>
        <div class="o-socialLinks">
          <?php wp_nav_menu(array(
        'theme_location' => 'social-links',
        )); ?>
        </div>
      </nav>
      <?php endif; ?>
    </header>