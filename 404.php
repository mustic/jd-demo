<?php get_header()  ?>
    <main>
        <article>
            <header class="main-title">
                <h1 class="container"><?php _e('Erreur 404'); ?></h1>
            </header>

            <div class="container entry-content">
              <img src="<?php echo get_template_directory_uri();  ?>/img/404.webp" alt="Erreur 404">
              <h2><?php _e("La page recherchée, n'existe plus ou a été déplacée")  ?></h2>
              
             
              <p><?php _e("Vous pouvez revenir à ")  ?>
                <a href="<?php bloginfo('url') ?>">
                    <?php _e("l'accueil du site")  ?>
                </a>
               <?php _e("ou effectuer une recherche : "); get_search_form();  ?></p>
            </div>
        </article>
    </main>
<?php get_footer()  ?>