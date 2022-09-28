<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>

<header>
  <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
</header>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="l-wrapper">