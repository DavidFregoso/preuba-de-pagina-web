<!doctype html>
<html lang="es">
	<?php include "_head.php";?>
	<body>
		<?php include "_header.php";?>
		<div class="ratio ratio-16x9">
			<video autoplay loop muted playsinline>
	  			<source src="videos/kupa.mp4" type="video/mp4"></source>
	  		</video>
	  	</div>
		<section class="landing-kupa">
			<div class="container">
				<div class="row mb-5">
					<div class="col text-center">
						<h1>Descubre la fuerza de tu esencia con la línea de productos KUPA, especialmente pensados para ti</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-3">
						<div class="row d-flex align-items-center">
							<div class="col-md-6">
								<img src="images/ico-shampoo-minoxidil-cacahuananche.webp" class="img-fluid">
							</div>
							<div class="col-md-6">
								<h5>Shampoo Minoxidil Cacahuananche</h5>
								<h6>AUXILIAR CONTRA LACAÍDA DEL CABELLO</h6>
								<ul>
									<li>Adicionado con extracto de Cacahuananche que ayuda a prevenir la caída del cabello</li>
									<li>Ayuda a regular el exceso de sebo en el cuero cabelludo</li>
								</ul>
								<p>Cont. 500 ml</p>
								<a href="#"><img src="images/btn-bodega-aurrera.webp" class="img-fluid"></a>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<div class="row d-flex align-items-center">
							<div class="col-md-6">
								<img src="images/ico-shampoo-minoxidil-carbon-activado.webp" class="img-fluid">
							</div>
							<div class="col-md-6">
								<h5>Shampoo Minoxidil Carbón Activado</h5>
								<h6>LIMPIEZA PROFUNDA, BRILLO Y SUAVIDAD</h6>
								<ul>
									<li>Contiene Carbón Activado para una limpieza profunda</li>
									<li>Contiene Aloe Vera para máxima hidratación y suavidad</li>
								</ul>
								<p>Cont. 500 ml</p>
								<a href="#"><img src="images/btn-bodega-aurrera.webp" class="img-fluid"></a>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<div class="row d-flex align-items-center">
							<div class="col-md-6">
								<img src="images/ico-shampoo-minoxidil-menta-romero.webp" class="img-fluid">
							</div>
							<div class="col-md-6">
								<h5>Shampoo Minoxidil Menta Romero</h5>
								<h6>CABELLO FUERTE Y REFRESCANTE</h6>
								<ul>
									<li>Adicionado con extracto de Romero que ayuda a prevenir el debilitamiento y regular el sebo en el cuero cabelludo</li>
									<li>Contiene extracto de menta para un efecto refrescante, calmante y antibacteriano</li>
								</ul>
								<p>Cont. 500 ml</p>
								<a href="#"><img src="images/btn-bodega-aurrera.webp" class="img-fluid"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="promociones-6">
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-md-4 text-center">
						<h2>Promociones</h2>
					</div>
					<div class="col-md-8">
						<div class="carousel slide" id="promociones" data-bs-ride="carousel" data-bs-theme="dark">
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<div class="col-md-6 p-3">
										<img src="images/promocion-15.webp" class="img-fluid">
									</div>
								</div>
								<div class="carousel-item">
									<div class="col-md-6 p-3">
										<img src="images/promocion-16.webp" class="img-fluid">
									</div>
								</div>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#promociones" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Anterior</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#promociones" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Siguiente</span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="nuestros-distribuidores">
			<div class="container">
				<div class="row mb-5">
					<div class="col text-center">
						<h1>De venta exclusiva en:</h1>
					</div>
				</div>
				<div class="row mb-5">
					<div class="col text-center">
						<a href="#"><img src="images/bodega-aurrera.webp" class="img-fluid"></a>
					</div>
				</div>
			</div>
		</section>
		<section class="giveaway" id="giveaway">
			<div class="container-fluid">
				<div class="row mb-5">
					<div class="col">
						<img src="images/giveaway-kupa-3.webp" class="img-fluid">
					</div>
				</div>
			</div>
			<div class="container">
				<form id="frmGiveaway" class="was-validated">
					<input type="hidden" id="marca" name="marca" value="kupa">
					<div class="row mb-5">
						<div class="col text-center">
							<h1>Participa para ganar un Combo Mixto Tradicional</h1>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col">
							<label for="txtNombre" class="form-label rojo">Nombre *</label>
							<input type="text" class="form-control" id="txtNombre" name="txtNombre" required>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col">
							<label for="txtCiudad" class="form-label rojo">Ciudad *</label>
							<input type="text" class="form-control" id="txtCiudad" name="txtCiudad" required>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-6">
							<label for="txtCelular" class="form-label rojo">Celular *</label>
							<input type="text" class="form-control" id="txtCelular" name="txtCelular" required>
						</div>
						<div class="col-6">
							<label for="txtEmail" class="form-label rojo">Email *</label>
							<input type="email" class="form-control" id="txtEmail" name="txtEmail" required>
						</div>
					</div>
					<!--div class="row mb-3">
						<div class="col-md-6">
							<label for="txtTienda" class="form-label rojo">Tienda *</label>
							<input type="text" class="form-control" id="txtTienda" name="txtTienda" required>
						</div>
						<div class="col-md-6">
							<label for="txtTicket" class="form-label rojo">No. de Ticket *</label>
							<input type="text" class="form-control" id="txtTicket" name="txtTicket" required>
						</div>
					</div-->
					<div class="row mb-3">
						<!--div class="col-md-10">
							<label for="txtFile" class="form-label rojo">Adjunta la foto de tu ticket *</label>
							<input type="file" class="form-control" id="txtFile" name="txtFile" required>
						</div-->
						<div class="col-md-2 d-flex align-items-end">
							<button class="btn btn-orange" type="submit">Enviar</button>
						</div>
					</div>
					<div class="row">
						<div class="col form-check rojo">
							<input class="form-check-input" type="checkbox" value="1" id="chkTerminos" required>
							<label class="form-check-label" for="chkTerminos">
								Acepto las <a href="politica-de-privacidad" target="_blank">políticas de privacidad</a>, <a href="terminos-y-condiciones" target="_blank">términos y condiciones</a> de participación.
							</label>
						</div>
					</div>
				</form>
			</div>
		</section>
		<section class="conocer-mas">
			<?php include "_contacto.php";?>
		</section>
		<div class="toast-container position-fixed top-0 end-0 p-3">
			<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="toastGiveaway">
				<div class="toast-header">
					<strong class="me-auto">Naturistas Ziloé</strong>
					<small>Justo ahora</small>
					<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
				</div>
				<div class="toast-body">
					Muchas gracias por enviar tu información.
				</div>
			</div>
		</div>
		<?php include "_footer.php";?>
		<?php include "_js.php";?>
		<script>
			let promociones = document.querySelectorAll('#promociones.carousel .carousel-item');
			promociones.forEach((el) => {
				
				const minPerSlide = 2;
				let next = el.nextElementSibling;
				for (var i=1; i<minPerSlide; i++) {
					if (!next) {
			            // wrap carousel by using first child
			            next = promociones[0];
			        }
			        let cloneChild = next.cloneNode(true);
			        
			        el.appendChild(cloneChild.children[0]);
			        next = next.nextElementSibling;
			    }
			});
			
			const toast = new bootstrap.Toast(document.querySelector("#toastGiveaway"));
			const frm = document.querySelector("#frmGiveaway");
			async function sendGiveaway() {
				loading.style.display = 'block';
				let formData = new FormData();
				formData.append('marca', document.querySelector("#marca").value);
				formData.append('txtNombre', document.querySelector("#txtNombre").value);
				formData.append('txtCiudad', document.querySelector("#txtCiudad").value);
				formData.append('txtCelular', document.querySelector("#txtCelular").value);
				formData.append('txtEmail', document.querySelector("#txtEmail").value);
				//formData.append('txtTienda', document.querySelector("#txtTienda").value);
				//formData.append('txtTicket', document.querySelector("#txtTicket").value);
				//formData.append('txtFile', document.querySelector("#txtFile").files[0]);
				fetch("giveaway", {
					method:'POST',
					body:formData
				})
				.then(function(response){
					toast.show();
					frm.reset();
					loading.style.display = 'none';
				})
				.catch(function(error){
					toast.show();
					frm.reset();
					loading.style.display = 'none';
					console.log(error);
				});
			}
			frm.addEventListener("submit", (event) => {
				event.preventDefault();
				sendGiveaway();
			});
		</script>
	</body>
</html>