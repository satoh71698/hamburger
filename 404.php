<?php get_header(); ?>
      <?php get_template_part("content-sideMenu"); ?>
      <div class="p-textAria">
     <P>ページが見つかりません</p>
     <a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページはこちら</a>
    </div>
<?php get_footer(); ?>