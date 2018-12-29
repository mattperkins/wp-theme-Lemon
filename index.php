<?php
// include html header
  get_header();

// loop through posts 
  while(have_posts()) { 
   the_post(); 
 ?>
 <!-- blog title / home link -->
   <h2 class="post-title">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
   </h2>
  
 <!-- all posts -->
  <div class="the-content">
    <a href="<?php the_permalink(); ?>"><?php the_content(); ?></a>
  </div>

<?php } ?>  
<!-- end posts while loop -->

<?php 
// include footer.php
  get_footer();

?>


