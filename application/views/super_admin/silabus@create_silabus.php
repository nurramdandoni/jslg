<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Create Silabus
			</h3>
		</div>
	</div>
	<!-- awal -->
		<div class="kt-portlet__body">
			<form>
				<div class="form-group">
				<input type="text" class="form-control"  placeholder="Nama Pendidikan" required="">
				<span class="form-text text-muted"></span>
				</div>
				<div class="form-group">
					<select class="form-control" id="narasumber">
						<option value="0">-Pilih Narasumber-</option>
						<option value="1">Narasumber 1</option>
						<option value="1">Narasumber 2</option>
						<option value="1">Narasumber 3</option>
						<option value="1">Narasumber 4</option>
					</select>
				</div>
				<div class="form-group">
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="customFile">
					<label class="custom-file-label" for="customFile">Upload Materi Pelatihan</label>
				</div>
				</div>
				<div class="form-group" style="margin-left: 10px;">
					<div class="row">
					<select class="form-control col-md-8" id="quiz">
						<option value="0">-Pilih Quiz-</option>
						<option value="1">Quiz 1</option>
						<option value="1">Quiz 2</option>
						<option value="1">Quiz 3</option>
						<option value="1">Quiz 4</option>
					</select>
					&nbsp<a class="btn btn-default form-control col-md-2">Add</a>
					</div>
				</div>
			
			<!--begin: Datatable -->
			<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
				<thead>
					<tr>
				  		<th>Nama Quiz</th>
				  		<th>Jumlah Soal</th>
				  		<th>Nilai</th>
				  		<th>Aksi</th>
				  	</tr>
				</thead>
				<tbody>
					<tr>
						<td>Contoh Quiz 1</td>
						<td>40</td>
						<td>90</td>
						<td><a href="#">Delete</a></td>
					</tr>
				</tbody>
			</table>
			<!--end: Datatable -->
			<div class="kt-portlet__foot">
				<div class="kt-form__actions">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</div>
			</form>
		</div>

		<!-- akhir -->
		
</div>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>