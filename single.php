<?php get_header(); ?>

<main>
  <div class="l-container">
    <article class="l-entryContainer">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <div class="o-entryHead">
        <h2 class="u-entryTitle"><?php the_title(); ?></h2>
        <div class="o-meta">
          <p>category</p>
          <p class="u-dateTime"><time
              datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>"><?php echo esc_html(get_the_date()); ?></time>
          </p>
        </div>
      </div>
      <?php the_content(); ?>
      <?php endwhile; endif; ?>
      <div class="o-author">
        <p>この記事を書いた人</p>
      </div>

      <section class="l-relatedPosts">
        <h3>こちらの記事もおすすめ</h3>
      </section>
    </article>

    <aside class="l-sidebar">
      <section class="o-sideWidget">
        <h4 class="u-sideTitle">Profile</h4>
      </section>
    </aside>
  </div>
</main>

<?php get_footer(); ?>