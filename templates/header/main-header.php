<header class="site-header">
	<div class="wrapper">
		<div class="logo fleft">&nbsp;<?php get_template_part('templates/header/logo') ?></div>
		<div class="navigation fleft">
			<?php $args = array(
					'theme_location'	=>	'primary'
			); ?>
			<?php wp_nav_menu( $args ); ?>
		</div>
		<div class="user-menu fright">
			<ul class="user-menu-list">
				<li class="mobile-menu-trigger">
					<button class="mobile-menu-btn mobile-navigation-trigger trigger-btn"><i class="fas fa-bars"></i></button>
				</li>
				<li class="user-menu-cart">
					<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
						<i class="fas fa-shopping-cart"></i>
						<span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
						<span class="cart-total"><?php echo WC()->cart->get_cart_total(); ?></span>
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