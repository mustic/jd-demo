<?php get_header()  ?>
    <main>
        <article>
            <header class="main-title">
            
                <h1 class="container">
                    <?php the_title() ?>
                </h1>
            
            </header>

            <div class="container entry-content">
                
            <div class="flex webmaster">
                <div><?php the_post_thumbnail('thumbnail') ?></div>
                <div>

                    <h2>Formation suivie</h2>

                    <?php if( get_field('intitule') ): ?>
                      <p>Intitulé : <?php the_field('intitule') ?></p>
                    <?php endif; ?>

                    <?php if( get_field('date') ): ?>
                      <p>Date : <time><?php the_field('date') ?></time></p>
                    <?php endif; ?>

                    <?php if( get_field('avis') ): ?>
                      <p>Avis : <em><?php the_field('avis') ?></em></p>
                    <?php endif; ?>
            
                </div>
            </div>

               <?php the_content() ?>
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