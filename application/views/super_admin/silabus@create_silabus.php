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
						<select class="form-control col-md-8" id="id_quiz" name="id_quiz">
							<option value="T">-Pilih Quiz-</option>
							<option value="0">Tidak ada Quiz</option>
							<?php foreach($list_quiz->result() as $quiz){ ?>
								<option value="<?php echo $quiz->id_quiz; ?>">
									<?php echo $quiz->nama_quiz; ?>
								</option>
							<?php } ?>
						</select>
					&nbsp<a class="btn btn-default form-control col-md-2"  data-toggle="modal" data-target="#input_quiz">Add</a>
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
						<td><a href="<?php echo base_url() ?>admin/delete_quiz/<?php echo $quiz->id_quiz; ?>">Delete</a></td>
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

<div id="input_quiz" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<form method="post" action="<?php echo base_url()?>admin/save_quiz">
			<!-- <input type="hidden" value="<?php echo $data_diklat->id_diklat; ?>" name="id_diklat"> -->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Buat Quiz</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input type="text" class="form-control"  placeholder="Judul Quiz" required="" name="nama_quiz">
					</div>
					<!-- <div class="form-group">
						<input type="number" class="form-control"  placeholder="Jumlah Soal" required="" name="jumlah">
					</div> -->
					<div class="form-group">
						<input type="text" class="form-control"  placeholder="Nilai Lulus" required="" name="n_lulus">
					</div>
					<div class="form-group">
						<input type="text" class="form-control"  placeholder="Keterangan" name="keterangan">
					</div>
					<!-- awal loop -->
					
					<hr>
					<div id="in_soal">
					<label for="" id="soal_no0">Soal 1</label>
					<div class="form-group">
						<input type="text" class="form-control"  placeholder="Pertanyaan" required="" name="pertanyaan[]">
					</div>
					<div id="dynamic">
						<div class="form-group">
							<div class="row" style="margin-left:1px; margin-right:1px;">
								<input type="text" class="form-control" id="opsi"  placeholder="Opsi A" required="" name="opsia[]">
								<!-- &nbsp<a class="btn btn-default form-control col-sm-3" id="tambah">Add Opsi</a> -->
							</div>
						</div>
						<div class="form-group">
							<div class="row" style="margin-left:1px; margin-right:1px;">
								<input type="text" class="form-control" id="opsi"  placeholder="Opsi B" required="" name="opsib[]">
								<!-- &nbsp<a class="btn btn-default form-control col-sm-3" id="tambah">Add Opsi</a> -->
							</div>
						</div>
						<div class="form-group">
							<div class="row" style="margin-left:1px; margin-right:1px;">
								<input type="text" class="form-control" id="opsi"  placeholder="Opsi C" required="" name="opsic[]">
								<!-- &nbsp<a class="btn btn-default form-control col-sm-3" id="tambah">Add Opsi</a> -->
							</div>
						</div>
						<div class="form-group">
							<div class="row" style="margin-left:1px; margin-right:1px;">
								<input type="text" class="form-control" id="opsi"  placeholder="Opsi D" required="" name="opsid[]">
								<!-- &nbsp<a class="btn btn-default form-control col-sm-3" id="tambah">Add Opsi</a> -->
							</div>
						</div>
						<div class="form-group">
							<div class="row" style="margin-left:1px; margin-right:1px;">
								<input type="text" class="form-control" id="opsi"  placeholder="Opsi E" required="" name="opsie[]">
								<!-- &nbsp<a class="btn btn-default form-control col-sm-3" id="tambah">Add Opsi</a> -->
							</div>
						</div>
					</div>
					<div class="form-group">
						<!-- <input type="text" class="form-control"  placeholder="Jawaban" required="" name="jawaban[]"> -->
						<select name="jawaban[]" id="jawaban" class="form-control">
							<option value="0">-- Pilih Jawaban --</option>
							<option value="A">Opsi A</option>
							<option value="B">Opsi B</option>
							<option value="C">Opsi C</option>
							<option value="D">Opsi D</option>
							<option value="E">Opsi E</option>
						</select>
					</div> 
					<hr>
					</div>
					<!-- akhir loop -->
					<div id="input0"></div>
                	<div align="center">
                   		<a href="javascript:action();" class="btn btn-default"><span>+ Tambah Soal</span></a>
                	</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</div>
		</form>
	</div>
</div>


<script>

counter=0;

function action(){

	counterNext=counter+1;

	document.getElementById("input"+counter).innerHTML = document.getElementById("in_soal").innerHTML+"<div id=\"input"+counterNext+"\"></div>";
	document.getElementById("")

	counter++;

}

// $(document).ready(function(){
// 	var no =1;
// 	$('#tambah').click(function(){
//         no++;
//         $('#dynamic').append('<div><input type="text" name="opsi[]" placeholder="Opsi '+no+'" class="form-control col-sm-8" id="row'+no+'" style="display:inline;"/><a class="btn btn-default btn_remove form-control col-sm-3" id="'+no+'">Hapus</a></div>');
		
//     });

//     $(document).on('click', '.btn_remove', function(){
//         var button_id = $(this).attr("id"); 
//         $('#row'+button_id+'').remove();
//         $('#'+button_id+'').remove();
//     });
// });
</script>


<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>