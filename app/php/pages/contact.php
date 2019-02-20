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
					<div class="col-xs-12 section-header">
						<h1><content name="page.pagina-titel">Kom in contact met je Rrebel</content></h1>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 content">
						<content name="page.pagina-tekst[textarea]">
							<table>
								<tr>
									<td><b>Algemeen</b></td>
									<td><a href="mailto:info@rrebel.eu">info@rrebel.eu</a></td>
								</tr>
								<tr>
									<td><b>Sales <i>Rrebel</i></b></td>
									<td><a href="mailto:sales@rrebel.eu">sales@rrebel.eu</a></td>
								</tr>
								<tr>
									<td><b>Marketing <i>Rrebel</i></b></td>
									<td><a href="mailto:marketing@rrebel.eu">marketing@rrebel.eu</a></td>
								</tr>
								<tr>
									<td><b>Administratie <i>Rrebel</i></b></td>
									<td><a href="mailto:admin@rrebel.eu">admin@rrebel.eu</a></td>
								</tr>
								<tr>
									<td><b>Directie <i>Rrebel</i></b></td>
									<td><a href="mailto:directie@rrebel.eu">directie@rrebel.eu</a></td>
								</tr>
							</table>
							<p>of <a href="mailto:info@rrebelproductsgroup.com">info@rrebelproductsgroup.com</a></p>
						</content>
					</div>
				</div>
			</div>
		</section>
	</main>
	@include('footer-1/_footer-1.php')
</div>
@include('mobile-menu/_mobile-menu.php')
@include('page-end/_page-end.php')