<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <!--подкючение возможности адаптивной верстки по ширине страницы с маштабом 1:1-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
</head>

<body <?php body_class(); ?>>
 <?php wp_body_open(); ?> 
 <div class="container"> <!--Завершится в footer-->
  <div class="container-header">
    <header class="header">
      <div class="header-wrapper">
        <?php
          //если логотип есть и страница главная
          if( has_custom_logo() && is_front_page() ) {
            //тогда выводим логотип из админки и назв сайта без ссылки на главную
            echo '<div class="logo">'. get_custom_logo().'</div>';
          //если логотипа нет, страница - главная
          } elseif ( ! has_custom_logo() && is_front_page() ) {
            //тогда выводим свой логотип (svg) и назв сайта без ссылки на главную
            echo '<div class="logo">'. 
              '<svg class="logo-icon">
                            <use xlink:href="'; echo get_template_directory_uri().'/assets/images/logoВП.png"></use>
                          </svg> '.
            '<span  class="logo-name" >'.
                get_bloginfo( 'name' ) .
            '</span></div>';
          //если логотип есть, страница - не главная
          } elseif ( has_custom_logo() && ! is_front_page() ) {
            //тогда выводим логотип из админки и назв сайта с ссылкой на главную
            echo '<div class="logo">'. get_custom_logo() ?></div>
            <?php
          //если логотипа нет и страница - не главная
          } else {
            //тогда выводим логотип из админки и назв сайта с ссылкой на главную
            ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <svg class="logo-icon">
                <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/logoВП.png"></use>
              </svg>
            <?php '</a>';
          }
        ?>
        <div class="header-slogan">Качество, проверенное поколениями</div>
        <!--МЕНЮ-->
        <?php
          wp_nav_menu( [
	          'theme_location'  => 'header_menu',
	          'container'       => 'nav', 
	          'container_class' => 'header-nav', 
	          'menu_class'      => 'header-menu', 
	          'echo'            => true,
          ] );
        ?>

        <!--Меню для маленького экрана-->
        <a href="#" class="header-menu-toggle">
            <span></span>
            <span></span>
            <span></span>  
        </a>
        <span class="header-menu-toggle-1">МЕНЮ</span>

        <div class="header-telef">8 800 2000 679</div>
        <div class="header-work-time">пн - пт с 9:00 до 18:00</div>
        <div class="header-feedback">ОБРАТНЫЙ ЗВОНОК</div>

      </div><!--/.header-wrapper-->
    </header>
  </div><!--/.container-header-->