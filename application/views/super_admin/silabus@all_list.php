<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				All List
			</h3>
		</div>
	</div>
	<!-- awal -->
	<div class="kt-portlet kt-portlet--mobile">
		<div class="kt-portlet__head kt-portlet__head--lg">
			<div class="kt-portlet__head-toolbar">
	            <div class="kt-portlet__head-wrapper">
				<div class="kt-portlet__head-actions">
					<a href="<?php echo base_url() ?>admin/create_silabus" class="btn btn-brand btn-elevate btn-icon-sm">
						<i class="la la-plus"></i>
						Create New Silabus
					</a>
				</div>	
				</div>
			</div>
		</div>
		<div class="kt-portlet__body">
			<!--begin: Datatable -->
			<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
				<thead>
					<tr>
				  		<th>Nama Silabus</th>
				  		<th>Pemateri</th>
				  		<th>Nama Quiz - Jumlah Soal</th>
				  		<th>Aksi</th>
				  	</tr>
				</thead>
				<tbody>
					<?php foreach($list_silabus->result() as $list){ ?>
					<tr>
						<td><?php echo $list->nama_silabus ?></td>
						<td><?php echo $list->nama_narasumber ?></td>
						<td><?php echo $list->nama_quiz." - ".$list->jumlah_soal." Soal"; ?></td>
						<td>
							<a href="#" data-toggle="modal" data-target="#edit<?php echo $list->id_silabus; ?>">Update</a> 
							<!-- | 
							<a  href="<?php echo base_url()?>admin/delete_silabus/<?php echo $list->id_silabus; ?>">Delete</a> -->
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<!--end: Datatable -->
		</div>
	</div>
	<!-- akhir -->
</div>


<!-- awal modal -->
<?php foreach($list_silabus->result() as $list){ ?>
	<div id="edit<?php echo $list->id_silabus; ?>" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<form method="post" action="<?php echo base_url()?>admin/update_create_silabus" enctype="multipart/form-data">
					<input type="hidden" value="<?php echo $list->id_silabus; ?>" name="id_silabus">
					<div class="modal-header">
						
						<h4 class="modal-title">Edit Silabus</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<span class="form-text text-muted">Nama Silabus</span>
							<input type="text" class="form-control"  placeholder="Nama Silabus" required="" name="nama_silabus" value="<?php echo $list->nama_silabus; ?>">
						</div>
						<div class="form-group">
							<span class="form-text text-muted">Nama Narasumber</span>
							<select class="form-control" id="narasumber_diklat" name="id_narsum">
									<option value="<?php echo $list->id_narasumber; ?>"><?php echo $list->nama_narasumber; ?></option>
									<?php foreach($list_narasumber->result() as $narasumber){ ?>
										<option value="<?php echo $narasumber->id_narasumber; ?>">
											<?php echo $narasumber->nama_narasumber; ?>
										</option>
									<?php } ?>
								</select>
						</div>
						<div class="form-group">
							<span class="form-text text-muted">File Silabus</span>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="customFile" name="file">
								<label class="custom-file-label" for="customFile">Upload Materi Pelatihan</label>
							</div>
							<label>Max. 2Mb pdf | doc | docx | ppt | pptx</label>
						</div>
						<div class="form-group">
								<span class="form-text text-muted">Quiz</span>
								<select class="form-control" id="id_quiz" name="id_quiz">
									<option value="<?php echo $list->id_quiz; ?>"><?php echo $list->nama_quiz; ?></option>
									<option value="0">Tidak ada Quiz</option>
									<?php foreach($list_quiz->result() as $quiz){ ?>
										<option value="<?php echo $quiz->id_quiz; ?>">
											<?php echo $quiz->nama_quiz; ?>
										</option>
									<?php } ?>
								</select>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Update</button>
					</div>
				</form>
			</div>
		

		</div>
	</div>
<?php } ?>

<!-- akhir modal -->

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>