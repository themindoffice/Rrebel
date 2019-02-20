<?php include("includes/_page-start.php") ?>
<div id="page">
	<?php include("includes/_header-1.php") ?>
	<?php include("includes/_hero-1.php") ?>
	<main>
		<section class="intro">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 section-header">
						<h1>{{page.pagina-titel}}</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6 content">{{page.pagina-tekst-links[textarea]}}</div>
					<div class="col-xs-12 col-md-6 content">{{page.pagina-tekst-rechts[textarea]}}</div>
				</div>
			</div>
		</section>
		<section class="fluid-split is-grey">
			<div class="container">
				<div class="row va-xs-center">
					<div class="col-xs-12 col-md-6 content alt">
						<h1>{{page.pagina-titel2}}</h1>{{page.pagina-tekst2[textarea]}}</div>
					<div class="col-xs-12 col-md-6"> <img src="{{page.pagina-afbeelding[image]}}"></div>
				</div>
			</div>
		</section>
	</main>
	<?php include("includes/_footer-1.php") ?>
</div>
<?php include("includes/_mobile-menu.php") ?>
<?php include("includes/_page-end.php") ?>