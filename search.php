<?php get_header()  ?>
    <main>
        <section>
            <header class="main-title">
                <h1 class="container">Vous avez recherché : <em><?php echo get_search_query()  ?></em></h1>
            </header>

            <div class="container entry-content">

            <?php if(count($posts)>1){
                $lettre="s";
            }else{
                $lettre="";
            }
            ?>
            <p><strong>Il y a <?php echo count($posts); ?> résultat<?php echo $lettre ?> pour cette recherche</strong></p>






                <?php 
                // Si il y a au moins 1 résultat
                if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <article class="search-result flex">
                        <div>
                            <a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail('thumbnail') ?>
                            </a>
                        </div>

                        <div>
                            <h2>
                                <a href="<?php the_permalink() ?>">
                                    <?php the_title() ?>
                                </a>
                            </h2>
                        
                            <?php the_excerpt() ?>

                        </div>
                    </article>
                <?php 
                // sinon 
                endwhile; else : ?>
                    <p><?php _e("Vous pouvez en effectuer une autre recherche :"); get_search_form(); ?></p>
                <?php endif; ?>
            </div>
        </section>
    </main>
<?php get_footer()  ?>