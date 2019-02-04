<?php include("includes/_page-start.php") ?>
<div id="page">
	<?php include("includes/_header-1.php") ?>
	<?php include("includes/_hero-1.php") ?>
	<main>
		<section class="intro">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 section-header">
						<h1>{{page.intro-titel}}</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6 content">{{page.intro-tekst-links[textarea]}}</div>
					<div class="col-xs-12 col-md-6 content">{{page.intro-tekst-rechts[textarea]}}</div>
				</div>
			</div>
		</section>
		<section class="fluid-split">
			<div class="container">
				<div class="row va-xs-center">
					<div class="col-xs-12 col-md-6 content alt" data-transition="slide-left">
						<h1>{{page.pannendaken-titel}}</h1>{{page.pannendaken-tekst[textarea]}}</div>
					<div class="col-xs-12 col-md-6" data-transition="slide-right" data-delay="200"> <img src="files/Justbe group.png"></div>
				</div>
			</div>
		</section>
		<section class="fluid-split">
			<div class="container">
				<div class="row va-xs-center">
					<div class="col-xs-12 col-md-4" data-transition="slide-left"> <img src="files/Glaasje Fini.png"></div>
					<div class="col-xs-12 col-md-8 content" data-transition="slide-right" data-delay="200">
						<h1>{{page.renovatie-titel}}</h1>{{page.renovatie-tekst[textarea]}}</div>
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