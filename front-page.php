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

        <img src="<?php echo get_template_directory_uri().'/assets/images/komment.svg';?>" alt="" class="smeta-social-komment">

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
  <!--Хлебные крошки-->
  <div class="bread-crumbs">Главная
    <img src="<?php echo get_template_directory_uri().'/assets/images/arrow.png';?>" alt="" class="bread-crumbs-icon">Проекты
  </div><!--/bread-crumbs-->
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
         <!-- Если нам нужны кнопки навигации -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- Если нам нужна полоса прокрутки -->
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
        <img src="<?php echo get_template_directory_uri().'/assets/images/etazhn1.png';?>" alt="" class="house-project-plan-view">
      </div>
      <div class="house-project-plan-2">
        <div class="house-project-plan-text">2 этаж</div>
        <img src="<?php echo get_template_directory_uri().'/assets/images/etazhn2.png';?>" alt="" class="house-project-plan-view">
      </div>
    </div><!--/.house-project-plan/ -->
  </div><!--/.house-project-wrapper-->

<img width=773px src="images/carousel.jpg" alt="project overview picture">
    <div class="slider">
      <img src="images/arrow-left.png" alt="slider arrow - left">
      <img src="<?php echo get_template_directory_uri().'/assets/images/carousel1.png';?>" alt="smaller view picture">
      <img src="<?php echo get_template_directory_uri().'/assets/images/carousel2.png';?>" alt="smaller view picture">
      <img src="<?php echo get_template_directory_uri().'/assets/images/carousel3.png';?>" alt="smaller view picture">
      <img src="<?php echo get_template_directory_uri().'/assets/images/carousel4.png';?>" alt="smaller view picture">
      <img src="images/arrow-right.png" alt="slider arrow - right">
    </div>

<div class="equipment-wrapper"><!--Блок КОМПЛЕКТАЦИЯ-->
  <div class="equipment-basic"><!--Комплектация "Базовая"-->
    <div class="equipment-name"><svg class="equipment-icon">
      <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#equipment_basic"></use>
    </svg><span class="equipment-name-text">Комплектация "Базовая"   (домокомплект)</span></div>
    <ul class="equipment-list">
      <li class="equipment-list-1">Рубленый стеновой комплект сруб в чашу</li>
      <li class="equipment-list-2">Баки половые брус  100 на 200</li>
      <li class="equipment-list-1">Пере... межэтажный брус 150 на 200</li>
      <li class="equipment-list-2">Межвенцовый утеплитель (...)</li>
      <li class="equipment-list-1">Стропила</li>
      <li class="equipment-list-2">Обрешетка</li>
      <li class="equipment-list-1">Нигеля березовые</li>
      <li class="equipment-list-2">Рубероид, ... ... кровля</li>
      <li class="equipment-list-1">Метизы</li>
    </ul> 
    <div  class="equipment-basic-price" >1 200 000 руб.</div>   
  </div><!--/equipment-basic-->  

  <div class="equipment-optimal"><!--Комплектация "Оптимальная"-->
    <div class="equipment-name"><img src="<?php echo get_template_directory_uri()?>/assets/images/optimum.png" class="equipment-icon">
    <span  class="equipment-name-text" >Комплектация "Оптимальная"    (домокомплект + монтаж)</span></div>
      
    <ul class="equipment-list">
      <li class="equipment-list-1">Укладка межвенцового утеплителя</li>
      <li class="equipment-list-2">Устройство стропильной системы</li>
      <li class="equipment-list-1">Пере... межэтажный брус 150 на 200</li>
      <li class="equipment-list-2">Межвенцовый утеплитель (...)</li>
      <li class="equipment-list-1">Стропила</li>
      <li class="equipment-list-2">Обрешетка</li>
      <li class="equipment-list-1">Нигеля березовые</li>
      <li class="equipment-list-2">Сборка стенового комплекта</li>
      <li class="equipment-list-1">Монтаж балок пола</li>
      <li class="equipment-list-2">Монтаж межэтажный балок</li>
      <li class="equipment-list-1">Укладка гидро...</li>
    </ul> 
    <div  class="equipment-optimal-price" >1 690 000 руб.</div>   
  </div><!--/equipment-optimal-->  
</div><!--/.equipment-wrapper-->

<div class="delivery-wrapper"><!--Блок ДОСТАВКА-->
  <h2 class="delivery-title">Доставка</h2>
    <div class="delivery-text">Чтобы  доставить  домокоплект  по данному проекту <br>  необходимо <b class="delivery-text-bold">4 единицы техники</b></div>
    <img src="<?php echo get_template_directory_uri()?>/assets/images/Car.png" class="delivery-icon">
    <img src="<?php echo get_template_directory_uri()?>/assets/images/Car.png" class="delivery-icon">
    <img src="<?php echo get_template_directory_uri()?>/assets/images/Car.png" class="delivery-icon">
    <img src="<?php echo get_template_directory_uri()?>/assets/images/Car.png" class="delivery-icon">
    <div class="delivery-text">Стоимость  доставки - <b class="delivery-text-bold">80 рублей</b> за один километр</div>
</div><!--/delivery-wrapper-->

<div class="descriptions-wrapper"><!--Блок ОПИСАНИЕ ПРОЕКТА-->
  <div class="descriptions-title">Описание проекта</div>
  <div class="descriptions-text">Проект "Волна" - чудесное решение для южных широт нашей страны. Большие площади остекления откроют чудесные виды на живописные пляжи, а террасы создадут непередаваемую атмосферу для ужинов и завтраков.</div>
  <img src="<?php echo get_template_directory_uri()?>/assets/images/description-house.png" class="descriptions-icon">
</div><!--/descriptions-wrapper-->

<div class="history-wrapper"><!--По проекту постороены дома-->
  <div class="history-title">По  даному проекту были построены дома</div>
  <ul class="history-lists">
    <li class="history-list">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/history-haus1.png"  class="history-icon">
      <div class="history-text1">Вологодская область,<br>д. Капустино</div>
      <div class="history-docpdf">
        <img src="<?php echo get_template_directory_uri()?>/assets/images/history-doc1.png" class="history-doc">
        <img src="<?php echo get_template_directory_uri()?>/assets/images/pdf.png" class="history-pdf">
      </div>
    </li>
    <li class="history-list">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/history-haus2.png"  class="history-icon">
      <div class="history-text1">Вологодская область,<br>д. Капустино</div>
      <div class="history-docpdf">
        <img src="<?php echo get_template_directory_uri()?>/assets/images/history-doc2.png" class="history-doc">
        <img src="<?php echo get_template_directory_uri()?>/assets/images/pdf.png" class="history-pdf">
      </div>
    </li>
    <li class="history-list">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/history-video.png" class="history-video">
      <div class="history-text2">Вологодская область, село Устье-Кубенское</div>
    </li>
  </ul> 
</div><!--/history-wrapper-->
<div class="photo-wrapper"><!--Фотогалерея-->
  <ul class="photo-lists">
    <li class="photo-list">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/history-haus2.png"  class="photo-icon">
    </li>
    <li class="photo-list">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/photo2.png"  class="photo-icon">
    </li>
    <li class="photo-list">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/photo3.png"  class="photo-icon">
    </li>
    <li class="photo-list">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/photo4.png"  class="photo-icon">
    </li>
    <li class="photo-list">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/photo5.png"  class="photo-icon">
    </li>
    <li class="photo-list">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/photo6.png"  class="photo-icon">
    </li>
    <li class="photo-list">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/photo7.png"  class="photo-icon">
    </li>
    <li class="photo-list">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/photo8.png"  class="photo-icon">
    </li>
  </ul>
</div><!--/photo-wrapper-->
<?php get_footer();?>