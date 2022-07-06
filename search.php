<?php if ( have_posts() ) : ?>
	<?php
	get_template_part( 'template-parts/content','search');
	
	?>
<?php else : ?>

	<?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>
