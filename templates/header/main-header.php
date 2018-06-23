<header class="site-header">
	<div class="wrapper">
		<div class="logo fleft">
			&nbsp;
			<?php get_template_part('templates/header/logo') ?>
		</div>
		<div class="navigation fleft">
			<?php $args = array(
					'theme_location'	=>	'primary'
			); ?>
			<?php wp_nav_menu( $args ); ?>
		</div>
		<div class="user-menu fright">
			<ul class="user-menu-list">
				<li>
					<a href="<?php echo home_url('cart'); ?>" title="Cart">
						<i class="fas fa-shopping-cart"></i>
					</a>
				</li>
				<li>
					<a href="<?php echo home_url('my-account'); ?>" title="My Account">
						<i class="fas fa-user"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
</header>