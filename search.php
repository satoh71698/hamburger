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
                        <h2 class="u-font--roboto">Search:</h2>
                        <p><?php echo esc_attr( get_search_query() ); ?></p>
                    </div>
                </div>

            </section>
            <!-- p-fv -->
           <div class="p-textAria">
            <?php
                $page_id = get_page_by_path('search'); 
                $page = get_post( $page_id );
                echo $page -> post_content; 
            ?>
            </div>
            <!-- p-acItem -->
            <article class="p-archiveItem u-inner--20">
                <ul>
                    <?php
                        if(have_posts() && get_search_query() ):
                        while(have_posts(  )): the_post(  );
                    ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <div class="p-archiveItem__flex c-flex--tb">
                                <div class="p-archiveItem__img">
                                    <?php the_post_thumbnail(""); ?>
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
                    <?php endwhile; ?>
                    <?php elseif( ! get_search_query( )): ?>
                        <div class="p-textAria">
                            <h2>検索ワードが入力されていません。</h2>
                        </div>
                    <?php else: ?>
                        <div class="p-textAria">
                            <h2>該当する記事は見つかりませんでした。</h2>
                        </div>
                    <?php endif; ?>
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