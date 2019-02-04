@include('page-start/_page-start.php')
<div id="page">
	@include('header-1/_header-1.php')
	@include('hero-1/_hero-1.php', {
		"image": "files/banner-1.jpg",
		"title": "Renovatie en onderhoud",
		"subtitle": "Kwalitatief en betrouwbaar"
	})
	<main>
		<section class="intro">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 section-header">
						<h1><content name="page.intro-titel">Welkom bij Kriek</content></h1>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6 content">
						<content name="page.intro-tekst-links[textarea]">
							<b>Etiam porttitor, risus vel sodales sollicitudin, velit felis lacinia lorem, eget tincidunt elit felis vitae nunc. Nullam venenatis, leo id eleifend consectetur, eros lorem placerat quam, nec condimentum odio tellus vel eros. Quisque ac justo vulputate, ullamcorper lectus ac, finibus justo.</b>
						</content>
					</div>
					<div class="col-xs-12 col-md-6 content">
						<content name="page.intro-tekst-rechts[textarea]">
							Fusce venenatis ligula eu dolor pulvinar varius. Nunc sagittis dictum purus, et tempor nibh sodales id. Suspendisse malesuada, metus ac semper placerat, sapien ligula volutpat felis, quis consectetur elit est dignissim magna. Nunc ac feugiat mauris. In lobortis hendrerit massa, placerat pellentesque elit facilisis sit amet.
						</content>
					</div>
				</div>
			</div>
		</section>
		<section class="fluid-split">
			<div class="container">
				<div class="row va-xs-center">
					<div class="col-xs-12 col-md-6 content alt" data-transition="slide-left">
						<h1><content name="page.pannendaken-titel">Pannendaken</content></h1>
						<content name="page.pannendaken-tekst[textarea]">
							<p>Bent u op zoek naar een betrouwbare partner voor renovatie of onderhoud van pannendaken? Dan bent u bij Kriek Renovatie en Onderhoud aan het juiste adres! Wij zijn gevestigd in Spijkenisse en werkzaam in de regio rijnmond. Wij zijn een bedrijf dat garant staat voor een perfect resultaat. Onze vakkennis en ervaring in hellende daken is ruimschoots aanwezig op diverse disciplines, gekoppeld aan een altijd passende prijs / kwaliteit verhouding. Neemt u gerust een kijkje op onze website wat wij voor u kunnen betekenen met onze diensten. Heeft u vragen over onze diensten? Neemt u dan geheel vrijblijvend contact met ons op, wij zijn u graag van dienst.</p>
						</content>
					</div>
					<div class="col-xs-12 col-md-6" data-transition="slide-right" data-delay="200">
						<img src="files/Justbe group.png">
					</div>
				</div>
			</div>
		</section>
		<section class="fluid-split">
			<div class="container">
				<div class="row va-xs-center">
					<div class="col-xs-12 col-md-4" data-transition="slide-left">
						<img src="files/Glaasje Fini.png">
					</div>
					<div class="col-xs-12 col-md-8 content" data-transition="slide-right" data-delay="200">
						<h1><content name="page.renovatie-titel">Renovatie en onderhoud</content></h1>
						<content name="page.renovatie-tekst[textarea]">
							<p>Uw dak bepaald voor grote delen het aanzicht van uw woning. U weet uit eigen ervaring dat het dak van uw woning essentieel is voor u als bewoner, het biedt u bescherming tegen weersinvloeden. Zonder dat u er bij stilstaat, gaat u ervan uit dat het dak van uw woning u en uw interieur / goederen veiligheid en bescherming biedt tegen regen, hagel, sneeuw, wind, hoge en lage temperaturen. Het dak van uw woning biedt u ook comfort en gemoedsrust. Bij dakrenovaties/onderhoud zijn verschillende opties mogelijk, samen met u bespreken we graag deze opties. Neemt u geheel vrijblijvend contact met ons op voor meer informatie en een gratis dakinspectie.</p>
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