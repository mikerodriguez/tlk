<?php 
/**
 * Template Name: Home Page
 *
 * @package WordPress
 */

 get_header(); ?>




<section class="home-billboard">
	

	<div class="wrapper">

		<div class="billboard-content">
		
			<h1>TOP OF THE FOOD CHAIN</h1>
			<div class="billboard-summary">Deliciously healthy prepared meals delivered right to your door!</div>

			<div class="billboard-button">
				<a href="#">Learn More</a>
			</div>

		</div>


	</div>


</section>



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