@include('page-start/_page-start.php')
<div id="page">
	@include('header-1/_header-1.php')
	@include('hero-2/_hero-2.php', {
		"image": "files/banner-4.jpg",
		"title": "Offerte",
		"subtitle": "Let's talk business"
	})
	<main>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6 content">
						<h1><content name="page.pagina-titel">Vraag een offerte aan</content></h1>
						<content name="page.pagina-tekst[textarea]">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec pellentesque quam. Maecenas eu malesuada tortor. Fusce mollis finibus commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce fermentum nisi non porta ultricies. Cras quis velit quis sapien pulvinar cursus. Maecenas convallis mattis eros eget vulputate. Nunc dictum sodales tellus, et fermentum leo. Proin rhoncus eros non dolor dignissim, sed volutpat tortor maximus. Vivamus blandit, ipsum non tempus varius, nisi metus sodales eros, ultricies blandit magna lectus vitae mi.</p>
						</content>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="form ta-left">
							<form method="post">
								<div class="form-row">
									<div class="form-field label-inside required">
										<input type="text" placeholder="Naam">
									</div>
								</div>
								<div class="form-row error">
									<div class="form-field label-inside required">
										<input type="text" placeholder="E-mail">
									</div>
								</div>
								<div class="form-row error">
									<div class="form-field label-inside">
										<input type="text" placeholder="Bedrijfsnaam">
									</div>
								</div>
								<div class="form-row">
									<div class="form-field label-inside">
										<textarea placeholder="Bericht"></textarea>
									</div>
								</div>
								<div class="form-row submit">
									<div class="form-field">
										<p class="button">
											<a href="#"><span><content name="template.offerte-form-button">Aanvragen</content></span></a>
										</p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	@include('footer-1/_footer-1.php')
</div>
@include('mobile-menu/_mobile-menu.php')
@include('page-end/_page-end.php')