    <!-- .l-footer -->
    <footer class="l-footer c-bg--imgfooter">
        <div class="l-footer__content c-center c-color--White">
            <div class="l-footer__menu">
               <?php
                wp_nav_menu(
                    array(
                    "theme_location" => "footer_nav",
                    "container" => false,
                    )
                );
                ?>
            </div>
            <p>Copyright: RaiseTech</p>
        </div>
    </footer>
    <!-- /.l-footer -->
   
    <?php wp_footer(); ?>
</body>


</html>