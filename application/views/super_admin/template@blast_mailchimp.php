<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Blast Mailchimp
			</h3>
		</div>
	</div>
	<!-- awal -->
		<div class="kt-portlet__body">
			<div class="row">
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Legal Drafting
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Auditor Hukum
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Legislative
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Pengacara Pajak
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="height: 100px; margin-bottom:20px;padding:10px;">
						Legal Tech
					</div>
				</div>
			</div>
		</div>
		<div class="kt-portlet__body">
			<form action="<?php echo base_url() ?>admin/send_email_blast" method="post">
			<!--begin: Datatable -->
			<div class="checkbox">
			  <label><input type="checkbox" value="0" id="check">Check All</label>
			</div>
			<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
				<thead>
					<tr>
				  		<th>Nama User</th>
				  		<th>Email</th>
				  		<th>Aksi</th>
				  	</tr>
				</thead>
				<tbody>
					<?php foreach($list_user->result() as $data_user){ ?>
					<tr>
						<td><?php echo $data_user->nama_peserta ?></td>
						<td><?php echo $data_user->email_peserta ?></td>
						<td><input type="checkbox" value="<?php echo $data_user->email_peserta ?>" name="list_email[]" class="check_all"></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<!--end: Datatable -->
			
				<div class="form-group">
				<input type="text" class="form-control"  placeholder="Subject Email" required="" name="subject">
				<span class="form-text text-muted"></span>
				</div>
				<div class="form-group form-group-last">
							<label for="exampleTextarea">Detail Email</label>
							<textarea class="form-control" id="exampleTextarea" rows="3" required="" name="isi_email"></textarea>
						</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<button type="submit" class="btn btn-primary">Buat Email</button>
					</div>
				</div>
			</form>
		</div>
		<!-- akhir -->
		
</div>

<script>
$(document).ready(function(){
	$('#check').click(function(){

		var nilai = $('#check').val();
		var jml_cek = $('#list_email').length;
		if(nilai==0){
			$('#check').val(1);
			$('.check_all').prop('checked', this.checked);
			console.log(jml_cek);
		}else{
			$('#check').val(0);
			$('.check_all').prop('checked', false);
			console.log(jml_cek);
			
		}

	});
});
</script>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>