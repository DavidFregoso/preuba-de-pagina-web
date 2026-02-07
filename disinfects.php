<!doctype html>
<html lang="es">
	<?php include "_head.php";?>
	<body>
		<?php include "_header.php";?>
		<div class="ratio ratio-16x9">
			<video autoplay loop muted playsinline>
	  			<source src="videos/disinfects.mp4" type="video/mp4"></source>
	  		</video>
	  	</div>
		<section class="landing-azul">
			<div class="container">
				<div class="row mb-5 text-black">
					<div class="col text-center">
						<h1>Conoce nuestra solución sanitizante DISINFECTS PLUS&copy;</h1>
					</div>
				</div>
				<div class="row text-white">
					<div class="col-md-6 mb-3">
						<div class="row d-flex align-items-center">
							<div class="col-md-6">
								<img src="images/ico-disinfects.webp" class="img-fluid">
							</div>
							<div class="col-md-6">
								<h5>Solución Sanitizante</h5>
								<ul class="list-unstyled">
									<li>Elimina el virus causante del COVID-19</li>
									<li>Mata el 99.99% de gérmenes y bacterias</li>
									<li>No contiene alcohol ni cloro</li>
									<li>Ideal para manos, ropa y superficies</li>
									<li>Hasta 12 horas de protección</li>
								</ul>
								<p>Presentación: 500 ml</p>
								<!--a href="#"><img src="images/ico-landing-cart.webp"></a>
								<button class="btn btn-success">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
										<path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
									</svg>
									Pídelo aquí
								</button-->
							</div>
						</div>
					</div>
					<div class="col-md-6 disinfects-banner">
						<div class="row">
							<div class="col-md-6">
								<h3>SEGURIDAD CERTIFICADA EN CADA ROCÍO</h3>
								<p>Productos desinfectantes con certificación COFEPRIS y reportes analíticos que demuestran su efectividad.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="conocer-mas">
			<?php include "_contacto.php";?>
		</section>
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
			
			let distribuidores = document.querySelectorAll('#distribuidores.carousel .carousel-item');
			distribuidores.forEach((el) => {
				
				let _img = el.querySelector('img');
		        _img.addEventListener('mouseover', function(){
			    	_img.src = _img.dataset.on;
			    });
			    _img.addEventListener('mouseout', function(){
			    	_img.src = _img.dataset.off;
			    });
				
				const minPerSlide = 6;
				let next = el.nextElementSibling;
				for (var i=1; i<minPerSlide; i++) {
					if (!next) {
			            // wrap carousel by using first child
			            next = distribuidores[0];
			        }
			        let cloneChild = next.cloneNode(true);
			        
			        let _img = cloneChild.children[0].querySelector('img');
			        _img.addEventListener('mouseover', function(){
				    	_img.src = _img.dataset.on;
				    });
				    _img.addEventListener('mouseout', function(){
				    	_img.src = _img.dataset.off;
				    });
			        
			        el.appendChild(cloneChild.children[0]);
			        next = next.nextElementSibling;
			    }
			});
		</script>
	</body>
</html>