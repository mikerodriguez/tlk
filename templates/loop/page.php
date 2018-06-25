<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="page-header">
	<div class="wrapper">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</div>
</div>

<div class="wrapper">
	<?php the_content(); ?>
</div>
	
<?php endwhile; // end of the loop. ?>