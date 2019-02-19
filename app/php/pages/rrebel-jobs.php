@include('page-start/_page-start.php')
<div id="page">
	@include('header-1/_header-1.php')
	@include('hero-2/_hero-2.php', {
		"image": "files/banner-4.jpg",
		"title": "Contact",
		"subtitle": "Bereikbaar en betrouwbaar"
	})
	<main>
		<section class="intro">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 section-header alt">
						<h1><content name="page.intro-titel">Rrebel jobs</content></h1>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 content">
						<content name="page.intro-tekst[textarea]">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec pellentesque quam. Maecenas eu malesuada tortor. Fusce mollis finibus commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce fermentum nisi non porta ultricies. Cras quis velit quis sapien pulvinar cursus. Maecenas convallis mattis eros eget vulputate. Nunc dictum sodales tellus, et fermentum leo. Proin rhoncus eros non dolor dignissim, sed volutpat tortor maximus. Vivamus blandit, ipsum non tempus varius, nisi metus sodales eros, ultricies blandit magna lectus vitae mi.
							<br><br><br>
							<h3>Vacature naam</h3>
							Fusce fermentum nisi non porta ultricies. Cras quis velit quis sapien pulvinar cursus. Maecenas convallis mattis eros eget vulputate. Nunc dictum sodales tellus, et fermentum leo. Proin rhoncus eros non dolor dignissim, sed volutpat tortor maximus. Vivamus blandit, ipsum non tempus varius, nisi metus sodales eros, ultricies blandit magna lectus vitae mi.
							<br><br>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec pellentesque quam. Maecenas eu malesuada tortor. Fusce mollis finibus commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce fermentum nisi non porta ultricies. Cras quis velit quis sapien pulvinar cursus. Maecenas convallis mattis eros eget vulputate. Nunc dictum sodales tellus, et fermentum leo. Proin rhoncus eros non dolor dignissim, sed volutpat tortor maximus. Vivamus blandit, ipsum non tempus varius, nisi metus sodales eros, ultricies blandit magna lectus vitae mi.
						</content>
					</div>
				</div>
			</div>
		</section>
		@include('contactformulier/_contactformulier.php')
	</main>
	@include('footer-1/_footer-1.php')
</div>
@include('mobile-menu/_mobile-menu.php')
@include('page-end/_page-end.php')