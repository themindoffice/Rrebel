@include('page-start/_page-start.php')
<div id="page">
	@include('header-1/_header-1.php')
	@include('hero-2/_hero-2.php', {
		"image": "files/hero-1.jpg",
		"title": "Contact",
		"subtitle": "Bereikbaar en betrouwbaar"
	})
	<main>
		<section class="intro">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 section-header">
						<h1><content name="page.pagina-titel">Rrebel jobs</content></h1>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 content">
						<content name="page.pagina-tekst[textarea]">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec pellentesque quam. Maecenas eu malesuada tortor. Fusce mollis finibus commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce fermentum nisi non porta ultricies. Cras quis velit quis sapien pulvinar cursus. Maecenas convallis mattis eros eget vulputate. Nunc dictum sodales tellus, et fermentum leo. Proin rhoncus eros non dolor dignissim, sed volutpat tortor maximus. Vivamus blandit, ipsum non tempus varius, nisi metus sodales eros, ultricies blandit magna lectus vitae mi.
						</content>
					</div>
				</div>
				<div class="row ha-xs-center">
					<div class="col-xs-12 content">
						<div id="accordion-2" class="accordion">
							<view name="vacatures">
								<div class="no-vacancies">Er zijn momenteel geen vacatures aanwezig</div>
								<div class="accordion-item">
									<a class="accordion-handler" href="#">Vacature 1 <span class="arrow"></span></a>
									<div class="accordion-content">
										<div class="accordion-content-inner">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pulvinar vel massa auctor tincidunt. In ipsum nibh, euismod non purus nec, consequat feugiat tellus. Vivamus vestibulum luctus mattis. Ut lectus turpis, consectetur vel est nec, imperdiet lacinia risus. In vel metus sagittis, ultrices sem at, malesuada ex. Sed sit amet metus id felis lacinia convallis. Sed hendrerit elementum erat eget sagittis. Fusce volutpat elit at nibh scelerisque, vel consequat metus feugiat. Suspendisse convallis sodales pulvinar.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<a class="accordion-handler" href="#">Vacature 2 <span class="arrow"></span></a>
									<div class="accordion-content">
										<div class="accordion-content-inner">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pulvinar vel massa auctor tincidunt. In ipsum nibh, euismod non purus nec, consequat feugiat tellus. Vivamus vestibulum luctus mattis. Ut lectus turpis, consectetur vel est nec, imperdiet lacinia risus. In vel metus sagittis, ultrices sem at, malesuada ex. Sed sit amet metus id felis lacinia convallis. Sed hendrerit elementum erat eget sagittis. Fusce volutpat elit at nibh scelerisque, vel consequat metus feugiat. Suspendisse convallis sodales pulvinar.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<a class="accordion-handler" href="#">Vacature 3 <span class="arrow"></span></a>
									<div class="accordion-content">
										<div class="accordion-content-inner">
											<p>Cras interdum finibus quam, ut blandit metus congue a. Mauris a bibendum turpis. Curabitur eu est eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris at pretium est. Integer aliquet est ac hendrerit pulvinar. Donec vestibulum sem tortor, facilisis auctor felis cursus eu. Aliquam sodales sem non risus tristique lobortis.</p>

											<p>Phasellus fringilla erat vel elit tempor, vitae finibus risus semper. Nam ut vulputate felis. Sed a dolor eget augue mollis congue et id lorem. Cras tellus diam, lobortis sit amet hendrerit eget, pulvinar at dui. Nunc ut enim risus. Donec dolor urna, scelerisque vitae dignissim vitae, tincidunt eget purus. Morbi suscipit ipsum ac bibendum blandit. Quisque in tortor et felis tristique egestas vitae eu nunc.</p>
										</div>
									</div>
								</div>
							</view>
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