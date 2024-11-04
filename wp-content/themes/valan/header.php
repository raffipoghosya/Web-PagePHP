<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="header-container">
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Site Logo">
            </a>
        </div>
        <nav class="main-navigation">
             <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => false)); ?>
              <ul class="nav-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                       <li class="has-dropdown">
                            <a href="#">Services</a>
                       </li>
                    <li><a href="#">Contact</a></li>
              </ul>
        </nav>
        <div class="header-icons">
            <a href="<?php echo home_url('/?s='); ?>" class="icon search-icon"></a>
                  <input type="text" id="searchInput" placeholder="Search..." />
                  <button onclick="performSearch()">🔍</button>
            
            <a href="#" class="icon cart-icon">
                Cart<span class="cart-count">99+</span>
            </a>
        </div>
    </div>
</header>






















