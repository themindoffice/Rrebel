<!DOCTYPE html>
<html class="agepage">
<head>
	<head id="seo">
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="manifest" href="site.webmanifest">
		<link rel="stylesheet" href="/assets/css/style.min.css">
	</head>
	<body class="agepage">
		<div class="holder">
			<div class="holder-inner">
				<div class="age-logo ta-xs-center"><img src="assets/img/logo.png"></div>
				<div class="errormessage"><?php echo $_SESSION["age_error"]?></div>
				<form method="post" action="/controllers/checkAge" class="form">
					<div class="form-row-split">
						<div class="form-row">
							<select name="day">
								<?php
								$x = 1;
								while($x <= 31) {?>
								<option><?php echo $x?></option>
								<?php $x++; }?>
							</select>
							<span class="icon"></span>
						</div>
						<div class="form-row">
							<select name="month">
								<?php
								$x = 1;
								while($x <= 12) {?>
									<option><?php echo $x?></option>
									<?php $x++; }?>
							</select>
							<span class="icon"></span>
						</div>
						<div class="form-row year">
							<select name="year">
								<?php
								$x = date('Y') - 100;
								while($x <= date('Y')) {?>
									<option <?php if (date('Y') == $x){?>selected <?php }?>><?php echo $x?></option>
							   <?php $x++; }?>
							</select>
							<span class="icon"></span>
						</div>
					</div>
					<div class="form-row button ta-xs-right">
						<button type="submit">Check</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>