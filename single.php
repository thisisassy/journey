<?php get_header(); ?>

<main>
  <div class="l-container">
    <article class="l-entryContainer">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <div class="o-entryHead">
        <h2 class="u-entryTitle"><?php the_title(); ?></h2>
        <div class="o-meta">
          <?php the_category(); ?>
          <p class="u-dateTime"><time
              datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>"><?php echo esc_html(get_the_date()); ?></time>
          </p>
        </div>
      </div>
      <div class="l-entryContent">
        <?php the_content(); ?>
      </div>
      <?php endwhile; endif; ?>
      <div class="o-author">
        <div class="o-authorHead">
          <h4>Author</h4>
          <p>この記事を書いた人</p>
        </div>
        <div class="o-profile">
          <img src="" />
          <div class="u-profileText">
            <h5>こまざわ</h5>
            <p>ブロガーのききです。
              この記事がためになったらぜひサポートしてください。
              詳しいプロイールはこちら</p>
          </div>
        </div>
      </div>

      <section class="l-relatedPosts">
        <h3>こちらの記事もおすすめ</h3>
      </section>
      <?php the_post_navigation(); ?>
    </article>

    <aside class="l-sidebar">
      <section class="o-sideWidget">
        <h4 class="u-sideTitle">Profile</h4>
      </section>
    </aside>
  </div>
</main>

<?php get_footer(); ?>