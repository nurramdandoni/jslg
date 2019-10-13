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
			<form action="<?php echo base_url()?>admin/save_create_silabus" method="post" enctype="multipart/form-data">
				<div class="form-group">
				<input type="text" class="form-control"  placeholder="Nama Pendidikan" required="" name="nama_silabus">
				<span class="form-text text-muted"></span>
				</div>
				<div class="form-group">
					<select class="form-control" id="narasumber_diklat" name="id_narsum">
							<option value="0">-Pilih Narasumber-</option>
							<?php foreach($list_narasumber->result() as $narasumber){ ?>
								<option value="<?php echo $narasumber->id_narasumber; ?>">
									<?php echo $narasumber->nama_narasumber; ?>
								</option>
							<?php } ?>
						</select>
				</div>
				<div class="form-group">
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="customFile" name="file">
						<label class="custom-file-label" for="customFile">Upload Materi Pelatihan</label>
					</div>
					<label>Max. 2Mb pdf | doc | docx | ppt | pptx</label>
				</div>
				<div class="form-group" style="margin-left: 10px;">
					<div class="row">
						<select class="form-control col-md-8" id="id_quiz">
							<option value="T">-Pilih Quiz-</option>
							<option value="0">Tidak ada Quiz</option>
							<?php foreach($list_quiz->result() as $quiz){ ?>
								<option value="<?php echo $quiz->id_quiz; ?>">
									<?php echo $quiz->nama_quiz; ?>
								</option>
							<?php } ?>
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
				<?php foreach($list_quiz->result() as $quiz){ ?>
					<tr>
						<td><?php echo $quiz->nama_quiz; ?></td>
						<td><?php echo $quiz->jumlah_soal; ?></td>
						<td><?php echo $quiz->nilai; ?></td>
						<td><a href="<?php echo base_url() ?>admin/<?php echo $quiz->id_quiz; ?>">Delete</a></td>
					</tr>
				<?php } ?>
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