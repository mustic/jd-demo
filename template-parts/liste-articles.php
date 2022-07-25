<div class="archive-item">

    <a title="<?php the_title()  ?>" href="<?php the_permalink()  ?>">
        <?php the_post_thumbnail('archive') ?>
    </a>

    <p class="archive-meta"><span><i class="fa-solid fa-user-astronaut"></i> <?php the_author() ?></span><time><i class="fa-regular fa-calendar"></i> <?php the_time('j F Y') ?></time></p>
    
    <h2>
        <a href="<?php the_permalink()  ?>">
            <?php the_title()  ?>
         </a>
    </h2>
                
</div>