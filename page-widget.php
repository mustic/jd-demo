<?php 
/*
Template Name: Page avec widgets
*/
get_header()  ?>
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
        <?php get_sidebar() ?>
    </main>
<?php get_footer()  ?>