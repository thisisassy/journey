<footer class="l-footer">
  <div class="l-footerInner">
    <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar(2)) :?>
    <?php endif; ?>
  </div>
  <div class="l-footerOuter">
    <p class="u-copyright"><span>&copy;</span>2022
      <?php bloginfo('name'); ?>
    </p>
    <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar(3)) :?>
    <?php endif; ?>
  </div>
</footer>
<?php wp_footer(); ?>
</div>
</body>

</html>