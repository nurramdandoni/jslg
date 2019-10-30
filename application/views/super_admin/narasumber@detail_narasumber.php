<?php 

$this->load->view('template_layout/header');
$this->load->view('template_layout/sidebar_menu');

?>

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Detail Narasumber
			</h3>
		</div>
	</div>
	<!--begin::Form-->
	<?php foreach($detail_narasumber->result() as $detail){ ?>
	<div class="row">
		<div class="col-md-4">
			<div class="kt-portlet__body">
				<form class="kt-form">
					<center>
						<div class="card" style="min-height: 70px; margin-bottom:10px;padding:10px; min-width: 70px; max-width: 150px;">
							<img src="<?php echo base_url().$detail->foto ?>" alt="" id="img-prev" class="img-thumbnail" width="150px">
						</div>
					<div class="form-group">
						<!-- <div class="kt-form__actions">
								<button type="submit" class="btn btn-primary">Approve</button>
						</div> -->
					</div>
					</center>
				</form>
				<!--end::Form-->	
			</div>
		</div>
		<div class="col-md-4">
			<div class="kt-portlet__body">
				<div>
					<label>Nama :</label>
					<span><?php echo $detail->nama_narasumber ?></span>
				</div>
				<div>
					<label>NIK :</label>
					<span><?php echo $detail->nik_narasumber ?></span>
				</div>
				<div>
					<label>Tempat Lahir :</label>
					<span><?php echo $detail->tempat_lahir_narasumber ?></span>
				</div>
				<div>
					<label>Tanggal Lahir :</label>
					<span><?php echo $detail->tanggal_lahir_narasumber ?></span>
				</div>
				<div>
					<label>Alamat :</label>
					<span><?php echo $detail->alamat_narasumber ?></span>
				</div>
				<div>
					<label>Keahlian :</label>
					<span><?php echo $detail->keahlian_narasumber ?></span>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="kt-portlet__body">
				<div>
					<label>Email :</label>
					<span><?php echo $detail->email_narasumber ?></span>
				</div>
				<div>
					<label>Jenis Kelamin :</label>
					<span><?php echo $detail->jenis_kelamin_narasumber ?></span>
				</div>
				<div>
					<label>NPWP :</label>
					<span><?php echo $detail->npwp_narasumber ?></span>
				</div>
				<div>
					<label>Portofolio :</label>
					<span><?php echo $detail->portofolio_narasumber ?></span>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="kt-portlet__body" style="margin-left: 30px;">
				<div class="row">
					<div style="margin:30px;">
						<h5>Pendidikan</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<center>
								<div class="card" style="height: 100px; width: 100px;">
									<?php 
									$google = 'https://docs.google.com/viewer?url=';
									$file = base_url().$detail->ijazah_s1_narasumber; 
									$c = '&embedded=true';

									// echo $google.$file.$c;
									
									?>
									<iframe src="<?php echo $google.$file.$c ?>" style="width:100px; height:100px;" frameborder="0"></iframe>
									
								</div>
							</center>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<center>
								<div class="card" style="height: 100px; width: 100px;">
								<?php 
									$google = 'https://docs.google.com/viewer?url=';
									$file = base_url().$detail->ijazah_s2_narasumber; 
									$c = '&embedded=true';

									// echo $google.$file.$c;
									
									?>
									<iframe src="<?php echo $google.$file.$c ?>" style="width:100px; height:100px;" frameborder="0"></iframe>
								</div>
							</center>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<center>
								<div class="card" style="height: 100px; width: 100px;">
								<?php 
									$google = 'https://docs.google.com/viewer?url=';
									$file = base_url().$detail->ijazah_s3_narasumber; 
									$c = '&embedded=true';

									// echo $google.$file.$c;
									
									?>
									<iframe src="<?php echo $google.$file.$c ?>" style="width:100px; height:100px;" frameborder="0"></iframe>
								</div>
							</center>
						</div>
					</div>
				</div>
				<div class="row">
					<div style="margin:30px;">
						<h5>Silabus</h5>
					</div>
				</div>
				<div class="row">
					<?php 
					$no = 1;
					foreach($silabus_narasumber->result() as $slbs){ ?>
					<div class="col-md-1"><?php echo $no++."."; ?></div>
					<div class="col-md-11">
						<div><a href="<?php echo base_url() ?><?php echo $slbs->file_materi_silabus ?>"><?php echo $slbs->nama_silabus ?></a></div>
					</div>
					<?php } ?>
				</div>
				<div class="row">
					<div style="margin:30px;">
						<h5>Penialain Peserta</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div>
							<!-- Pertanyaan 1 -->
						</div>
					</div>
					<div class="col-md-4">
						<div>
							<!-- Jawaban Pertanyaan 1 -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div>
							<!-- Pertanyaan 2 -->
						</div>
					</div>
					<div class="col-md-4">
						<div>
							<!-- Jawaban Pertanyaan 2 -->
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="col-md-6">
			<div class="kt-portlet__body">
				<center>
					<span>CV</span>
					<div class="form-group">
						<div class="card" style="height: 300px; width: 300px;">
						<?php 
									$google = 'https://docs.google.com/viewer?url=';
									$file = base_url().$detail->cv; 
									$c = '&embedded=true';

									// echo $google.$file.$c;
									
									?>
									<iframe src="<?php echo $google.$file.$c ?>" style="width:300px; height:300px;" frameborder="0"></iframe>
						</div>
					</div>
				</center>
			</div>
		</div>
	</div>
	<?php } ?>	
</div>

<?php

$this->load->view('template_layout/footer');
// $this->load->view('template_layout/index');

 ?>