<?php get_header(); ?>

<main>
  <div class="l-container">
    <article class="l-entryContainer">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <div class="o-entryHead">
        <h2 class="u-entryTitle"><?php the_title(); ?></h2>
      </div>
      <div class="l-entryContent">
        <?php the_content(); ?>
      </div>
      <?php endwhile; endif; ?>
    </article>

    <aside class="l-sidebar">
      <?php get_sidebar('o-sideWidget'); ?>
    </aside>
  </div>
</main>
<?php get_footer(); ?>