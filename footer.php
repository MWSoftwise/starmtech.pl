<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starmtech
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="bg-primary text-white pt-5 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-md-8 d-flex justify-content-center footer__menu">
						<?php
							wp_nav_menu(
							array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
						);
						?>
					</div>
					<div class="col-md-4">
						<div class="row footer__links">
							<?php
								wp_nav_menu(
								array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'secondary-menu',
							)
							);
							?>
						</div>
						<div class="row footer__socials ">
							<a href="#"><i class="bi bi-facebook"></i></a>
							<a href="#"><i class="bi bi-instagram"></i></a>
						</div>
					
					</div>
				</div>
				<div class="row">
					<div class="col-12 text-center">&copy; <?php echo date('Y') ?> - StarmTech.pl </div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
