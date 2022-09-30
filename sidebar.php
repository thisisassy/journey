<section class="widget widget_block">
  <h2 class="widgettitle">Profile</h2>
  <div class="wp-widget-group__inner-blocks">
    <figure class="wp-block-profile-image">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/profile.jpg')); ?>" />
    </figure>
    <h5 class="wp-block-profile-title"><?php the_author_meta('display_name'); ?></h5>
    <div class="wp-block-profile-description">
      <p><?php the_author_meta('description'); ?></p>
    </div>
    <div class="wp-block-profile-link">
      <a href="/about/">詳しいプロフィールを見る</a>
    </div>
  </div>
</section>
<?php if( is_active_sidebar('sidebar-1')): ?>
<?php dynamic_sidebar('sidebar-1'); ?>
<?php endif; ?>