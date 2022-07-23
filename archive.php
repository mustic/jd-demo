<?php get_header()  ?>
    <main>
        <section class="entry-content">
            <header class="main-title">
                <h1 class="container"><?php single_cat_title() ?></h1>
            </header>
            <div class="container flex">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- SI il y a au moins 1 article, j'affiche ça (titre, texte, auteur...) -->

            <div class="archive-item">
                <a title="<?php the_title()  ?>" href="<?php the_permalink()  ?>">
                    <?php the_post_thumbnail('archive') ?>
                </a>
                <h2>
                    <a href="<?php the_permalink()  ?>">
                        <?php the_title()  ?>
                    </a>
                </h2>
                <p><time><?php the_time('j F Y') ?></time></p>
            </div>

            <?php endwhile; else : ?>
            <!-- SINON j'affiche ça  -->
            <p>Il n'y pas de publication pour l'instant</p>


            <?php endif; ?>
               


            </div>
        </section>
    </main>
<?php get_footer()  ?>