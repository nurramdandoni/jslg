<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu_narasumber');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Notifikasi Workshop
			</h3>
		</div>
	</div>
	<!--begin::Form-->
		<div class="kt-portlet__body">
			<!-- loop awal -->
			<div class="form-group form-group-last">
				<div class="alert alert-danger" style="background-color: #DF3338;" role="alert">
					<div class="alert-text">
						<div>
							<h6>
								Workshop 2 - 23 Maret 2019
							</h6>
						</div>
						<div>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
					</div>
				</div>
			</div>
			<!-- loop akhir -->
			<!-- loop awal -->
			<div class="form-group form-group-last">
				<div class="alert alert-danger" style="background-color: #DF3338;" role="alert">
					<div class="alert-text">
						<div>
							<h6>
								Workshop 1 - 23 Januari 2019
							</h6>
						</div>
						<div>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
					</div>
				</div>
			</div>
			<!-- loop akhir -->
		</div>
	<!--end::Form-->			
</div>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>