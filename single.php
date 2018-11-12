<?php

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<article class="post">

		<h2 class="post-title">
			<?php the_title(); ?>
		</h2>

		<div class="the-content">
			<?php the_content(); ?>
		</div>

	</article>

	<?php endwhile;

	else :
		echo '<p>Brand new content coming soon...</p>';
	endif;

get_footer();
?>
