<?php get_header()  ?>
    <main>
        <article class="entry-content">
            <header class="main-title">
                <h1 class="container"><?php the_title() ?></h1>
            </header>
            <div class="container">
               <?php 
               the_content() ?>
            </div>
        </article>
    </main>
<?php get_footer()  ?>