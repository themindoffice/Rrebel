@include('page-start/_page-start.php')
<div id="page">
	@include('header-1/_header-1.php')
	@include('hero-2/_hero-2.php', {
		"image": "files/banner-4.jpg",
		"title": "Onze diensten",
		"subtitle": "Voor welke diensten kunt u bij ons terrecht?"
	})
	<main>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 section-header alt">
						<h3><content name="page.titel">Pagina titel</content></h3>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 content">
						<content name="page.tekst[textarea]">
							Morbi commodo nec risus eu mollis. Mauris blandit tincidunt aliquet. Cras metus ligula, eleifend sed nulla in, pretium rutrum tellus. Phasellus eu dolor non elit interdum ullamcorper vitae ac magna. Curabitur id commodo nisi. Fusce sagittis dignissim sapien non pretium. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin mollis quis erat eu consequat. Duis finibus quam urna, eu cursus urna consequat non. Nam maximus nunc vitae justo condimentum, sit amet tempor magna tristique. Pellentesque vitae ornare risus. Duis tristique dui lectus, eu efficitur orci interdum in. Pellentesque maximus, velit ac suscipit facilisis, massa orci bibendum lorem, quis bibendum ex orci a nunc.
						</content>
					</div>
				</div>
			</div>
		</section>
		@include('services/_services.php')
		@include('contactformulier/_contactformulier.php')
	</main>
	@include('footer-1/_footer-1.php')
</div>
@include('mobile-menu/_mobile-menu.php')
@include('page-end/_page-end.php')