
<?php if ( have_posts() ) : ?>

	

	<?php /* Start the Loop */ ?>
	<?php //while ( have_posts() ) : the_post(); ?>

		<?php
		/**
		 * Run the loop for the search to output the results.
		 * If you want to overload this in a child theme then include a file
		 * called content-search.php and that will be used instead.
		 */
		get_template_part( 'template-parts/content','search');
		
		?>

	<?php //endwhile; ?>

	

<?php else : ?>

	<?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>
