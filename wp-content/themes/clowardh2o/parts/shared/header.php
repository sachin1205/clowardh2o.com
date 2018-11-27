<!-- Site header wrap start-->
<div class="site-header-wrap 
<?php if ( is_front_page() || is_page_template( 'fullwidth.php' ) || is_page_template( 'our-work2.php' ) || is_page_template( 'contact.php' ) ) :
	echo 'site-header-wrap-home';
endif; ?>">
	<!--Site Header start-->
   	<header class="site-header" role="banner">
   		<!--sticky header start-->
		<div class="sh-sticky-wrap">
			<div class="inner-wrap">
				<!-- site logo start -->
				<span class="sh-logo-wrap"><a href="<?php bloginfo('url'); ?>" class="site-logo"><img src="<?php bloginfo('template_url'); ?>/img/cloward-h2o-logo.jpg" alt="Cloward H2O" title="Cloward H2O"></a></span>
				<!-- site logo end -->
				<span class="sh-icons">
					<a href="#menu" class="sh-ico-menu menu-link">&nbsp;</a>
				</span>
				<!--site nav container start-->
				<div class="site-nav-container">
					<div class="snc-header">
						<a href="#" class="close-menu menu-link">Close</a>
					</div>
					<?php wp_nav_menu(array(
					'menu'            => 'Primary Nav',
					'container'       => 'nav',
					'container_class' => 'site-nav',
					'menu_class'      => 'sn-level-1',
					'walker'        => new themeslug_walker_nav_menu
					)); ?>
				</div>
				<!--site nav container end-->
			</div>
		</div>
		<!--sticky header end-->
	</header>
	<!--Site Header end-->
	