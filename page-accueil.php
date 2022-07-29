<?php 
/*
Template Name: Page d'accueil
*/
get_header()  ?>
    <main>
        <article>
            <header class="main-title">
                <h1 class="container"><?php the_title() ?></h1>
            </header>
            <div class="container entry-content">
               <?php 
               the_content() ?>
            </div>
        </article>

        <!-- Derniers article du blog -->
        <section class="container">

        <h2><?php _e("Derniers articles du blog") ?></h2>
        <div class="flex">

        <?php $the_query = new WP_Query(array('cat' => 3,'showposts'=>3 ));
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
        
            <?php get_template_part('template-parts/liste', 'articles'); ?>
            
        <?php endwhile; ?>

        </div>

        </section>
        <!-- Fin derniers article du blog -->

        <?php wp_reset_postdata(); ?>

        <!-- Dernieres créations -->
        <section class="container">

        <h2><?php _e("Dernières créations") ?></h2>
        <div class="flex">

        <?php $the_query = new WP_Query(array('cat' => 12,'showposts'=>3 ));
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
        
            <?php get_template_part('template-parts/liste', 'creations'); ?>
            
        <?php endwhile; ?>

        </div>
        
        </section>
        <!-- Fin dernieres créations -->


        <?php get_sidebar() ?>
    </main>
<?php get_footer()  ?>