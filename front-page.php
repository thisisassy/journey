<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <main>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article <?php post_class(); ?>>
      <h2><?php the_title(); ?></h2>
    </article>
    <?php endwhile; endif; ?>
  </main>
  <?php wp_footer(); ?>
</body>

</html>