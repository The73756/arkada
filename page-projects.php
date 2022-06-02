
<?php get_header(); ?>

<section class="shop" id="shop">
  <div class="container">
    <h2><?php the_title(); ?></h2>
    <ul class="shop-ul">
      <li><a class="active-color" href="#shop" id="a-1"><?php the_field( 'project_name_1' ); ?></a></li>
      <li><a href="#shop" id="a-2"><?php the_field( 'project_name_2' ) ?></a></li>
      <li><a href="#shop" id="a-3"><?php the_field( 'project_name_3' ) ?></a></li>
      <li><a href="#shop" id="a-4"><?php the_field( 'project_name_4' ) ?></a></li>
      <li><a href="#shop" id="a-5"><?php the_field( 'project_name_5' ) ?></a></li>
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

<?php get_footer(); ?>