<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<?php include('partials/_head.php'); ?>
	<?php include('partials/_loader.php'); ?>

	<body <?php body_class(); ?>>

		<?php include('partials/header.php'); ?>
		<?php include('partials/mobile-menu.php'); ?>

		<main class="_page _page-index">
			<section id="hero-carousel">
				<div class="slide"></div>
				<div class="slide"></div>
				<div class="slide"></div>
			</section>
			<br>
			<br>
		</main>
			
		<?php include('partials/footer.php'); ?>
		<?php include('partials/_scripts.php'); ?>
 	</body>
</html>

<?php wp_footer(); ?> 


<script>
	$('#hero-carousel').slick({
		arrows: false,
		//prevArrow: $('#main-banner .prev'),
		//nextArrow: $('#main-banner .next'),
	});
</script>