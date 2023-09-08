<?php get_header();?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
       
<?php the_content() ?>

    <?php endwhile; 
        else :
            echo "no more post";
        endif
    ?>

    
<?php
 $services = new WP_Query(array(
        'post_type' => 'services', // this can be 'post', 'page', 'custom post type'
        'posts_per_page' => -1 // limit of post to be showed. -1 to show all post
    )) ?>


<section class="service__act">
    <div class="container">
      <div class="service__wrapper">
        <div class="service__list">


 <?php if( $services ->have_posts()) : while( $services ->have_posts()) :  $services ->the_post(); ?>
       
 <div class="service__item">
 <?php if(has_post_thumbnail()) {
            the_post_thumbnail();
        }
?>
              <div class="service__content">
                <h4><i class="fa-solid fa-book"></i><?php the_title();?></h4>
                <p>
                 <?php the_content(); ?>
                </p>
              </div>
            </div>

    <?php endwhile; 
        else :
            echo "no more post";
        endif
    ?>

</div>
        </div>
      </div>
    </section>

<?php get_footer();?>