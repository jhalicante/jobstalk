		<!-- Scripts -->
		<!-- jQuery -->		
		<script src="<?php echo ASSET_URL;?>assets/js/jquery-3.1.1.min.js"></script>
		<script src="<?php echo ASSET_URL;?>assets/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo ASSET_URL;?>assets/js/dataTables.buttons.min.js"></script>
		<script src="<?php echo ASSET_URL;?>assets/js/buttons.print.min.js"></script>
		<!-- Bootstrap -->
		<script src="<?php echo ASSET_URL;?>assets/js/bootstrap.min.js"></script>
		<!-- Owl Carousel -->
		<script src="<?php echo ASSET_URL;?>assets/js/owl.carousel.min.js"></script>
		<!-- Wow.js -->
		<script src="<?php echo ASSET_URL;?>assets/js/wow.min.js"></script>
		<!-- Typehead.js -->
		<script src="<?php echo ASSET_URL;?>assets/js/typehead.js"></script>
		<!-- Tagsinput.js -->
		<script src="<?php echo ASSET_URL;?>assets/js/tagsinput.js"></script>
		<!-- Bootstrap Select -->
		<script src="<?php echo ASSET_URL;?>assets/js/bootstrap-select.js"></script>		
		<!-- Waypoints -->
		<script src="<?php echo ASSET_URL;?>assets/js/jquery.waypoints.min.js"></script>
		<!-- CountTo -->
		<script src="<?php echo ASSET_URL;?>assets/js/jquery.countTo.js"></script>
		<!-- Isotope -->
		<script src="<?php echo ASSET_URL;?>assets/js/isotope.pkgd.min.js"></script>
		<script src="<?php echo ASSET_URL;?>assets/js/imagesloaded.pkgd.min.js"></script>
		<!-- Magnific-Popup -->
		<script src="<?php echo ASSET_URL;?>assets/js/jquery.magnific-popup.js"></script>
		<!-- SweetAlert -->
		<script src="<?php echo ASSET_URL;?>assets/js/sweetalert.min.js"></script>
		<!-- Scripts.js -->
		<script src="<?php echo ASSET_URL;?>assets/js/bootstrap-select.min.js"></script>
		<script src="<?php echo ASSET_URL;?>assets/js/scripts.js"></script>
		<script src="<?php echo ASSET_URL;?>assets/js/functions.js"></script>
		<script src="<?php echo ASSET_URL;?>assets/js/employer.js"></script>
		<?php if($fetch->getInformation('user_account', 'status') == 'pending') {?>
			<script>
				setTimeout(() => {
					$('#pending-notice-popup').modal('show');
				}, 1500);
			</script>
		<?php } ?>
		<script>
			var api_url = '<?php echo API_URL; ?>';
			var asset_url = '<?php echo ASSET_URL; ?>';
			$('.selectpicker').selectpicker({
				liveSearch: true,
				maxOptions: 1
			});
			// $('select').selectpicker();
		</script>
		
		<?php if(isset($_GET['active-tab'])) { ?>
			<script> setTimeout(() => {
				$('.<?php echo $_GET['active-tab']; ?>').click();
			}, 100);  </script>
		<?php } ?>