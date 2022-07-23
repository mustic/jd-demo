<?php get_header()  ?>
    <main>
        <article class="entry-content">
            <header class="main-title">
                <div class="container">
                    <p><?php the_category(' / ') ?></p>
                </div>
                <h1 class="container">
                    <?php the_title() ?>
                </h1>
                <div class="container">
                    <time><?php the_time('j F Y') ?></time>

                    <?php while (have_posts()) : the_post(); ?>
                        <p><?php the_author() ?></p>
                    <?php endwhile; ?>

                    <?php the_tags('<p><i class="fa-solid fa-tags"></i> ', ' - ', '</p>') ?>

                </div>

            </header>

            <div class="container">
               <?php 
               the_post_thumbnail('full');
               the_content() ?>
            </div>

        </article>

        <nav class="container flex">
         <div><?php previous_post_link('<i class="fa-solid fa-arrow-left"></i> %link') ?></div>
         <div><?php next_post_link('%link <i class="fa-solid fa-arrow-right"></i>') ?></div>

        </nav>

        <section class="container">
      
            <?php comments_template() ?>
       
        </section>

        
           
        

        <?php get_sidebar() ?>
    </main>
<?php get_footer()  ?>