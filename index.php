<?php
// include html header
  get_header();

// loop through posts 
  while(have_posts()) { 
   the_post(); 
 ?>
 <!-- blog title / home link -->
   <h2>
   <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
   
 <!-- all posts -->
   <?php the_content(); 
 }


// include footer.php
  get_footer();

?>


