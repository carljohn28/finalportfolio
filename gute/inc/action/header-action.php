<?php 
/*
*
*
*
*
*/

function gute_header_menubar_output(){
?>
	<header id="masthead" class="site-header text-light shadow-sm">
		<div class="container-fluid pl-5 pr-5">
			<div class="d-flex">
				<div class="align-self-start">
					<div class="site-branding">
						<?php
						if(has_custom_logo()):
							the_custom_logo();
						else:
							?>
							<h1 class="site-title"><a class="text-white" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a></h1>
							
							<?php
						$gute_description = get_bloginfo( 'description', 'display' );
						if ( $gute_description || is_customize_preview() ) :
							?>
							<p class="site-description d-none"><?php echo esc_html($gute_description); /* WPCS: xss ok. */ ?></p>
						<?php
						 endif;
						 endif; ?>
					</div><!-- .site-branding -->
				</div>
				<div class="flex-grow-1">
						<nav class="navbar navbar-expand-lg">
						    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle Navigation', 'gute' ); ?>">
						        <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
						    </button>
						    <div class="collapse navbar-collapse" id="navbar-content">
						        <?php
						        wp_nav_menu( array(
						            'theme_location' => 'menu-1', // Defined when registering the menu
						            'menu_id'        => 'primary-menu',
						            'container'      => false,
						            'depth'          => 2,
						            'menu_class'     => 'navbar-nav ml-auto',
						            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						            'walker'         => new WP_Bootstrap_Navwalker()
						        ) );
						        ?>
						    </div>
						</nav>	
					</div>
					<div class="align-self-start">
						<div class="header-search">
							<div class="search-icon"><i class="fa fa-search"></i></div>
							<div class="header-search-form shadow-lg">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>
			</div>
		</div>

	</header><!-- #masthead style="background: url(http://localhost/easy/wp-content/uploads/2018/07/bg3.jpg) -->

<?php
}
add_action( 'gute_header_menubar', 'gute_header_menubar_output' );