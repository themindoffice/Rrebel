<?php include("includes/_page-start.php") ?>
<div id="page">
	<?php include("includes/_header-1.php") ?>
	<?php include("includes/_hero-2.php") ?>
	<main>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 section-header alt">
						<h3>{{page.titel}}</h3>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 content">{{page.tekst[textarea]}}</div>
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