<div class="main-footer">
	<div class="wrapper main-footer-container">

		<div class="information-column column">
			<?php the_field( 'footer_information', 'option' ); ?>

			<?php //Footer Social ?>

			<?php if ( have_rows( 'footer_social', 'option' ) ) : ?>
				<?php while ( have_rows( 'footer_social', 'option' ) ) : the_row(); ?>
					<?php $link = get_sub_field( 'link' ); ?>
						<a href="" target="_blank" title="<?php the_sub_field( 'name' ); ?>" class="social-icon">
							<?php the_sub_field( 'icon' ); ?>
						</a>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>


		</div> <!-- end .information-column  -->

		<?php if ( have_rows( 'footer', 'option' ) ) : ?>
				<?php while ( have_rows( 'footer', 'option' ) ) : the_row(); ?>

				<div class="link-column column">
					<h4><?php the_sub_field( 'column_header' ); ?></h4>

					<?php if ( have_rows( 'links' ) ) : ?>
					<ul class="column-links">
						<?php while ( have_rows( 'links' ) ) : the_row(); ?>
						<li>
							<?php $link = get_sub_field( 'link' ); ?>
							<?php if ( $link ) { ?>
								<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
							<?php } ?>
						</li>
						<?php endwhile; ?>
					</ul>
					<?php endif; ?>

				</div>
				<?php endwhile; ?>
		<?php endif; ?>





	</div><!-- end .wrapper main-footer-container -->
</div><!-- end .main-footer -->

<div class="secondary-footer">
	<div class="wrapper secondary-footer-container">
		<div class="copyright">
			<?php the_field('footer_copyright', 'options') ?>
		</div>
		<div class="secondary-footer-links">
			<ul class="links">
				<li>
					<a href="#">Test Link</a>
				</li>
			</ul>
		</div>
	</div>
</div>


</main>

<?php wp_footer(); ?>