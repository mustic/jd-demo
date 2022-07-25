<?php get_header()  ?>
    <main>
        <section class="container entry-content flex">

      

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    
        <?php get_template_part('template-parts/liste', 'articles')  ?>


        <?php endwhile; else : ?>

            <p><?php _e("Il n'y pas de publication pour l'instant") ?></p>

        <?php endif; ?>
       


           
        </section>
       <?php get_sidebar()   ?>
    </main>
<?php get_footer()  ?>