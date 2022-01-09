<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__wrapper">
            <?php wp_nav_menu( [
	            'theme_location'  => 'main_menu',
	            'menu'            => '',
	            'container'       => 'div',
	            'container_class' => 'header__menu',
	            'container_id'    => '',
	            'menu_class'      => 'menu',
	            'menu_id'         => '',
	            'echo'            => true,
	            'fallback_cb'     => 'wp_page_menu',
	            'before'          => '',
	            'after'           => '',
	            'link_before'     => '',
	            'link_after'      => '',
	            'items_wrap'      => '<nav id="%1$s" class="%2$s">%3$s</nav>',
	            'depth'           => 0,
	            'walker'          => '',
            ] ); ?>
            <a href="tel:+12 345 678 90" class="header__number">+12 345 678 90</a>
        </div>
    </div>
</header>