@include('page-start/_page-start.php')
<?php global $arginfo; ?>
<div id="page">
	@include('header-1/_header-1.php')
	@include('hero-2/_hero-2.php', {
		"image": "files/hero-1.jpg"
	})
	<main>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 section-header">
						<h1><?php echo output($arginfo["naam"]); ?></h1>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6 col-xl-7 content">
						<?php echo output($arginfo["omschrijving"]); ?>
					</div>
					<div class="col-xs-12 col-md-6 col-xl-5 ta-xs-right">
						<img src="<?php echo output($arginfo['foto']); ?>">
					</div>
				</div>
			</div>
		</section>
		@include('products/_products.php')
	</main>
	@include('footer-1/_footer-1.php')
</div>
@include('mobile-menu/_mobile-menu.php')
@include('page-end/_page-end.php')