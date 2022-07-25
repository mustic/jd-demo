<?php get_header()  ?>
    <main>
        <section>
            <header class="main-title">
                <h1 class="container"><?php single_cat_title() ?></h1>
            </header>
            <div class="container flex entry-content">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

            if(is_category(12)){
                get_template_part('template-parts/liste', 'creations');
            }

            else{
                get_template_part('template-parts/liste', 'articles');
            }
        
           endwhile; else : ?>


            <!-- SINON j'affiche ça  -->
            <p><?php _e("Il n'y pas de publication pour l'instant") ?></p>

            <?php endif; ?>

            </div>
        </section>
    </main>
<?php get_footer()  ?>