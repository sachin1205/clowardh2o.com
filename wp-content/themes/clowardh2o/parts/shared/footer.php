<!--Site Footer start-->
<footer class="site-footer" role="contentinfo">
	<div class="inner-wrap">

		<!-- site logo start -->
		<span class="sf-logo"><img src="<?php bloginfo('template_url'); ?>/img/sf-logo.jpg" alt="Cloward H2O" title="Cloward H2O"></span>
		<!-- site logo end -->

		<!--footer contact start-->
		<div class="sf-contact-wrap">
			<h2 class="sf-heading">Contact</h2>
			<div class="sf-contact">
				801 375 1223<br><br>
				<a href="mailto:info@clowardh2o.com">info@clowardh2o.com</a>
			</div>
			<!--footer address start-->
			<div class="sf-address">
				2696 North University Ave,<br>
				Suite 290<br>
				Provo Utah 84604
			</div>
			<!--footer address end-->
		</div>
		<!--footer contact end-->

		<!--footer connect start-->
		<div class="sf-connect">
			<h2 class="sf-heading">Connect</h2>
			<div class="sf-social">
				<a href="https://www.facebook.com/ClowardH2O/?ref=hl" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/fb.png" alt="Facebook" title="Facebook"></a>
				<a href="https://www.linkedin.com/company/cloward-h2o/?trk=hb_tab_compy_id_264985" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/linkedin.png" alt="Linkedin" title="Linkedin"></a>
			</div>
		</div>
		<!--footer connect end-->

		<!--footer link start-->
		<div class="sf-nav">
			<h2 class="sf-heading">Site Map</h2>
			<?php wp_nav_menu(array(
			'menu'            => 'Footer Nav',
			'menu_class'      => 'sf-links'
			)); ?>
		</div>
		<!--footer linke end-->
		
		<!--copyright text start-->
		<div class="sf-copyright">
			&copy;<?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. Site by Jaycee VanWagoner, Haley Tharp and James Hartley.
		</div>
		<!--copyright text end-->

	</div>
</footer>
<!--Site Footer end-->