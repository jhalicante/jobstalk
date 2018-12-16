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
		<script src="<?php echo ASSET_URL;?>assets/js/notify.min.js"></script>
		<!-- Scripts.js -->
		<script src="<?php echo ASSET_URL;?>assets/js/scripts.js"></script>
		<script src="<?php echo ASSET_URL;?>assets/js/functions.js"></script>
		<script src="<?php echo ASSET_URL;?>assets/js/admin.js"></script>
		
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
		</script>
		<?php if(isset($_GET['spes-brgy'])) { ?>
			<script> 
				setTimeout(() => {
					$('.spes-brgy').click();					
				}, 10);
			</script>
		<?php } ?>

		<?php if(isset($_GET['admin-sprs-report-id'])) { ?>
			<script> 
				// $('.sprs-tab').click();
				setTimeout(() => {
					$('.sprs-tab').click();	
					$.ajax({
						type : 'POST',
						url : api_url+'/admin/get-sprs',
						data : { id : <?php echo $_GET['admin-sprs-report-id']; ?>, table_name: 'admin_sprs_report'},
						success : function(res) {
							console.log('res ',res.response);
							$('.other-activities').attr({'disabled':'true','placeholder':res.response.other_activities});
							$('.sprs-name').attr({'disabled':'true','placeholder':res.response.sprs_name});
							$('.sprs-designation').attr({'disabled':'true','placeholder':res.response.sprs_designation});
							var i = 0;
							$('#sprs-div table tr td[contenteditable="true"]').each(function(e) {
								i++;
								$(this).html(res.response["_"+i+"_"]);
								console.log(res.response["_"+i+"_"]);
							});
						}
					});   
				}, 100);
			</script>
		<?php } ?>

		<?php if(isset($_GET['admin-lmi-report-id'])) { ?>
			<script> 
				// $('.sprs-tab').click();
				setTimeout(() => {
					$('.lmi-tab').click();	
					$.ajax({
						type : 'POST',
						url : api_url+'/admin/get-sprs',
						data : { id : <?php echo $_GET['admin-lmi-report-id']; ?>, table_name: 'admin_lmi_report'},
						success : function(res) {
							// console.log('res ',res.response);
							// $('.other-activities').attr({'disabled':'true','placeholder':res.response.other_activities});
							// $('.sprs-name').attr({'disabled':'true','placeholder':res.response.sprs_name});
							// $('.sprs-designation').attr({'disabled':'true','placeholder':res.response.sprs_designation});
							var i = 0; 
							for (let i = 0; i <= 17; i++) {
								var val = res.response[""+i+""];
								$('input.t'+i).val('').attr({'placeholder':val,'disabled':true}).val(val);
								console.log(val);
							}
							console.log(res.response);
						}
					});   
				}, 500);
			</script>
		<?php } ?>
		<script>
		function minmax(value, min, max) 
		{
			if(parseInt(value) < min || isNaN(parseInt(value))) 
				return min; 
			else if(parseInt(value) > max) 
				return max; 
			else return value;
		}
		</script>
		<?php if(isset($_GET['applicant-profile'])) { ?>
			<script> setTimeout(() => {
				$('.applicant-profile-tab').click();
			}, 100);  </script>
		<?php } ?>

		<?php if(isset($_GET['employer-profile'])) { ?>
			<script> setTimeout(() => {
				$('.employer-profile-tab').click();
			}, 100);  </script>
		<?php } ?>

		<?php if(isset($_GET['lmi-month'])) { ?>
			<script> setTimeout(() => {
				$('.lmi-tab').click();
			}, 100);  </script>
		<?php } ?>