<?php require_once 'shared/config-global.php' ?>

<!doctype html>
<html lang="en">
	<head>
		<?php require_once 'shared/head.php'; ?>
	</head>

	<body class="<?php echo $body_class ?>">
		<?php 
			// warning modal
			require_once 'shared/warning-modal.php';

			// cookie alert
			require_once 'shared/cookie-alert.php';

			// navbar
			require_once 'shared/navbar.php';
		?>

		<!-- carrousel section -->
		<div class="carousel">
			<div class="owl-carousel">
				<?php
					foreach($carousel_imgs_arr as $index => $imgs_arr){
						echo '<div class="item"><img src="' . $imgs_arr . '" class="card-img rounded-0" alt="' . $carousel_alts_arr[$index] . '"></div>';
					}
				?>
			</div>
		</div>

		<div class="headline py-5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="text-center">Room Service.</h1>
						<p class="text-center mb-0">estibulum felis libero, porta in lectus ac, ultrices cursus massa. Nullam gravida neque ac sodales molestie. Etiam pharetra ipsum ac ultrices feugiat. Ut pulvinar laoreet magna, vel pulvinar neque bibendum bibendum. Aliquam vel efficitur quam, nec convallis massa. Etiam sit amet nulla tristique ante aliquet rutrum quis sed orci. Vestibulum lectus ipsum, tincidunt a aliquet non. Fendrerit felis, a mi lorem. Sed est lectus, tempor vitae vestibulum non, dapibus quis est.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="featured-escorts py-5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="text-center h1">Nuevas Escorts</h2>
						<p class="text-center mb-5">Sed sit amet turpis eu lorem cursus imperdiet id non est. Donec pharetra aliquet neque, molestie semper nisi lacinia ut. Duis tincidunt, tellus id tempus eleifend, est quam sollicitudin tellus, non volutpat metus tellus in diam. Nam mi mauris, lobortis vitae tellus non, lobortis aliquam ligula.  Proin elementum turpis ut lectus vehicula, eget eleifend lorem sodales. Vivamus non sollicitudin leo, sit amet rhoncus urna. Sed consectetur vehicula ultricies.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<div class="card-columns">
							<a href="#">
								<div class="card">
									<img class="card-img" src="assets/images/featured-escorts/1.jpg" alt="Card image">

									<div class="card-img-overlay">
										<h5 class="card-title text-white">Card title</h5>
										<p class="card-text text-white">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
								</div>
							</a>

							<a href="#">
								<div class="card">
									<img class="card-img" src="assets/images/featured-escorts/2.jpg" alt="Card image">

									<div class="card-img-overlay">
										<h5 class="card-title text-white">Card title</h5>
										<p class="card-text text-white">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
								</div>
							</a>

							<a href="#">
								<div class="card">
									<img class="card-img" src="assets/images/featured-escorts/3.jpg" alt="Card image">

									<div class="card-img-overlay">
										<h5 class="card-title text-white">Card title</h5>
										<p class="card-text text-white">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
								</div>
							</a>

							<a href="#">
								<div class="card">
									<img class="card-img" src="assets/images/featured-escorts/4.jpg" alt="Card image">

									<div class="card-img-overlay">
										<h5 class="card-title text-white">Card title</h5>
										<p class="card-text text-white">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
								</div>
							</a>

							<a href="#">
								<div class="card">
									<img class="card-img" src="assets/images/featured-escorts/5.jpg" alt="Card image">

									<div class="card-img-overlay">
										<h5 class="card-title text-white">Card title</h5>
										<p class="card-text text-white">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
								</div>
							</a>

							<a href="#">
								<div class="card">
									<img class="card-img" src="assets/images/featured-escorts/6.jpg" alt="Card image">

									<div class="card-img-overlay">
										<h5 class="card-title text-white">Card title</h5>
										<p class="card-text text-white">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
								</div>
							</a>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="all-scorts">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<p class="text-center mb-0">
							<button class="btn btn-primary btn-lg shadow text-capitalize">Ver todas las chicas</button>
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="benefits py-5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h3 class="text-center h1">Garantias Para Nuestros Clientes</h3>
						<p class="text-center mb-5">Curabitur scelerisque eros vel consectetur dictum. In hac habitasse platea dictumst. Praesent et magna lectus. Nulla et metus iaculis, iaculis diam in, mollis mi. Nam at convallis lectus, at molestie nibh. Nulla id pulvinar massa. Aenean id tortor sit amet arcu auctor facilisis quis maximus ipsum. Proin a vestibulum mi. Phasellus elit orci, sollicitudin eget aliquet et, venenatis molestie felis. In eu dapibus nisl. Nulla varius nibh eget ligula molestie tincidunt.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-6">
						<ul>
							<li>Discreción Total</li>
							<li>Seguridad Absoluta</li>
							<li>Perfiles 100% Reales</li>
							<li>Sólo escorts mayores de edad</li>
							<li>Fotos Reales</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="services py-5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h4 class="text-center h1">Servicios Escorts Que Ofrecemos</h4>
						<p class="text-center">Sed erat neque, egestas vitae blandit porttitor, malesuada a dolor. Sed vulputate dui ipsum, ut convallis libero dapibus aliquet. Phasellus semper odio lacinia hendrerit viverra. Maecenas faucibus, lorem quis malesuada fermentum, nulla diam consectetur nisi. quis pretium eros dui eu sapien. Proin vulputate dictum tellus in fringilla. Praesent eu velit quam. In hac habitasse platea dictumst. Suspendisse vel pretium  ac molestie lectus eros.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-4">
						<ul>
							<li>Trios</li>
							<li>Teen Sex</li>
							<li>Amateur Sex</li>
							<li>Fantasis</li>
						</ul>
					</div>

					<div class="col-4">
						<ul>
							<li>Trios</li>
							<li>Teen Sex</li>
							<li>Amateur Sex</li>
							<li>Fantasis</li>
						</ul>
					</div>

					<div class="col-4">
						<ul>
							<li>Trios</li>
							<li>Teen Sex</li>
							<li>Amateur Sex</li>
							<li>Fantasis</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="rates py-5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h4 class="text-center h1">Tarifas</h4>
						<p class="text-center mb-5">Donec semper lectus faucibus, commodo orci eu, feugiat quam. Maecenas dignissim feugiat erat, commodo condimentum mauris bibendum quis. Ut et turpis mattis, mattis elit sed, facilisis risus.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<ul>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
					<div class="col-6">
						<ul>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="faqs py-5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h4 class="text-center h1">Preguntas Frecuentes</h4>
						<p class="text-center mb-5">Donec semper lectus faucibus, commodo orci eu, feugiat quam. Maecenas dignissim feugiat erat, commodo condimentum mauris bibendum quis. Ut et turpis mattis, mattis elit sed, facilisis risus.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<ul>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
					<div class="col-6">
						<ul>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="offert">
			<div class="container">
				<div class="row">
					<div class="col-12">promo de la semana</div>
				</div>
			</div>
		</div>

		<div class="schedule py-5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h5 class="text-center">
							Agenda Una Escort En tu Hotel Favorito
						</h5>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<form>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputName">Nombre</label>
									<input type="email" class="form-control" id="inputName" placeholder="Nombre o Nickname">
								</div>

								<div class="form-group col-md-6">
									<label for="inputWhatsapp">Whatsapp</label>
									<input type="password" class="form-control" id="inputWhatsapp" placeholder="Whatsapp">
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputEscort">Selecciona a tu(s) chica(s)</label>
									<input type="text" class="form-control" id="inputEscort" placeholder="1234 Main St">
								</div>

								<div class="form-group col-md-6">
									<label for="inputMotel">Selecciona el Motel</label>
									<select id="inputMotel" class="form-control">
										<option selected>Selecciona un Motel</option>
										<option value="">Aqua Palau</option>
										<option value="">Begoña</option>
										<option value="">Casa Blanca Suites (Bernardo Reyes)</option>
										<option value="">Casa Blanca Suites (Guadalupe)</option>
										<option value="">Cascada</option>
										<option value="">Dali (Churubusco)</option>
										<option value="">Dali (Carretera Nacional)</option>
										<option value="">Hacienda (Cumbres)</option>
										<option value="">Hacienda (Monterrey Centro)</option>
										<option value="">Hotel Atenas</option>
										<option value="">Hotel Paris</option>
										<option value="">Kyoto Suites Motel</option>
										<option value="">Marbella (Guadalupe)</option>
										<option value="">Marbella (Santa Catarina)</option>
										<option value="">NIU Bed & Senz</option>
										<option value="">Seara</option>
										<option value="">Tio Pepe</option>
										<option value="">Otro</option>
									</select>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputDate">Selecciona la Fecha</label>
									<input type="text" class="form-control" id="inputDate">
								</div>
								<div class="form-group col-md-4">
									<label for="inputHour">Selecciona la Hora</label>
									<select id="inputHour" class="form-control">
										<option selected>Choose...</option>
										<option>...</option>
									</select>
								</div>
								<div class="form-group col-md-2">
								<label for="inputRate">Tarifa</label>
								<input type="text" class="form-control" id="inputRate">
								</div>
							</div>
							<div class="form-group">
								<div class="form-check">
								<input class="form-check-input" type="checkbox" id="gridCheck">
								<label class="form-check-label" for="gridCheck">
									Check me out
								</label>
								</div>
							</div>
							<button type="submit" class="btn btn-primary">Sign in</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="be-an-escort">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						Quieres ser una Chica Escort?
					</div>
				</div>
			</div>
		</div>

		<div class="instagram">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						instagram
					</div>
				</div>
			</div>
		</div>

		<?php
			// footer section
			require_once 'shared/footer.php';

			// copyright section
			require_once 'shared/copyright.php';

			// javascript libraries
			require_once 'shared/libraries.php';
		?>
	</body>
</html>