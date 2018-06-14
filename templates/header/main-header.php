<header class="site-header">
	<div class="wrapper">
		<div class="logo fleft">
			<?php get_template_part('templates/header/logo') ?>
		</div>
		<div class="navigation fright">
			<?php $args = array(
					'theme_location'	=>	'primary'
			); ?>
			<?php wp_nav_menu( $args ); ?>
		</div>
	</div>
</header>