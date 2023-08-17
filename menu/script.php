<script src="assets/dist-2/js/jquery.min.js"></script>
<script src="assets/dist-2/js/jquery-migrate-3.0.1.min.js"></script>
<script src="assets/dist-2/js/popper.min.js"></script>
<script src="assets/dist-2/js/bootstrap.min.js"></script>
<script src="assets/dist-2/js/jquery.easing.1.3.js"></script>
<script src="assets/dist-2/js/jquery.waypoints.min.js"></script>
<script src="assets/dist-2/js/jquery.stellar.min.js"></script>
<script src="assets/dist-2/js/owl.carousel.min.js"></script>
<script src="assets/dist-2/js/jquery.magnific-popup.min.js"></script>
<script src="assets/plugins/alert/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="assets/plugins/alert/dist/sweetalert2.min.js"></script>
<script src="assets/dist-2/js/scrollax.min.js"></script>
<script src="assets/dist-2/js/main.js"></script>
<script type="text/javascript">
	$(document).on('click','#user-logout', function(e) {
		e.preventDefault();
		var id = "1";
		$.ajax({
			type: "POST",
			url: "proses/logout.php",
			data: {'id':id},
			success: function(response) {
				var dataresponse = JSON.parse(response);
				console.log(dataresponse);
				if(dataresponse.status == "1") {
					Swal.fire({
						title: "Pemberitahuan",
						text: "Berhasil keluar aplikasi",
						icon: "success"
					}).then(function() {
						window.location.href='index'
					});
				}
			}
		});
	});
</script>