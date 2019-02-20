<div>
	<div>
		<?php include('logo.php'); ?>
	</div>
	<div>
		<div class="display-wideDesktop-desktop-slimScreen">
			<nav class="primary">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'primary' ) ); ?>
			</nav>
		</div>
		<nav class="secondary display-tablet-mobile">
			<div class="o-mobileMenuIcon u-alignRight">
				<button id="mmenu-hamburger" class="hamburger hamburger--spin" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button> 
			</div><!--mobileMenuIcon-->
		</nav>
	</div>
	<div class="clear"></div>
</div>