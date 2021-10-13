<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="header-top">
            <div class="logo"><?php the_custom_logo( ); ?></div>
            <?php wp_nav_menu( [        
	                'theme_location'  => '',
	                'menu'            => 'Top menu',
                    'container'       => 'nav',
                    'container_class' => 'menu',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ] );
            ?>
        </div>
        <div id="burger">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg/Menu_icon.svg" alt="">
        </div>
        <div class="hidden-menu">
            <div id="close-menu"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg/close.svg" alt=""></div>
            <?php wp_nav_menu( [
	                'theme_location'  => '',
	                'menu'            => 'Top menu',
                    'container'       => 'nav',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ] );
            ?>
        </div>
        <div class="header-content">
            <div class="header-content-block">
                <div class="header-content-wrap">
                    <h1><?php echo get_bloginfo('name') ?></h1>
                    <p><?php echo get_bloginfo('description') ?></p>
                    <button>Free Seo Consulting Training</button>
                </div>
            </div>
        </div>
    </header>