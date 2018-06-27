<?php 
/**
 * Template Name: Home Page
 *
 * @package WordPress
 */

 get_header(); ?>



<?php if ( have_rows( 'billboard' ) ) : ?>	

	<?php while ( have_rows( 'billboard' ) ) : the_row(); ?>

		<?php $home_page_image = get_sub_field( 'home_page_image' ); ?>

		<section class="home-billboard">

			<span class="arrow-down">arrow</span>
			
			<img src="<?php echo $home_page_image['url']; ?>" class="hero-image">

			<div class="wrapper">
				<div class="billboard-content" style="color: <?php the_sub_field( 'text_color' ); ?>">
				
					<h1 style="color: <?php the_sub_field( 'text_color' ); ?>"><?php the_sub_field( 'headline' ); ?></h1>
					<div class="billboard-summary"><?php the_sub_field( 'summary' ); ?></div>

					<?php $link = get_sub_field( 'link' ); ?>
					<?php if ( $link ) { ?>
					<div class="billboard-button">
						<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="btn btn-<?php the_sub_field( 'button_color' ); ?>"><?php echo $link['title']; ?></a>
					</div>
					<?php } ?>

				</div>
			</div>

		</section>
	<?php endwhile; ?>




<?php endif; ?>











<section class="home-usp">
	<h2 class="section-heading">Something Something</h2>
</section>


<section class="home-feature-products">
	<div class="wrapper">
		<?php echo do_shortcode('[products limit="4" columns="4" orderby="id" order="DESC" visibility="visible"]'); ?>
	</div>
</section>


<section class="home-cta-5050-spot">

	<div class="home-cta-5050-container wrapper">
		<div class="home-cta-5050-item item1">
			<h2>left</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum iste architecto ea cupiditate natus nobis quasi, quae repellat nostrum sed impedit sit tempore, enim, cumque consequuntur autem molestias voluptatum ipsum.</p>
		</div>
		<div class="home-cta-5050-item item1">
			<h2>right</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum iste architecto ea cupiditate natus nobis quasi, quae repellat nostrum sed impedit sit tempore, enim, cumque consequuntur autem molestias voluptatum ipsum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non aspernatur eum, a unde quasi enim!</p>

		</div>
	</div>

</section>


<section class="home-cta">
	above footer cta
</section>





<?php get_footer(); ?>