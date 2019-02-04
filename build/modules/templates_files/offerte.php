<?php include("includes/_page-start.php") ?>
<div id="page">
	<?php include("includes/_header-1.php") ?>
	<?php include("includes/_hero-2.php") ?>
	<main>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6 content">
						<h1>{{page.pagina-titel}}</h1>{{page.pagina-tekst[textarea]}}</div>
					<div class="col-xs-12 col-md-6">
						<div class="form ta-left">
							<form method="post">
								<div class="form-row">
									<div class="form-field label-inside required"> <input type="text" placeholder="Naam"></div>
								</div>
								<div class="form-row error">
									<div class="form-field label-inside required"> <input type="text" placeholder="E-mail"></div>
								</div>
								<div class="form-row error">
									<div class="form-field label-inside"> <input type="text" placeholder="Bedrijfsnaam"></div>
								</div>
								<div class="form-row">
									<div class="form-field label-inside"><textarea placeholder="Bericht"></textarea></div>
								</div>
								<div class="form-row submit">
									<div class="form-field">
										<p class="button"><a href="#"><span>{{template.offerte-form-button}}</span></a></p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php include("includes/_footer-1.php") ?>
</div>
<?php include("includes/_mobile-menu.php") ?>
<?php include("includes/_page-end.php") ?>