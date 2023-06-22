<?php get_header(); ?>
        <?php get_template_part("content-sideMenu"); ?>
        <!-- main -->
        <main>
            <!-- p-fv -->
            <section class="p-fv">
                <div class="p-fv__content p-archive__fv c-center__title">
                    <picture>
                        <img src="<?php echo get_template_directory_uri(  ); ?>/img/page-title_arcive@2x.jpg" alt=”代替テキスト”>
                    </picture>
                    <div class="p-fv__subTitle c-flex--tb c-color--White">
                        <h2 class="u-font--roboto">Menu:</h2>
                        <p><?php single_cat_title(); ?></p>
                    </div>
                </div>

            </section>
            <!-- p-fv -->
           <div class="p-textAria">
            <h2>
            <?php
            include_once(ABSPATH . 'wp-admin/includes/plugin.php');
            if(is_plugin_active( 'advanced-custom-fields/acf.php' )){ 
                $tags = get_the_tags();
                    if ($tags) {
                        foreach($tags as $tag) {
                    echo the_field( 'text', 'post_tag_' . $tag->term_id ); 
                        }
                    }
            } else { 
            echo 'プラグインACFを有効にし、カテゴリーにテキストの入力します。プラグインACFを有効にし、カテゴリーにテキストの入力します。プラグインACFを有効にし、カテゴリーにテキストの入力します。プラグインACFを有効にし、カテゴリーにテキストの入力します。プラグインACFを有効にし、カテゴリーにテキストの入力します。';
                  } ?>
            </h2>
            <p>
            <?php
            include_once(ABSPATH . 'wp-admin/includes/plugin.php');
            if(is_plugin_active( 'advanced-custom-fields/acf.php' )){ 
             echo the_field( 'textarea', 'post_tag_' . get_the_category()[0]->cat_ID ); 
            } else { 
            echo 'プラグインACFを有効にし、カテゴリーにテキストエリアの入力します。プラグインACFを有効にし、カテゴリーにテキストエリアの入力します。プラグインACFを有効にし、カテゴリーにテキストエリアの入力します。プラグインACFを有効にし、カテゴリーにテキストエリアの入力します。プラグインACFを有効にし、カテゴリーにテキストエリアの入力します。';
                  } ?>
            </p>           
            </div>
            <!-- p-acItem -->
            <article class="p-archiveItem u-inner--20">
                <ul>
                    <?php
                        if(have_posts()):
                        while(have_posts(  )): the_post(  );
                    ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <div class="p-archiveItem__flex c-flex--tb">
                                <div class="p-archiveItem__img">
                                    <?php the_post_thumbnail('eyecatch'); ?>
                                </div>
                                <div class="p-archiveItem__text c-color--White">
                                    <h3><?php the_title(); ?></h3>
                                    <h4>小見出しが入ります</h4>
                                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                    </p>
                                    <div class="c-center">
                                        <div class="p-archiveItem__button c-button__detail">詳しく見る</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                     <?php
                        endwhile;
                        endif;
                    ?>
                </ul>
            </article>
            <!-- p-acItem -->
            <div class="p-pagination c-center u-inner--20 c-color--Gray u-font--roboto">
                <?php wp_pagenavi(); ?>
            </div>
            <div class="p-pagination__sp">
               <p><?php previous_posts_link('前へ'); ?></p>
               <p><?php next_posts_link('次へ'); ?></p>
            </div>
        </main>
        <!-- /main -->
    </div>
<?php get_footer(); ?>