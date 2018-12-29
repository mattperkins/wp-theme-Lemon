<?php

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<article class="post">

		<h2 class="post-title">
			<?php the_title(); ?>
		</h2>

		<a href="<?php echo site_url() ?>"><div class="the-content">
			<?php the_content(); ?></a>
		</div>

	</article>

	<?php endwhile;

	else :
		echo '<p>Brand new content coming soon...</p>';
	endif;

get_footer();
?>
