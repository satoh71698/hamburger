<?php get_header(); ?>
        <?php get_template_part("content-sideMenu"); ?>
        <!-- main -->
        <main>
            <!-- p-fv -->
            <div class="p-textAria__archive u-inner--20">
              <P>ページが見つかりません</p>
     <a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページはこちら</a>
            </div>
        </main>
        <!-- /main -->
    </div>
<?php get_footer(); ?>