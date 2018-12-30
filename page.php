<?php
get_header();

// get individual page content from WP admin
while(have_posts()) {
 the_post(); 
?>

<!-- WP title -->
<!-- remove so it doesnt conflict (double) nav menu drop down text -->

<!-- <h1><?php
// the_title();
?></h1> -->


<!-- WP content -->
<div class="well">
<?php
the_content();
?>
</div>

<!-- WP footer -->
<?php }
get_footer();
?>