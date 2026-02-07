		<script src="js/bootstrap.bundle.min.js"></script>
		<script>
			var prevScrollpos = window.pageYOffset;
			let navbar = document.querySelector(".navbar");
			window.onscroll = function() {
				var currentScrollPos = window.pageYOffset;
				if (prevScrollpos > currentScrollPos) {
					navbar.style.top = "0";
				} else {
					navbar.style.top = "-92px";
				}
				prevScrollpos = currentScrollPos;
			}
			
			const loading = document.querySelector(".loading");
			const toastContacto = new bootstrap.Toast(document.querySelector("#toastContacto"));
			const frmContacto = document.querySelector("#frmContacto");
			async function sendContacto() {
				loading.style.display = 'block';
				const formData = new FormData(frmContacto);
				fetch("xt-contacto.php", {
					method:'POST',
					body:formData
				})
				.then(function(response){
					toastContacto.show();
					frmContacto.reset();
					loading.style.display = 'none';
				})
				.catch(function(error){
					toastContacto.show();
					frmContacto.reset();
					loading.style.display = 'none';
					console.log(error);
				});
			}
			if(frmContacto){
				frmContacto.addEventListener("submit", (event) => {
					event.preventDefault();
					sendContacto();
				});
			}
		</script>