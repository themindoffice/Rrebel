<?php

function views_diensten()
{
	$table_name = db_pdo_select_all("SELECT * FROM diensten ORDER BY volgorde ASC");
	$url 		= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$html 		= '';
	$delay 		= 0;

	foreach($table_name as $item) {
		$html .= '
		<div class="col-xs-12 col-md-6 col-lg-4 card" data-transition="zoom-in" data-delay="'.(string)$delay.'">
			<a href="/'.pages_url('diensten', output($item["id"])).'" class="card-inner">
				<div class="card-header">
					<span>'.output($item["naam"]).'</span>
				</div>
				<div class="card-image">
					<img src="'.output($item["foto"]).'">
				</div>
			</a>
		</div>';

		if ($delay < 400) {
			$delay += 200;
		}
		else {
			$delay = 0;
		}
	}

	return $html;
}

function views_diensten_footer()
{
	$table_name = db_pdo_select_all("SELECT * FROM diensten ORDER BY volgorde ASC");
	$url 		= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$html 		= '<ul>';

	foreach($table_name as $item) {
		$html .= '<li><a href="/'.pages_url('diensten', output($item["id"])).'">'.output($item["naam"]).'</a></li>';
	}

	$html .= '</ul>';

	return $html;
}

?>
