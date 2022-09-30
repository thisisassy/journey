<footer class="l-footer">
  <div class="l-footerOuter">
    <?php if(is_active_sidebar('sidebar-2')): ?>
    <?php dynamic_sidebar('sidebar-2'); ?>
    <?php endif; ?>
  </div>
  <div class="l-footerInner">
    <?php if(is_active_sidebar('sidebar-3')): ?>
    <?php dynamic_sidebar('sidebar-3'); ?>
    <?php endif; ?>
    <p class="u-copyright"><span>&copy;</span>2022
      <?php bloginfo('name'); ?>
    </p>
  </div>
</footer>
<?php wp_footer(); ?>
</div>
</body>

</html>