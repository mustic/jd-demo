
    <footer class="site-footer">
        <div class="container flex">
            <div class="footer1">
                <small>
                    &copy; <?php the_time('Y') ?> 
                    <a href="<?php bloginfo('url') ?>">
                        <?php bloginfo('name') ?>
                    </a> - WordPress <?php bloginfo('version') ?> par Damien B - 
                    <a href="mailto:<?php bloginfo('admin_email') ?>">
                        <?php bloginfo('admin_email') ?>
                    </a>
                </small>
            </div>
            <div class="footer2 flex">

            <?php 
            
            wp_nav_menu(array('theme_location'=>'pied','container'=>'nav','container_class'=>'footer-nav')); 

            wp_nav_menu(array('theme_location'=>'reseaux','container_class'=>'social-nav'));     
            
            ?>

            </div>
        </div>
    </footer>

<?php wp_footer() ?>
</body>
</html>