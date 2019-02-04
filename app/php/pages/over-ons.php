@include('page-start/_page-start.php')
<div id="page">
	@include('header-1/_header-1.php')
	@include('hero-2/_hero-2.php', {
		"image": "files/banner-4.jpg",
		"title": "Over ons",
		"subtitle": "Onze missie en werkzaamheden"
	})
	<main>
		<section class="intro">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 section-header">
						<h3><content name="page.intro-titel">Onze werkzaamheden</content></h3>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 content">
						<content name="page.intro-tekst[textarea]">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec pellentesque quam. Maecenas eu malesuada tortor. Fusce mollis finibus commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce fermentum nisi non porta ultricies. Cras quis velit quis sapien pulvinar cursus. Maecenas convallis mattis eros eget vulputate. Nunc dictum sodales tellus, et fermentum leo. Proin rhoncus eros non dolor dignissim, sed volutpat tortor maximus. Vivamus blandit, ipsum non tempus varius, nisi metus sodales eros, ultricies blandit magna lectus vitae mi.
						</content>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 section-header alt">
						<h3><content name="page.titel">Onze missie</content></h3>
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
		@include('banner-1/_banner-1.php', {
			"image": "files/banner-2.jpg",
			"title": "Banner titel",
			"subtitle": "Banner subtitel",
			"text": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec justo at augue tempor imperdiet. Praesent vulputate ligula sit amet vehicula iaculis. Fusce vitae consequat mi"
		})
		@include('contactformulier/_contactformulier.php')
	</main>
	@include('footer-1/_footer-1.php')
</div>
@include('mobile-menu/_mobile-menu.php')
@include('page-end/_page-end.php')