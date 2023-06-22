 <div class="l-sideMenu__layer"></div>
        <!-- g-nav -->
        <div class="c-menu l-sideMenu__menu"><span></span><span class="u-font--roboto">Menu</span><span></span>
        </div>
        <aside class="l-sideMenu">
<div class="l-sideMenu__list c-color--Gray">
    <?php
        wp_nav_menu(
            array(
                "theme_location" => "category_nav",
                "container" => false,
                )
        );
    ?>
</div>
 </aside>