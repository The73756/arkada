<?php get_header(); ?>

<main class="main" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-md-offset-1">
        <h1><?php the_field( 'main_title', $post->ID ); ?></h1>
        <h2><?php the_field( 'main_subtitle', $post->ID ); ?></h2>
        <div class="main-feature">
          <img src="<?php echo get_template_directory_uri(); ?> /assets/img/main/icon-1@1x.png" alt="piggy">
          <p class="main-feature-p">
            <? the_field( 'features_1', $post->ID ); ?>
          </p>
        </div>
        <div class="main-feature">
          <img src="<?php echo get_template_directory_uri(); ?> /assets/img/main/icon-2@1x.png" alt="clock">
          <p class="main-feature-p">
            <? the_field( 'features_2', $post->ID ); ?>
          </p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="main-cta-block col-md-12 col-sm-12 col-xs-12">

        <div class="col-md-7 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
          <b class="main-cta"><?php the_field( 'promo_title', $post->ID ); ?></b>
          <b class="main-cta-sub"><?php the_field( 'promo_subtitle', $post->ID ); ?></b>

          <form method="post" name="first-form" action="mailer/smart.php" class="form">

            <div class="col-md-6 col-sm-6 col-xs-12">
              <input name="user_name" required type="text" placeholder="Ваше имя">
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <input name="phone" id="phone-1" required type="text" placeholder="Ваш телефон">
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <button id="first-btn" type="submit" class="popup-thanks-btn">Оставить заявку</button>
            </div>

            <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-12 col-xs-offset-0">
              <p>Наш менеджер перезвонит Вам в течене 15 минут для консультации.<br>* при заказе строительства дома</p>
            </div>

          </form>

        </div>

      </div>
    </div>
  </div>
</main>

<section class="features">
  <div class="container">
    <div class="col-md-4 col-sm-12 col-xs-12">
      <div class="media">
        <div class="media-left">
          <img class="media-object" src="<?php echo get_template_directory_uri(); ?> /assets/img/features/1.png"
            alt="Неизменная цена">
        </div>
        <div class="media-body">
          <h2 class="media-heading"><?php the_field( 'benefits_title_1', $post->ID ); ?></h2>
          <p><?php the_field( 'benefits_descr_1', $post->ID ); ?></p>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-12 col-xs-12">
      <div class="media">
        <div class="media-left">
          <img class="media-object" src="<?php echo get_template_directory_uri(); ?> /assets/img/features/2.png"
            alt="Неизменная цена">
        </div>
        <div class="media-body">
          <h2 class="media-heading"><?php the_field( 'benefits_title_2', $post->ID ); ?></h2>
          <p><?php the_field( 'benefits_descr_2', $post->ID ); ?></p>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-12 col-xs-12">
      <div class="media">
        <div class="media-left">
          <img class="media-object" src="<?php echo get_template_directory_uri(); ?> /assets/img/features/3.png"
            alt="Неизменная цена">
        </div>
        <div class="media-body">
          <h2 class="media-heading"><?php the_field( 'benefits_title_3', $post->ID ); ?></h2>
          <p><?php the_field( 'benefits_descr_3', $post->ID ); ?></p>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="shop" id="shop">
  <div class="container">
    <h2>Популярные проекты</h2>
    <ul class="shop-ul">
      <li><a class="active-color" href="#shop" id="a-1">Дома из бруса</a></li>
      <li><a href="#shop" id="a-2">Сруб</a></li>
      <li><a href="#shop" id="a-3">Каркасные дома</a></li>
      <li><a href="#shop" id="a-4">Кирпичные дома</a></li>
      <li><a href="#shop" id="a-5">Дома из блоков</a></li>
    </ul>


    <!-- Дома из блоков -->
    <div class="shop-cards" id="shop-cards-5">
      <?php
        global $post;

        $myposts = get_posts([ 
          'numberposts' => 8,
          'order'       => 'ASC',
          'category_name'    => 'concrete'
        ]);

        if( $myposts ){
          foreach( $myposts as $post ){
            setup_postdata( $post );
            ?>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="shop-card">
          <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail( $post->ID, 'thumbnail' ); 
                    }else {
                  ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.png" alt="Картинка не найдена">
          <?php
                    }
                  ?>
          <h3><?php the_title(); ?></h3>
          <p><?php the_field( 'area' ); ?><sup>2</sup></p>
          <span><?php the_field( 'old_price' ); ?></span>
          <b><?php the_field( 'new_price' ); ?></b>
          <button type="submit" class="popup-btn button-small">Оставить заявку</button>
        </div>
      </div>
      <?php 
          }
        } else {
          echo "<p>Упс... Что то пошло не так!</p>";
        }

        wp_reset_postdata(); // Сбрасываем $post
      ?>
    </div>

    <!-- Кирпичные дома -->
    <div class="shop-cards" id="shop-cards-4">
      <?php
        global $post;

        $myposts = get_posts([ 
          'numberposts' => 8,
          'order'       => 'ASC',
          'category_name'    => 'brics'
        ]);

        if( $myposts ){
          foreach( $myposts as $post ){
            setup_postdata( $post );
            ?>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="shop-card">
          <?php
                  if (has_post_thumbnail()) {
                    the_post_thumbnail( $post->ID, 'thumbnail' ); 
                  }else {
                    ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.png" alt="Картинка не найдена">
          <?php
                  }
                  ?>
          <h3><?php the_title(); ?></h3>
          <p><?php the_field( 'area' ); ?><sup>2</sup></p>
          <span><?php the_field( 'old_price' ); ?></span>
          <b><?php the_field( 'new_price' ); ?></b>
          <button type="submit" class="popup-btn button-small">Оставить заявку</button>
        </div>
      </div>
      <?php 
          }
        } else {
          echo "<p>Упс... Что то пошло не так!</p>";
        }

        wp_reset_postdata(); // Сбрасываем $post
      ?>
    </div>

    <!-- Каркасные дома -->
    <div class="shop-cards" id="shop-cards-3">
      <?php
        global $post;

        $myposts = get_posts([ 
          'numberposts' => 8,
          'order'       => 'ASC',
          'category_name'    => 'frame'
        ]);

          if( $myposts ){
            foreach( $myposts as $post ){
              setup_postdata( $post );
              ?>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="shop-card">
          <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail( $post->ID, 'thumbnail' ); 
                    }else {
                      ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.png" alt="Картинка не найдена">
          <?php
                    }
                    ?>
          <h3><?php the_title(); ?></h3>
          <p><?php the_field( 'area' ); ?><sup>2</sup></p>
          <span><?php the_field( 'old_price' ); ?></span>
          <b><?php the_field( 'new_price' ); ?></b>
          <button type="submit" class="popup-btn button-small">Оставить заявку</button>
        </div>
      </div>
      <?php 
            }
          } else {
            echo "<p>Упс... Что то пошло не так!</p>";
          }

          wp_reset_postdata(); // Сбрасываем $post
      ?>
    </div>

    <!-- Сруб -->
    <div class="shop-cards" id="shop-cards-2">
      <?php
          global $post;

          $myposts = get_posts([ 
            'numberposts' => 8,
            'order'       => 'ASC',
            'category_name'    => 'blockhouse'
          ]);

          if( $myposts ){
            foreach( $myposts as $post ){
              setup_postdata( $post );
              ?>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="shop-card">
          <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail( $post->ID, 'thumbnail' ); 
                    }else {
                      ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.png" alt="Картинка не найдена">
          <?php
                    }
                    ?>
          <h3><?php the_title(); ?></h3>
          <p><?php the_field( 'area' ); ?><sup>2</sup></p>
          <span><?php the_field( 'old_price' ); ?></span>
          <b><?php the_field( 'new_price' ); ?></b>
          <button type="submit" class="popup-btn button-small">Оставить заявку</button>
        </div>
      </div>
      <?php 
            }
          } else {
            echo "<p>Упс... Что то пошло не так!</p>";
          }

          wp_reset_postdata(); // Сбрасываем $post
      ?>
    </div>

    <!-- Дома из бруса -->
    <div class="shop-cards active" id="shop-cards-1">
      <?php
        global $post;

        $myposts = get_posts([ 
          'numberposts' => 8,
          'order'       => 'ASC',
          'category_name'    => 'lumber'
        ]);

        if( $myposts ){
          foreach( $myposts as $post ){
            setup_postdata( $post );
            ?>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="shop-card">
          <?php
                  if (has_post_thumbnail()) {
                    the_post_thumbnail( $post->ID, 'thumbnail' ); 
                  }else {
                    ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.png" alt="Картинка не найдена">
          <?php
                  }
                  ?>
          <h3><?php the_title(); ?></h3>
          <p><?php the_field( 'area' ); ?><sup>2</sup></p>
          <span><?php the_field( 'old_price' ); ?></span>
          <b><?php the_field( 'new_price' ); ?></b>
          <button type="submit" class="popup-btn button-small">Оставить заявку</button>
        </div>
      </div>
      <?php 
          }
        } else {
          echo "<p>Упс... Что то пошло не так!</p>";
        }

        wp_reset_postdata(); // Сбрасываем $post
      ?>
    </div>

  </div>
</section>

<section class="example" id="example">
  <div class="container">
    <?php
      global $post;
      $myposts = get_posts([ 
        'numberposts' => 1,
        'order'       => 'ASC',
        'category_name'    => 'slider'
      ]);

      if( $myposts ){
        foreach( $myposts as $post ){
          setup_postdata( $post );
          ?>
    <h2><?php the_title(); ?></h2>
    <?php
            $images = get_post_gallery_images( $post->ID );
            echo '<div class="slider_ex">';
              foreach ( $images as $image ) {
                echo '<img src="' . $image . '">';
              }
            echo '</div>';
        } 
      } else {
      echo "<p>Упс... Что то пошло не так!</p>";
      }

      wp_reset_postdata(); // Сбрасываем $post
    ?>
  </div>
</section>

<section class="houses">
  <div class="house house-1">
    <div class="container">
      <div class="col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12 col-xs-offset-0">
        <h2>Каркасные дома</h2>
        <ul>
          <li>Низкая стоимость строительства.</li>
          <li>Низкие затраты на эксплуатацию.</li>
          <li>Можно строить в любое время года.</li>
          <li>Легкость и доступность внутренней отделки.</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="house house-2">
    <div class="container">
      <div class="col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12 col-xs-offset-0">
        <h2>Кирпичные дома</h2>
        <ul>
          <li>Высокий уровень звукоизоляции.</li>
          <li>Повышенная теплоизоляция.</li>
          <li>Долговечность и прочность.</li>
          <li>Высокая противопожарная защита.</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="house house-3">
    <div class="container">
      <div class="col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12 col-xs-offset-0">
        <h2>Блочные дома</h2>
        <ul>
          <li>Низкая стоимость.</li>
          <li>Безопасен для здоровья.</li>
          <li>Сохраняет тепло.</li>
          <li>Высокая противопожарная защита.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="upsell">
  <div class="container">
    <div class="row">
      <h2>Кровельные работы</h2>
      <p class="upsell-desc">Наша компания выполняет весь необходимый комплекс по монтажу кровли<br>из любых материалов:
      </p>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="upsell-block">
          <img src="<?php echo get_template_directory_uri(); ?> /assets/img/upsell/1.png" alt="Металлочерепица">
          <b>Металлочерепица</b>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="upsell-block">
          <img src="<?php echo get_template_directory_uri(); ?> /assets/img/upsell/2.png" alt="Мягкая гибкая черепица">
          <b>Мягкая гибкая черепица</b>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="upsell-block">
          <img src="<?php echo get_template_directory_uri(); ?> /assets/img/upsell/3.png" alt="Профнастил">
          <b>Профнастил</b>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="upsell-block">
          <img src="<?php echo get_template_directory_uri(); ?> /assets/img/upsell/4.png" alt="Шифер">
          <b>Шифер</b>
        </div>
      </div>
    </div>
    <p class="upsell-more">и много других материалов.</p>
    <div class="row">
      <div class="upsell-cta-block main-cta-block col-md-12 col-sm-12 col-xs-12">

        <div class="col-md-7 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
          <b class="main-cta"><?php the_field( 'promo_title_2' ); ?></b>
          <b class="main-cta-sub"><?php the_field( 'promo_subtitle_2' ); ?></b>

          <form method="post" name="second-form" action="mailer/smart.php" class="second-form form">
            <?php echo do_shortcode( '[contact-form-7 id="215" title="Форма на главной странице"]' ); ?>
          </form>

        </div>

      </div>
    </div>
  </div>
</section>

<section class="review" id="review">
  <div class="container">
    <h2>Клиенты о нас</h2>
    <div class="row">
      <div class="slider_ex">
        <?php
          global $post;
          $myposts = get_posts([ 
            'numberposts' => 10,
            'order'       => 'ASC',
            'category_name'    => 'reviews'
          ]);

          if( $myposts ){
            foreach( $myposts as $post ){
              setup_postdata( $post );
              ?>
        <div class="review-block">
          <div class="media review-avatar">
            <div class="media-left">
              <div class="media-object">
                <?php
                          if (has_post_thumbnail()) {
                            the_post_thumbnail( $post->ID, 'revirews-logo' ); 
                          } else {
                            ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image-small.png"
                  alt="Картинка не найдена">
                <?php
                          }
                        ?>
              </div>
            </div>
            <div class="media-body">
              <p class="review-avatar-name"><?php the_field( 'reviews_meta' ); ?></p>
            </div>
          </div>
          <div class="review-block-text">
            <h3><?php the_title(); ?></h3>
            <p><?php echo wp_strip_all_tags( get_the_content( $post->ID ) ); ?></p>
          </div>
        </div>
        <?php 
            }
          } else {
          echo "<p>Упс... Что то пошло не так!</p>";
          }

          wp_reset_postdata(); // Сбрасываем $post
        ?>
      </div>
    </div>
  </div>
</section>

<div class="contacts" id="contacts">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <div class="contacts-block">
          <img src="<?php echo get_template_directory_uri(); ?> /assets/img/contacts/1.png" alt="">
          <a class="contacts-phone"
            href="tel:<?php the_field( 'main_phone', 11 ); ?>"><?php the_field( 'main_phone', 11 ); ?></a>
        </div>
      </div>
      <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <div class="contacts-block">
          <img src="<?php echo get_template_directory_uri(); ?> /assets/img/contacts/2.png" alt="">
          <p><?php the_field( 'main_address', 11 ); ?></p>
        </div>
      </div>
      <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <div class="contacts-block">
          <img src="<?php echo get_template_directory_uri(); ?> /assets/img/contacts/3.png" alt="">
          <a href="mailto:<?php the_field( 'main_email', 11 ); ?>"><?php the_field( 'main_email', 11 ); ?></a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="map">
  <?php echo do_shortcode( '[wpgmza id="1"]' ) ?>
</div>

<section class="question" id="question">
  <div class="container">
    <h2>Остались вопросы?</h2>
    <a id="manager-call" href="#question">Задайте их менеджеру</a>
  </div>
</section>

<!-- Popup -->
<div class="popup popup-call">
  <!-- Само (белое) модальное окно -->
  <div class="popup-dialog">
    <!-- Содежримое -->
    <div class="popup-content">
      <button type="submit" class="popup-close">&times;</button>
      <h4 class="popup-header">
        Заинтересовало?
      </h4>
      <p>Оставьте свои контактные данные <br>для связи</p>

      <form method="post" name="third-form" action="mailer/smart.php" class="form">
        <?php echo do_shortcode( '[contact-form-7 id="214" title="Форма в модальном окне"]' ); ?>
      </form>

    </div>
  </div>
</div>

<!-- Popup -->
<div class="popup popup-thanks">
  <!-- Само (белое) модальное окно -->
  <div class="popup-dialog">
    <!-- Содежримое -->
    <div class="popup-content">
      <button type="submit" class="popup-close">&times;</button>
      <h2 class="popup-header">
        Спасибо за заявку
        </h4>
        <p>В течение 5 минут мы Вам перезвоним</p>
        <button class="thanks-btn button-small">Вернуться на сайт</button>
    </div>
  </div>
</div>

<?php get_footer(); ?>