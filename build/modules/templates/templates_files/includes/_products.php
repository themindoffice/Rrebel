<section class="products">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 section-header">
				<h1>{{template.producten-titel}}</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 content">{{template.producten-tekst[textarea]}}</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="product-filters ta-xs-center"> <a href="#" class="active" data-cat-id="0"><span>Alle</span></a> <a href="#" data-cat-id="1"><span>Biologische</span></a> <a href="#" data-cat-id="2"><span>Non- Alcoholic</span></a> <a href="#" data-cat-id="3"><span>Low Alcoholic</span> <i>(Minder dan 14,9% vol)</i></a>					<a href="#" data-cat-id="4"><span>Strong Alcholic</span> <i>(Meer dan 15% vol)</i></a> <a href="#" data-cat-id="5"><span>Ijs</span></a></div>
			</div>
		</div>
		<div class="row products-row">@views_producten@</div>
	</div>
</section>