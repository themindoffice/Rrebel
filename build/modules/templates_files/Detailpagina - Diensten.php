<?php include("includes/_page-start.php") ?>
<?php global $arginfo; ?>
<div id="page">
	<?php include("includes/_header-1.php") ?>
	<?php include("includes/_hero-3.php") ?>
	<main>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6 col-xl-7 content">
						<?php echo output($arginfo["omschrijving"]); ?>
					</div>
					<div class="col-xs-12 col-md-6 col-xl-5 ta-xs-right"> <img src="<?php echo output($arginfo['foto']); ?>"></div>
				</div>
			</div>
		</section>
		<?php include("includes/_services.php") ?>
		<?php include("includes/_contactformulier.php") ?>
	</main>
	<?php include("includes/_footer-1.php") ?>
</div>
<?php include("includes/_mobile-menu.php") ?>
<?php include("includes/_page-end.php") ?>