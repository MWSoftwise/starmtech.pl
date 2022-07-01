<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package starmtech
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
			<section class="row fp__container">
				<div class="col-md-7 fp__image">
					<img src="<?php echo get_template_directory_uri();?>/img/lutownica.jpeg" alt="lutownica">
				</div>
				<div class="col-md-5 fp__logo">
					<img src="<?php echo get_template_directory_uri();?>/img/logobig.jpg" alt="logo">
					<h1 class="first__heading">Narzędzia dla Ciebie i Twojej firmy</h1>
				</div>
			</section>

			<section class="popular__section">
				<h2 class="section__title text-center pt-5">Popularne produkty</h2>
				<div class="popular__products pt-5 pb-5">
					<?php echo do_shortcode('[products popularity columns=3 limit=3]'); ?>
				</div>
			</section>
			<section class="delivery row">
				<div class="col-md-4">
					<h3 class="text__delivery d-flex align-items-center">Złóż zamówienie o minimalnej wartości 500zł a przesyłkę otrzymasz za darmo</h3>
				</div>
				<div class="col-md-8">
					<img src="<?php echo get_template_directory_uri();?>/img/delivery.jpeg" alt="Obrazek z ciężarówką">
				</div>
			</section>
			<section class="payment__options">
				<h2 class="section__title text-center pt-5">Zapłać bezpiecznie</h2>
				<img class="w-100" src="<?php echo get_template_directory_uri();?>/img/flaga_wszystkie.png" alt="metody płatności">
			</section>
		</div>

	</main><!-- #main -->

<?php
get_footer();
