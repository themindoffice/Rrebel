<?php

function views_product_highlights() {
	$table_name = db_pdo_select_all("SELECT * FROM product_highlights ORDER BY naam ASC");
	$url 		= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$html 		= '';

	foreach($table_name as $item) {
		$html .= '
		<div class="container product">
			<div class="row va-xs-center ha-xs-right">
				<div class="col-xs-12 col-md-8 col-lg-6 product-info ta-xs-center ta-md-right">
					<h1>'.output($item["naam"]).'</h1>
					<p>'.output($item["omschrijving"]).'</p>
					<p class="button">
						<a href="'.pages_url('page_name',$item["id"]).'">Bekijk product</a>
					</p>
				</div>
				<div class="col-xs-12 col-md-4 product-photo order-xs-first order-xs-first order-md-last">
					<img src="'.fc_getSettings('cdn').'/slir/w800'.output($item["afbeelding"]).'">
				</div>
			</div>
		</div>';
	}

	return $html;
}

function views_producten() {
	$table_name = db_pdo_select_all("SELECT * FROM producten ORDER BY naam ASC");
	$url 		= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$html 		= '';

	foreach($table_name as $item) {
		$html .= '
		<div class="col-xs-12 col-md-6 col-lg-4 card">
			<a href="'.pages_url('page_name',$item["id"]).'" class="card-inner">
				<div class="card-image">
					<span><img src="'.fc_getSettings('cdn').'/slir/w800'.output($item["afbeelding"]).'"></span>
				</div>
				<div class="card-header">
					<span>'.output($item["naam"]).'</span>
				</div>
			</a>
		</div>';
	}

	return $html;
}

function views_downloads() {
	$table_name = db_pdo_select_all("SELECT * FROM downloads ORDER BY naam ASC");
	$url 		= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$html 		= '';

	foreach($table_name as $item) {
		$html .= '
		<div class="col-xs-12 col-md-6 col-lg-4 card">
			<div class="card-inner">
				<div class="card-image">
					<span><img src="'.fc_getSettings('cdn').'/slir/w800'.output($item["afbeelding"]).'"></span>
				</div>
				<div class="card-header">
					<span>'.output($item["naam"]).'</span>
				</div>
				<div class="card-button">
					<div class="button">
						<a href="'.output($item["bestand"]).'">Download <span class="icon-cloud-download"></span></a>
					</div>
				</div>
			</div>
		</div>';
	}

	return $html;
}

function views_vacatures() {
	$table_name = db_pdo_select_all("SELECT * FROM vacatures ORDER BY naam ASC");
	$url 		= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$html 		= '';

	foreach($table_name as $item) {
		$html .= '
		<div class="accordion-item">
			<a class="accordion-handler" href="#">'.output($item["naam"]).' <span class="arrow"></span></a>
			<div class="accordion-content">
				<div class="accordion-content-inner">
					'.output($item["omschrijving"]).'
				</div>
			</div>
		</div>';
	}

	return $html;
}

?>
