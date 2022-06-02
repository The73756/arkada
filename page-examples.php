<?php
/*
Template Name:Примеры работ
Template page
*/
?>
<?php get_header(); ?>

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

<?php get_footer(); ?>