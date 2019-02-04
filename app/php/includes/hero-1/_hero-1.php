<section class="hero-1" data-parallax="parallax">
	<div class="parallax">
		<img src="content{page.hero-afbeelding[image], @image}">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8">
				<div class="box">
					<div class="title" data-transition="slide-left"><content name="page.hero-titel">@title</content></div>
					<div class="subtitle" data-transition="slide-left" data-delay="200"><content name="page.hero-subtitel">@subtitle</content></div>
					<div class="buttons" data-transition="slide-left" data-delay="400">
						<div class="button alt"><a href="/<?php echo pages_url('pages',144)?>">Over ons</a></div>
						<div class="button"><a href="/<?php echo pages_url('pages',147)?>">Offerte aanvragen</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>