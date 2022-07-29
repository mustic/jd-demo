<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<!--Ajoute des classes CSS en fonction de l'environnement (home, single...) -->
<body <?php body_class(); ?>>
<!-- Permet à certaines extensions d’écrire du code au début du body (YOAST) -->
<?php wp_body_open(); ?>


    <header class="site-header">
        <div class="container flex">
            <div class="site-title">
                <a href="<?php bloginfo('url') ?>">
                   <?php bloginfo('name') ?>
                </a>
            </div>
            
            <div class="nav"> 
                <?php wp_nav_menu(array('theme_location'=>'principal','container'=>'nav', 'container_class'=>'main-nav'))  ?>
            </div>

            <div class="nav-mobile">

                <button class="mobile-btn">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="mobile-content">
                    <?php wp_nav_menu(array('theme_location'=>'principal','container'=>'nav'))  ?>
                </div>

            </div>




        </div>
    </header>
