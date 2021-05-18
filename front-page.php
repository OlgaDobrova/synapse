<?php get_header( );?>
<div class="container-smeta">
  <div class="smeta">
    <div class="smeta-text">Поделиться проектом</div>
    <div class="smeta-social">
      <a href="http://vk.com/">
        <img src="<?php echo get_template_directory_uri().'/assets/images/vk.svg';?>" alt="" class="smeta-social-icon">
      </a>
      <a href="http://ok.ru/">
        <img src="<?php echo get_template_directory_uri().'/assets/images/ok.svg';?>" alt="" class="smeta-social-icon-ok">
      </a>
      <a href="http://fasebook.com/">
        <img src="<?php echo get_template_directory_uri().'/assets/images/fasebook.svg';?>" alt="" class="smeta-social-icon">
      </a>
      <a href="http://vk.com/">
        <img src="<?php echo get_template_directory_uri().'/assets/images/komment.svg';?>" alt="" class="smeta-social-komment">
      </a>
    </div><!--/.smeta-social-->
      <div class="smeta-parameters">
        <img src="<?php echo get_template_directory_uri().'/assets/images/house.svg';?>" alt="" class="smeta-parameters-1">
        <img src="<?php echo get_template_directory_uri().'/assets/images/parameters.svg';?>" alt="" class="smeta-parameters-2">
      </div><!--/.parameters-->

      <div class="smeta-text">Цена за домокомплект:</div>
      <div class="smeta-text-green">1 200 000 руб.</div>
      <div class="smeta-text-button">Заказать смету</div>
    <div class="smeta-about">
      Проект «На озере» - чудесное решение для южных широт нашей страны. Большие площади остекления откроют чудесные виды на живописные пляжи, а террасы создадут непередаваемую атмосферу  для ужинов и завтраков.
    </div><!--/.smeta-about-->
  </div><!--/.smeta-->
</div><!--/.container-smeta-->
<div class="container-chief"> <!--Завершится в footer-->
  <h3 class="house-project-title"><?php the_title();?></h3>
  <div class="house-project-wrapper"> <!--Слайдер + планы дома-->
    <div class="house-project-swiper"><!--Слайдер-->
      <?php
        //Объявляем глобальную переменную post
        global $post;
        $query = new WP_Query([ 
        	'posts_per_page' => 1,
          'category_name'  => 'photoprogect',
        ]);
        //проверка на наличие постов
        //если есть
        if($query->have_posts()){
          //то запускаем цикл
        	while( $query->have_posts()){
        		$query->the_post();
      ?>

      <!-- Слайдер Slider main container -->
      <div class="swiper-container photo-house-project-slider">
        <!-- Дополнительная необходимая обертка -->
        <div class="swiper-wrapper">
          <!-- Слайды -->
          <!--get_attached_media выводит все картинки, которые прикреплены к посту-->
          <?php $images = get_attached_media('image');
            foreach ($images as $image) {
              //guid - это ссылка на картинку
              //print_r($image -> guid) - вывести ссылку на картинку
              echo '<div class="swiper-slide"><img src="';
              print_r($image -> guid);
              echo '"></div>';
            }
          ?>
        </div>
        <div class="swiper-pagination"></div>
         <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
      </div><!--/.swiper-container photo-report-slider-->
          
      <?php 
        	}
        } else {
        	// Постов не найдено
          ?>
          <p>Постов не найдено</p>
          <?php
        }
        wp_reset_postdata(); // Сбрасываем $post
      ?>
    </div><!--/.house-project-swiper/ -->
    <div class="house-project-plan"><!--планы дома-->
      <div class="house-project-plan-1">
        <div class="house-project-plan-text">1 этаж</div>
        <img src="http://synapse/wp-content/uploads/2021/05/etazh1n.png" alt="" class="house-project-plan-view">
      </div>
      <div class="house-project-plan-2">
        <div class="house-project-plan-text">2 этаж</div>
        <img src="http://synapse/wp-content/uploads/2021/05/etazhn2.png" alt="" class="house-project-plan-view">
      </div>
    </div><!--/.house-project-plan/ -->

      <!--планы дома--> 

        

  </div><!--/.house-project-wrapper-->
<img width=773px src="images/lake.jpg" alt="project overview picture">
    <div class="slider">
      <img src="images/arrow-left.png" alt="slider arrow - left">
      <img src="<?php echo get_template_directory_uri().'/assets/images/lake1.png';?>" alt="smaller view picture">
      <img src="<?php echo get_template_directory_uri().'/assets/images/lake2.png';?>" alt="smaller view picture">
      <img src="<?php echo get_template_directory_uri().'/assets/images/lake3.png';?>" alt="smaller view picture">
      <img src="<?php echo get_template_directory_uri().'/assets/images/lake4.png';?>" alt="smaller view picture">
      <img src="images/arrow-right.png" alt="slider arrow - right">
    </div>

<?php get_footer();?>