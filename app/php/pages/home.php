@include('page-start/_page-start.php')
<div id="page">
	@include('header-1/_header-1.php')
	@include('hero-1/_hero-1.php', {
		"image": "files/banner-5.jpg",
		"title": "Renovatie en onderhoud",
		"subtitle": "Kwalitatief en betrouwbaar"
	})
	<main>
		<section class="intro">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 section-header">
						<h1><content name="page.intro-titel">Welkom bij Rrebel</content></h1>
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
					<div class="col-xs-12 col-md-6 content alt">
						<h1><content name="page.pannendaken-titel">Lorem ipsum</content></h1>
						<content name="page.pannendaken-tekst[textarea]">
							<p>Etiam porttitor, risus vel sodales sollicitudin, velit felis lacinia lorem, eget tincidunt elit felis vitae nunc. Nullam venenatis, leo id eleifend consectetur, eros lorem placerat quam, nec condimentum odio tellus vel eros. Quisque ac justo vulputate, ullamcorper lectus ac, finibus justo. Fusce venenatis ligula eu dolor pulvinar varius. Nunc sagittis dictum purus, et tempor nibh sodales id. Suspendisse malesuada, metus ac semper placerat, sapien ligula volutpat felis, quis consectetur elit est dignissim magna. Nunc ac feugiat mauris. In lobortis hendrerit massa, placerat pellentesque elit facilisis sit amet.</p>
						</content>
					</div>
					<div class="col-xs-12 col-md-6">
						<img src="files/Justbe group.png">
					</div>
				</div>
			</div>
		</section>
		<section class="fluid-split">
			<div class="container">
				<div class="row va-xs-center">
					<div class="col-xs-12 col-md-4">
						<img src="files/Glaasje Fini.png">
					</div>
					<div class="col-xs-12 col-md-8 content">
						<h1><content name="page.renovatie-titel">Dolor sit amet</content></h1>
						<content name="page.renovatie-tekst[textarea]">
							<p>Etiam porttitor, risus vel sodales sollicitudin, velit felis lacinia lorem, eget tincidunt elit felis vitae nunc. Nullam venenatis, leo id eleifend consectetur, eros lorem placerat quam, nec condimentum odio tellus vel eros. Quisque ac justo vulputate, ullamcorper lectus ac, finibus justo. Fusce venenatis ligula eu dolor pulvinar varius. Nunc sagittis dictum purus, et tempor nibh sodales id. Suspendisse malesuada, metus ac semper placerat, sapien ligula volutpat felis, quis consectetur elit est dignissim magna. Nunc ac feugiat mauris. In lobortis hendrerit massa, placerat pellentesque elit facilisis sit amet.</p>
						</content>
					</div>
				</div>
			</div>
		</section>
		@include('products/_products.php')
		@include('contactformulier/_contactformulier.php')
	</main>
	@include('footer-1/_footer-1.php')
</div>
@include('mobile-menu/_mobile-menu.php')
@include('page-end/_page-end.php')