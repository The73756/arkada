<?php
/*
Template Name: Отзывы
Template page
*/
?>
<?php get_header(); ?>

<section class="review" id="review">
  <div class="container">
    <h2><?php the_title(); ?></h2>
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

<?php get_footer(); ?>