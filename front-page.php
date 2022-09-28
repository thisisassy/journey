<?php get_header(); ?>

<main>

  <div class="l-entryList">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article <?php post_class('o-entry'); ?>>
      <a href="<?php the_permalink(); ?>">
        <?php if(has_post_thumbnail()): ?>
        <figure>
          <?php the_post_thumbnail(); ?>
        </figure>
        <?php endif; ?>
        <h2 class="u-title"><?php the_title(); ?></h2>
        <p class="u-dateTime"><time
            datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>"><?php echo esc_html(get_the_date()); ?></time>
        </p>
      </a>
    </article>
    <?php endwhile; endif; ?>
  </div>

  <aside class="l-footSide">
    <section>
      サイドバー左
    </section>
    <section>サイドバー中央</section>
    <section>サイドバー左</section>
  </aside>
</main>

<?php get_footer(); ?>