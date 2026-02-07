<!doctype html>
<html lang="es">
	<?php include "_head.php";?>
	<body>
		<?php include "_header.php";?>
		<section class="encuesta">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h1>Encuestas de satisfacción</h1>
					</div>
				</div>
				<div class="row mb-5">
					<div class="col text-center">
						<h3>Ventas / NZ-VT-FO-06</h3>
					</div>
				</div>
				<div class="row mb-3">
					<div class="col text-center">
						<h4>En Naturistas Ziloé nos interesa su opinión, ya que usted nos dará la pauta para brindarle un mejor servicio.</h4>
					</div>
				</div>
				<div class="row">
					<div class="col text-center">
						<p>Cómo considera los siguientes aspectos:</p>
					</div>
				</div>
				<form id="frmEncuesta">
					<div class="row mb-3">
						<div class="col">
							<label for="ejecutivo" class="form-label">* Nombre del ejecutivo que lo atiende:</label>
							<input type="text" id="ejecutivo" name="ejecutivo" class="form-control" required>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							* La atención en general (Admon, ventas y reparto):
						</div>
						<div class="col-md-6">
							<input type="radio" class="btn-check" name="atencion-general" id="ag-1" autocomplete="off" value="1" required>
							<label class="btn btn-outline-dark" for="ag-1">1</label>
							<input type="radio" class="btn-check" name="atencion-general" id="ag-2" autocomplete="off" value="2" required>
							<label class="btn btn-outline-dark" for="ag-2">2</label>
							<input type="radio" class="btn-check" name="atencion-general" id="ag-3" autocomplete="off" value="3" required>
							<label class="btn btn-outline-dark" for="ag-3">3</label>
							<input type="radio" class="btn-check" name="atencion-general" id="ag-4" autocomplete="off" value="4" required>
							<label class="btn btn-outline-dark" for="ag-4">4</label>
							<input type="radio" class="btn-check" name="atencion-general" id="ag-5" autocomplete="off" value="5" required>
							<label class="btn btn-outline-dark" for="ag-5">5</label>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							* El tiempo de respuesta (correo, pendientes, pedidos):
						</div>
						<div class="col-md-6">
							<input type="radio" class="btn-check" name="tiempo-respuesta" id="tr-1" autocomplete="off" value="1" required>
							<label class="btn btn-outline-dark" for="tr-1">1</label>
							<input type="radio" class="btn-check" name="tiempo-respuesta" id="tr-2" autocomplete="off" value="2" required>
							<label class="btn btn-outline-dark" for="tr-2">2</label>
							<input type="radio" class="btn-check" name="tiempo-respuesta" id="tr-3" autocomplete="off" value="3" required>
							<label class="btn btn-outline-dark" for="tr-3">3</label>
							<input type="radio" class="btn-check" name="tiempo-respuesta" id="tr-4" autocomplete="off" value="4" required>
							<label class="btn btn-outline-dark" for="tr-4">4</label>
							<input type="radio" class="btn-check" name="tiempo-respuesta" id="tr-5" autocomplete="off" value="5" required>
							<label class="btn btn-outline-dark" for="tr-5">5</label>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							* La disponibilidad de productos (existencias):
						</div>
						<div class="col-md-6">
							<input type="radio" class="btn-check" name="existencias" id="ex-1" autocomplete="off" value="1" required>
							<label class="btn btn-outline-dark" for="ex-1">1</label>
							<input type="radio" class="btn-check" name="existencias" id="ex-2" autocomplete="off" value="2" required>
							<label class="btn btn-outline-dark" for="ex-2">2</label>
							<input type="radio" class="btn-check" name="existencias" id="ex-3" autocomplete="off" value="3" required>
							<label class="btn btn-outline-dark" for="ex-3">3</label>
							<input type="radio" class="btn-check" name="existencias" id="ex-4" autocomplete="off" value="4" required>
							<label class="btn btn-outline-dark" for="ex-4">4</label>
							<input type="radio" class="btn-check" name="existencias" id="ex-5" autocomplete="off" value="5" required>
							<label class="btn btn-outline-dark" for="ex-5">5</label>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							* La calidad de nuestros productos (calidad):
						</div>
						<div class="col-md-6">
							<input type="radio" class="btn-check" name="calidad" id="ca-1" autocomplete="off" value="1" required>
							<label class="btn btn-outline-dark" for="ca-1">1</label>
							<input type="radio" class="btn-check" name="calidad" id="ca-2" autocomplete="off" value="2" required>
							<label class="btn btn-outline-dark" for="ca-2">2</label>
							<input type="radio" class="btn-check" name="calidad" id="ca-3" autocomplete="off" value="3" required>
							<label class="btn btn-outline-dark" for="ca-3">3</label>
							<input type="radio" class="btn-check" name="calidad" id="ca-4" autocomplete="off" value="4" required>
							<label class="btn btn-outline-dark" for="ca-4">4</label>
							<input type="radio" class="btn-check" name="calidad" id="ca-5" autocomplete="off" value="5" required>
							<label class="btn btn-outline-dark" for="ca-5">5</label>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							* Envío y recepción de productos (buen estado):
						</div>
						<div class="col-md-6">
							<input type="radio" class="btn-check" name="envio" id="er-1" autocomplete="off" value="1" required>
							<label class="btn btn-outline-dark" for="er-1">1</label>
							<input type="radio" class="btn-check" name="envio" id="er-2" autocomplete="off" value="2" required>
							<label class="btn btn-outline-dark" for="er-2">2</label>
							<input type="radio" class="btn-check" name="envio" id="er-3" autocomplete="off" value="3" required>
							<label class="btn btn-outline-dark" for="er-3">3</label>
							<input type="radio" class="btn-check" name="envio" id="er-4" autocomplete="off" value="4" required>
							<label class="btn btn-outline-dark" for="er-4">4</label>
							<input type="radio" class="btn-check" name="envio" id="er-5" autocomplete="off" value="5" required>
							<label class="btn btn-outline-dark" for="er-5">5</label>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							* Nuestros precios:
						</div>
						<div class="col-md-6">
							<input type="radio" class="btn-check" name="precios" id="pr-1" autocomplete="off" value="1" required>
							<label class="btn btn-outline-dark" for="pr-1">1</label>
							<input type="radio" class="btn-check" name="precios" id="pr-2" autocomplete="off" value="2" required>
							<label class="btn btn-outline-dark" for="pr-2">2</label>
							<input type="radio" class="btn-check" name="precios" id="pr-3" autocomplete="off" value="3" required>
							<label class="btn btn-outline-dark" for="pr-3">3</label>
							<input type="radio" class="btn-check" name="precios" id="pr-4" autocomplete="off" value="4" required>
							<label class="btn btn-outline-dark" for="pr-4">4</label>
							<input type="radio" class="btn-check" name="precios" id="pr-5" autocomplete="off" value="5" required>
							<label class="btn btn-outline-dark" for="pr-5">5</label>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col">
							<label for="comentarios" class="form-label">* Sugerencias o comentarios:</label>
							<textarea id="comentarios" name="comentarios" class="form-control" required></textarea>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col">
							<label for="cliente" class="form-label">* Nombre del cliente:</label>
							<input type="text" id="cliente" name="cliente" class="form-control" required>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col">
							<label for="razon-social" class="form-label">* Razón social:</label>
							<input type="text" id="razon-social" name="razon-social" class="form-control" required>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col text-end">
							<button type="submit" class="btn btn-orange">Enviar</button>
						</div>
					</div>
				</form>
				<div class="row d-none" id="gracias">
					<div class="col text-center">
						<h4>Su opinión marca la diferencia,</h4>
						<h1>¡GRACIAS POR CONTESTAR!</h1>
					</div>
				</div>
			</div>
		</section>
		<div class="toast-container position-fixed top-0 end-0 p-3">
			<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="toastEncuesta">
				<div class="toast-header">
					<strong class="me-auto">Naturistas Ziloé</strong>
					<small>Justo ahora</small>
					<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
				</div>
				<div class="toast-body">
					Muchas gracias por contestar nuestra encuesta de satisfacción.
				</div>
			</div>
		</div>
		<?php include "_footer.php";?>
		<?php include "_js.php";?>
		<script>
			const toast = new bootstrap.Toast(document.querySelector("#toastEncuesta"));
			const frm = document.querySelector("#frmEncuesta");
			async function sendEncuesta() {
				loading.style.display = 'block';
				const formData = new FormData(frm);
				fetch("encuesta", {
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
				sendEncuesta();
			});
		</script>
	</body>
</html>