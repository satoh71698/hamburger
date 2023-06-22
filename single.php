<?php get_header(); ?>
        <?php get_template_part("content-sideMenu"); ?>
        <!-- main -->
        <main>
            <!-- p-fv -->
            <section class="p-fv">
                <div class="p-fv__content p-single__fv c-center__title">
                    <picture>
                        <?php the_post_thumbnail(""); ?>
                    </picture>
                    <div class="p-fv__subTitle c-flex--tb c-color--White">
                        <h2 class="u-font--roboto">Menu:</h2>
                        <p><?php the_title(); ?></p>
                    </div>
                </div>
            </section>
            <!-- p-fv -->
            <div class="p-textAria__archive u-inner--20">
               <?php the_content(); ?> 
            </div>
        </main>
        <!-- /main -->
    </div>
<?php get_footer(); ?>