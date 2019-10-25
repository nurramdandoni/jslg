<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('upload');
		$this->load->library('pdf');
		$this->load->model('Model_jslg');

	}
	public function index()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Selamat Datang, '.$data['nama_user'];
			$data['submenu'] = '';
			$this->load->view('super_admin/dashboard',$data);
		}else{
			redirect('login');
		}
	}

	public function create_produk()
	{	
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Management Produk ( Diklat )';
			$data['submenu'] = 'Create Produk';
			$data['kategori_produk'] = $this->Model_jslg->select_kategori();
			$this->load->view('super_admin/manajemen_produk@create_produk',$data);
		}else{
			redirect('login');
		}
	}	

	public function save_create_produk()
	{	
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			
			$nama_diklat = $this->input->post('NamaDiklat');
			$kategori = $this->input->post('KategoriDiklat');
			$diskon = $this->input->post('HargaDiskon');
			// if ($kategori == "0") {
			// 	echo "bener";
			// }else{
			// 	echo "salah";
			// }
			// die;
			if($kategori=="0"){
				
				echo "<script>alert('Kategori Belum Dipilih!');javascript:history.go(-1);</script>";
				
			}else{
				//upload photo
				$config['max_size']=2048;
				$config['allowed_types']="png|jpg|jpeg";
				$config['remove_spaces']=TRUE;
				$config['overwrite']=TRUE;
				$config['upload_path']='image';
				$config['encrypt_name']=TRUE;
				// inisialisasi konfigurasi upload
				$this->upload->initialize($config);
				//ambil data image
				$this->upload->do_upload('img');
				$data_image=$this->upload->data('file_name');
				$location=base_url().'image/';
				$pict=$location.$data_image;

				$data = array(
					'id_kategori_produk' => $kategori,
					'nama_produk' => $nama_diklat,
					'img_produk' => $pict,
					'harga_diskon' => $diskon
				);

				$datainsert = $this->Model_jslg->insertdatajslg($data,'ms_produk');

				if($datainsert){
					echo "<script>alert('Data Berhasil Disimpan!');window.location.href='".base_url('admin/create_produk')."';</script>";
				}else{
					echo "<script>alert('Data Gagal Disimpan!');window.location.href='".base_url('admin/create_produk')."';</script>";
				}
			}

		}else{
			redirect('login');
		}
	}	
	public function create_diklat()
	{	
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Management Produk ( Diklat )';
			$data['submenu'] = 'Create Diklat';
			$data['list_produk'] = $this->Model_jslg->select_produk();
			$data['list_narasumber'] = $this->Model_jslg->select_narasumber();
			$data['list_penyelenggara'] = $this->Model_jslg->select_penyelenggara();
			$data['list_silabus'] = $this->Model_jslg->select_silabus();
			$this->load->view('super_admin/manajemen_produk@create_diklat',$data);
		}else{
			redirect('login');
		}
	}	

	public function view_image_narasumber(){
		$id_narsum = $this->input->get('id');
		$im = $this->Model_jslg->select_narasumber_id($id_narsum);
		foreach($im->result() as $data_narsum){
			echo json_encode($data_narsum);
		}
	}

	public function save_create_diklat(){
		$id_produk = $this->input->post('id_produk');
		$id_narsum = $this->input->post('id_narsum');
		$tanggal = $this->input->post('tanggal');
		$id_penyelenggara = $this->input->post('id_penyelenggara');
		$id_silabus = $this->input->post('id_silabus');
		$jumlah_sesi = $this->input->post('jumlah_sesi');

		$biday = new DateTime($tanggal);
		$today = new DateTime();
		
		$diff = $today->diff($biday);

		$umur = $diff->y;

		if($id_produk==0){
			echo "<script>alert('Produk Belum dipilih!');javascript:history.go(-1);</script>";
		}elseif($id_narsum==0){
			echo "<script>alert('Narasumber Belum dipilih!');javascript:history.go(-1);</script>";
		}elseif($id_penyelenggara==0){
			echo "<script>alert('Penyelenggara Belum dipilih!');javascript:history.go(-1);</script>";
		}elseif($id_silabus==0){
			echo "<script>alert('Silabus Belum dipilih!');javascript:history.go(-1);</script>";
		}else{
			
			$data = array(
				'id_produk' => $id_produk,
				'id_narasumber' => $id_narsum,
				'tanggal_diklat' => $tanggal,
				'id_penyelenggara' => $id_penyelenggara,
				'id_silabus' => $id_silabus,
				'jumlah_sesi' => $jumlah_sesi
			);

			$datainsert = $this->Model_jslg->insertdatajslg($data,'ms_diklat');

			if($datainsert){
				echo "<script>alert('Data Berhasil Disimpan!');window.location.href='".base_url('admin/all_diklat')."';</script>";
			}else{
				echo "<script>alert('Data Gagal Disimpan!');window.location.href='".base_url('admin/create_diklat')."';</script>";
			}

		}
	}

	public function all_diklat()
	{	
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Management Produk ( Diklat )';
			$data['submenu'] = 'All Diklat';
			$data['list_diklat'] = $this->Model_jslg->select_diklat();
			$data['list_produk'] = $this->Model_jslg->select_produk();
			$data['list_narasumber'] = $this->Model_jslg->select_narasumber();
			$data['list_penyelenggara'] = $this->Model_jslg->select_penyelenggara();
			$data['list_silabus'] = $this->Model_jslg->select_silabus();
			$this->load->view('super_admin/manajemen_produk@all_diklat',$data);
		}else{
			redirect('login');
		}
	}	

	public function update_create_diklat(){
		$id_diklat = $this->input->post('id_diklat');
		$id_produk = $this->input->post('id_produk');
		$id_narsum = $this->input->post('id_narsum');
		$tanggal = $this->input->post('tanggal');
		$id_penyelenggara = $this->input->post('id_penyelenggara');
		$id_silabus = $this->input->post('id_silabus');
		$jumlah_sesi = $this->input->post('jumlah_sesi');

		$data = array(
			'id_produk' => $id_produk,
			'id_narasumber' => $id_narsum,
			'tanggal_diklat' => $tanggal,
			'id_penyelenggara' => $id_penyelenggara,
			'id_silabus' => $id_silabus,
			'jumlah_sesi' => $jumlah_sesi
		);

		$where = array(
			'id_diklat' => $id_diklat
		);

		$dataupdate = $this->Model_jslg->updatedatajslg('ms_diklat',$where,$data);

		if($dataupdate){
			echo "<script>alert('Data Berhasil Disimpan!');window.location.href='".base_url('admin/all_diklat')."';</script>";
		}else{
			echo "<script>alert('Data Gagal Disimpan!');window.location.href='".base_url('admin/all_diklat')."';</script>";
		}



	}


	public function delete_diklat(){
		$id = $this->uri->segment(3);

		$delete = $this->Model_jslg->delete_diklat($id);
		if($delete){
			echo "<script>alert('Data Berhasil Dihapus!');window.location.href='".base_url('admin/all_diklat')."';</script>";
		}else{
			echo "<script>alert('Data Gagal Dihapus!');window.location.href='".base_url('admin/all_diklat')."';</script>";
		}
	}

	public function blast_mailchimp()
	{	
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Template';
			$data['submenu'] = 'Blast Mailchimp';
			$data['list_user'] = $this->Model_jslg->select_user();
			$this->load->view('super_admin/template@blast_mailchimp',$data);
		}else{
			redirect('login');
		}
	}	

	public function send_email_blast(){

		$list_email = $this->input->post('list_email');
		$subject_email = $this->input->post('subject');
		$isi_email = $this->input->post('isi_email');
		$list = array();
		if($list_email==NULL){
			echo "<script>alert('Penerima Belum dipilih!');javascript:history.go(-1);</script>";
		}else{
			$jml = count($list_email);
			$email_config = Array(
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'schooljimly@gmail.com',
				'smtp_pass' => 'schooljimly@@@1',
				'mailtype'  => 'html',
				'newline'   => "\r\n",
				'charset'	=> 'utf-8',
			);
			for($i=0;$i<$jml;$i++){

				array_push($list,$list_email[$i]);
			}


				$email_message['login'] = 'Login Akun';
				$email_message['login_url'] = base_url('login');
				$email_message['title'] = $subject_email;
				$email_message['message'] = $isi_email;
				$this->load->library('email');
				$this->email->initialize($email_config);
				$this->email->from('schooljimly@gmail.com', 'Admin Jimly School');
				$this->email->to($list);
				$this->email->subject($subject_email);
				$this->email->message($this->load->view('email_info',$email_message, TRUE));
				if($this->email->send()){
					echo "<script>alert('Email berhasil dikirim!');window.location.href='".base_url('admin/blast_mailchimp')."';</script>";
				}else{
					show_error($this->email->print_debugger()); 
				}

		}
		

		

	}
	public function create_sertificate()
	{	
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Template';
			$data['submenu'] = 'Create Sertificate';
			$data['list_produk'] = $this->Model_jslg->select_produk();
			$this->load->view('super_admin/template@create_sertificate',$data);
		}else{
			redirect('login');
		}
	}	

	public function save_create_sertificate()
	{	

		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$img = $_FILES['img']['tmp_name'];
			$id_produk = $this->input->post('id_produk');

			if($id_produk=="0"){
				
				echo "0";
			}elseif($img==NULL){	
				echo "1";
			}else{
				$image_old = $this->Model_jslg->update_create_sertificate($id_produk);
				if($image_old->num_rows()>0){

					foreach($image_old->result() as $i_o){
						$old = $i_o->template_img;
					}
					$data = parse_url($old);
					$data_unlink =  $_SERVER['DOCUMENT_ROOT'].$data['path'];

					if(unlink($data_unlink)){
						// upload photo
						$config['max_size']=2048;
						$config['allowed_types']="png|jpg|jpeg";
						$config['remove_spaces']=TRUE;
						$config['overwrite']=TRUE;
						$config['upload_path']='temp_sertificate';
						$config['encrypt_name']=TRUE;
						// inisialisasi konfigurasi upload
						$this->upload->initialize($config);
						//ambil data image
						$this->upload->do_upload('img');
						$data_image=$this->upload->data('file_name');
						$location=base_url().'temp_sertificate/';
						$pict=$location.$data_image;
						
						$data = array(
							'template_img' => $pict
						);
						$where = array(
							'id_diklat_temp' => $id_produk
						);
						
						$dataupdate = $this->Model_jslg->updatedatajslg('ms_sertificate_temp',$where,$data);
												
						
						if($dataupdate){
							echo "2";
						}else{
							echo "3";
						}

					}else{
						echo "3";
					}

				}else{
					//upload photo
					$config['max_size']=2048;
					$config['allowed_types']="png|jpg|jpeg";
					$config['remove_spaces']=TRUE;
					$config['overwrite']=TRUE;
					$config['upload_path']='temp_sertificate';
					$config['encrypt_name']=TRUE;
					// inisialisasi konfigurasi upload
					$this->upload->initialize($config);
					//ambil data image
					$this->upload->do_upload('img');
					$data_image=$this->upload->data('file_name');
					$location=base_url().'temp_sertificate/';
					$pict=$location.$data_image;
					
					$data = array(
						'id_diklat_temp' => $id_produk,
						'template_img' => $pict
					);
					
					$datainsert = $this->Model_jslg->insertdatajslg($data,'ms_sertificate_temp');
					
					if($datainsert){
						echo "2";
					}else{
						echo "3";
					}
				}
			}

		}else{
			redirect('login');
		}
	}

	public function update_create_sertificate()
	{	
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$img = $_FILES['img']['tmp_name'];
			$id_produk = $this->input->post('id_produk');

			if($id_produk=="0"){
				
				echo "0";
			}elseif($img==NULL){	
				echo "1";
			}else{
				$image_old = $this->Model_jslg->update_create_sertificate($id_produk);
				if($image_old->num_rows()>0){
					
					foreach($image_old->result() as $i_o){
						$old = $i_o->template_img;
					}
					$data = parse_url($old);
					$data_unlink =  $_SERVER['DOCUMENT_ROOT'].$data['path'];

					if(unlink($data_unlink)){
						// echo $id_produk;
						// upload photo
						$config['max_size']=2048;
						$config['allowed_types']="png|jpg|jpeg";
						$config['remove_spaces']=TRUE;
						$config['overwrite']=TRUE;
						$config['upload_path']='temp_sertificate';
						$config['encrypt_name']=TRUE;
						// inisialisasi konfigurasi upload
						$this->upload->initialize($config);
						//ambil data image
						$this->upload->do_upload('img');
						$data_image=$this->upload->data('file_name');
						$location=base_url().'temp_sertificate/';
						$pict=$location.$data_image;

						$data = array(
							'template_img' => $pict
						);
						$where = array(
							'id_diklat_temp' => $id_produk
						);

						$dataupdate = $this->Model_jslg->updatedatajslg('ms_sertificate_temp',$where,$data);
						

						if($dataupdate){
							echo "2";
						}else{
							echo "3";
						}
					}else{
						echo "3";
					}
				}else{
					echo "4";
				}
				
			}

		}else{
			redirect('login');
		}
	}
	public function un(){
		// $file = $_SERVER['DOCUMENT_ROOT'].'jslg/temp_sertificate/fbcb9771838d07e55afb7dd1c087486e.png';
		// unlink('http://localhost/jslg/temp_sertificate/fbcb9771838d07e55afb7dd1c087486e.png');
		// var_dump(parse_url('http://localhost/jslg/temp_sertificate/fbcb9771838d07e55afb7dd1c087486e.png'));
		// $data = parse_url('http://localhost/jslg/temp_sertificate/fbcb9771838d07e55afb7dd1c087486e.png');
		// echo $data['path'];
	}
	public function printing_monitor()
	{	
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Template';
			$data['submenu'] = 'Printing Monitor';
			// list peserta yang muncul adalah yang status peserta 'Yes', bukan InTraining/No
			$data['list_peserta'] = $this->Model_jslg->select_peserta_lulus();
			$this->load->view('super_admin/template@printing_monitor',$data);
		}else{
			redirect('login');
		}
	}	

	
	public function cetak_sertificate($id){
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['list_peserta'] = $this->Model_jslg->select_peserta_lulus_id($id);
			$this->load->view('super_admin/template@cetak_sertificate',$data);
		}else{
			redirect('login');
		}
	}

	public function create_date()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Tempat & Jadwal';
			$data['submenu'] = 'Create date';
			$data['list_produk'] = $this->Model_jslg->select_produk();
			$this->load->view('super_admin/tempat@create_date',$data);
		}else{
			redirect('login');
		}
	}	

	public function save_create_date()
	{	
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			
			$id_produk = $this->input->post('id_produk');
			$nama_tempat = $this->input->post('nama_tempat');
			$tanggal = $this->input->post('tanggal');
			$kapasitas = $this->input->post('kapasitas');
			if($id_produk=="0"){
				
				echo "<script>alert('Produk Belum Dipilih!');javascript:history.go(-1);</script>";
				
			}else{
				$data = array(
					'id_diklat' => $id_produk,
					'nama_tempat' => $nama_tempat,
					'tanggal' => $tanggal,
					'kapasitas' => $kapasitas,
					'lokasi_maps' => ''
				);

				$datainsert = $this->Model_jslg->insertdatajslg($data,'ms_tempat');

				if($datainsert){
					echo "<script>alert('Data Berhasil Disimpan!');window.location.href='".base_url('admin/all_list_jadwal')."';</script>";
				}else{
					echo "<script>alert('Data Gagal Disimpan!');window.location.href='".base_url('admin/create_date')."';</script>";
				}
			}

		}else{
			redirect('login');
		}
	}

	public function update_create_date()
	{	
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			
			$id_tempat = $this->input->post('id_tempat');
			$id_diklat = $this->input->post('id_diklat');
			$nama_tempat = $this->input->post('nama_tempat');
			$tanggal = $this->input->post('tanggal');
			$kapasitas = $this->input->post('kapasitas');
			if($id_diklat=="0"){
				
				echo "<script>alert('Produk Belum Dipilih!');javascript:history.go(-1);</script>";
				
			}else{
				$data = array(
					'id_diklat' => $id_diklat,
					'nama_tempat' => $nama_tempat,
					'tanggal' => $tanggal,
					'kapasitas' => $kapasitas,
					'lokasi_maps' => ''
				);

				$where = array(
					'id_tempat' => $id_tempat
				);

				$dataupdate = $this->Model_jslg->updatedatajslg('ms_tempat',$where,$data);

				if($dataupdate){
					echo "<script>alert('Data Berhasil Disimpan!');window.location.href='".base_url('admin/all_list_jadwal')."';</script>";
				}else{
					echo "<script>alert('Data Gagal Disimpan!');window.location.href='".base_url('admin/all_list_jadwal')."';</script>";
				}
			}

		}else{
			redirect('login');
		}
	}

	
	public function delete_tempat(){
		$id = $this->uri->segment(3);

		$delete = $this->Model_jslg->delete_jadwal($id);
		if($delete){
			echo "<script>alert('Data Berhasil Dihapus!');window.location.href='".base_url('admin/all_list_jadwal')."';</script>";
		}else{
			echo "<script>alert('Data Gagal Dihapus!');window.location.href='".base_url('admin/all_list_jadwal')."';</script>";
		}
	}
	public function all_list_jadwal()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Tempat & Jadwal';
			$data['submenu'] = 'All List';
			$data['list_jadwal'] = $this->Model_jslg->select_jadwal();
			$data['list_produk'] = $this->Model_jslg->select_produk();
			$this->load->view('super_admin/tempat@all_list',$data);
		}else{
			redirect('login');
		}
	}	

	public function cek_id_diklat(){
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$id_diklat = $this->input->post('id');
			$data = $this->Model_jslg->select_diklat_id($id_diklat);
			foreach($data->result() as $dt){

			}
			echo json_encode($dt);
		}else{
			redirect('login');
		}
	}
	public function create_silabus()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Silabus';
			$data['submenu'] = 'Create Silabus';
			$data['list_narasumber'] = $this->Model_jslg->select_narasumber();
			$data['list_quiz'] = $this->Model_jslg->select_quiz();
			$this->load->view('super_admin/silabus@create_silabus',$data);
		}else{
			redirect('login');
		}
	}	

	public function save_create_silabus()
	{	
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			
			$id_narsum = $this->input->post('id_narsum');
			$nama_silabus = $this->input->post('nama_silabus');
			$file = $_FILES['file']['tmp_name'];
			$id_quiz = $this->input->post('id_quiz');
			if($id_narsum=="0"){
				echo "<script>alert('Narasumber Belum Dipilih!');javascript:history.go(-1);</script>";
			}elseif($id_quiz=="T"){
				
				echo "<script>alert('Quiz Belum Dipilih!');javascript:history.go(-1);</script>";
				
			}elseif($file==""){
				echo "<script>alert('File Belum Dipilih!');javascript:history.go(-1);</script>";
			}else{
				//upload photo
				$config['max_size']=2048;
				$config['allowed_types']="*";
				$config['remove_spaces']=TRUE;
				$config['overwrite']=TRUE;
				$config['upload_path']='file_silabus';
				$config['encrypt_name']=TRUE;
				// inisialisasi konfigurasi upload
				$this->upload->initialize($config);
				//ambil data image
				$this->upload->do_upload('file');
				$data_file=$this->upload->data('file_name');
				$location=base_url().'file_silabus/';
				$d_file=$location.$data_file;


				$data = array(
					'id_narasumber' => $id_narsum,
					'nama_silabus' => $nama_silabus,
					'file_materi_silabus' => $d_file,
					'id_quiz' => $id_quiz
				);

				$datainsert = $this->Model_jslg->insertdatajslg($data,'ms_silabus');

				if($datainsert){
					echo "<script>alert('Data Berhasil Disimpan!');window.location.href='".base_url('admin/all_list_silabus')."';</script>";
				}else{
					echo "<script>alert('Data Gagal Disimpan!');window.location.href='".base_url('admin/create_silabus')."';</script>";
				}
			}

		}else{
			redirect('login');
		}
	}	

	public function save_create_quiz()
	{	
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			
			$nama_quiz = $this->input->post('nama_quiz');
			$nilai = $this->input->post('n_lulus');
			$keterangan = $this->input->post('keterangan');
			$pertanyaan_quiz = $this->input->post('pertanyaan');
			$opsi_a = $this->input->post('opsia');
			$opsi_b = $this->input->post('opsib');
			$opsi_c = $this->input->post('opsic');
			$opsi_d = $this->input->post('opsid');
			$opsi_e = $this->input->post('opsie');
			$jawaban = $this->input->post('jawaban');

			$jml_soal = count($pertanyaan_quiz);
			// echo $jml_soal;
			// die();

			$data_quiz = array(
				'nama_quiz' => $nama_quiz ,
				'jumlah_soal' => $jml_soal,
				'nilai' => $nilai,
				'keterangan' => $keterangan
			);
			
			$insert_data_quiz = $this->db->insert('ms_quiz', $data_quiz); 
			$last_id = $this->db->insert_id();

			if($insert_data_quiz){
				for($i=0;$i<$jml_soal;$i++){
					$data_soal = array(
						'id_quiz' => $last_id,
						'pertanyaan' => $pertanyaan_quiz[$i],
						'opsi_a' => $opsi_a[$i],
						'opsi_b' => $opsi_b[$i],
						'opsi_c' => $opsi_c[$i],
						'opsi_d' => $opsi_d[$i],
						'opsi_e' => $opsi_e[$i],
						'jawaban' => $jawaban[$i]
					);
					$datainsert = $this->Model_jslg->insertdatajslg($data_soal,'ms_soal_quiz');
				}


				// if($datainsert){
					echo "<script>alert('Data Berhasil Disimpan!');window.location.href='".base_url('admin/create_silabus')."';</script>";
				// }else{
				// 	echo "<script>alert('Data Gagal Disimpan!');window.location.href='".base_url('admin/create_silabus')."';</script>";
				// }

			}else{

				echo "<script>alert('Data Gagal Disimpan!');window.location.href='".base_url('admin/create_silabus')."';</script>";

			}
			


		}else{
			redirect('login');
		}
	}

		
	public function delete_quiz(){
		$id = $this->uri->segment(3);

		$delete = $this->Model_jslg->delete_quiz($id);
		if($delete){
			echo "<script>alert('Data Berhasil Dihapus!');window.location.href='".base_url('admin/create_silabus')."';</script>";
		}else{
			echo "<script>alert('Data Gagal Dihapus!');window.location.href='".base_url('admin/create_silabus')."';</script>";
		}
	}
	public function all_list_silabus()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Silabus';
			$data['submenu'] = 'All List';
			$data['list_silabus'] = $this->Model_jslg->select_silabus();
			$data['list_narasumber'] = $this->Model_jslg->select_narasumber();
			$data['list_quiz'] = $this->Model_jslg->select_quiz();
			$this->load->view('super_admin/silabus@all_list',$data);
		}else{
			redirect('login');
		}
	}	

	public function update_create_silabus()
	{	
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			
			$id_silabus = $this->input->post('id_silabus');
			$id_narsum = $this->input->post('id_narsum');
			$nama_silabus = $this->input->post('nama_silabus');
			$file = $_FILES['file']['tmp_name'];
			$id_quiz = $this->input->post('id_quiz');
			if($id_narsum=="0"){
				echo "<script>alert('Narasumber Belum Dipilih!');javascript:history.go(-1);</script>";
			}elseif($id_quiz=="T"){
				
				echo "<script>alert('Quiz Belum Dipilih!');javascript:history.go(-1);</script>";
				
			}else{
				if($file==""){
					$data = array(
						'id_narasumber' => $id_narsum,
						'nama_silabus' => $nama_silabus,
						'id_quiz' => $id_quiz
					);

					$where = array(
						'id_silabus' => $id_silabus
					);
			
					$dataupdate = $this->Model_jslg->updatedatajslg('ms_silabus',$where,$data);

					if($dataupdate){
						echo "<script>alert('Data Berhasil Diubah!');window.location.href='".base_url('admin/all_list_silabus')."';</script>";
					}else{
						echo "<script>alert('Data Gagal Diubah!');window.location.href='".base_url('admin/create_silabus')."';</script>";
					}
				}else{
					//upload photo
					$config['max_size']=2048;
					$config['allowed_types']="*";
					$config['remove_spaces']=TRUE;
					$config['overwrite']=TRUE;
					$config['upload_path']='file_silabus';
					$config['encrypt_name']=TRUE;
					// inisialisasi konfigurasi upload
					$this->upload->initialize($config);
					//ambil data image
					$this->upload->do_upload('file');
					$data_file=$this->upload->data('file_name');
					$location=base_url().'file_silabus/';
					$d_file=$location.$data_file;

					

					$data = array(
						'id_narasumber' => $id_narsum,
						'nama_silabus' => $nama_silabus,
						'file_materi_silabus' => $d_file,
						'id_quiz' => $id_quiz
					);

					$where = array(
						'id_silabus' => $id_silabus
					);
			
					$dataupdate = $this->Model_jslg->updatedatajslg('ms_silabus',$where,$data);

					if($dataupdate){
						echo "<script>alert('Data Berhasil Diubah!');window.location.href='".base_url('admin/all_list_silabus')."';</script>";
					}else{
						echo "<script>alert('Data Gagal Diubah!');window.location.href='".base_url('admin/create_silabus')."';</script>";
					}
				}

			}

		}else{
			redirect('login');
		}
	}	

	public function delete_silabus(){
		$id = $this->uri->segment(3);

		$delete = $this->Model_jslg->delete_silabus($id);
		if($delete){
			echo "<script>alert('Data Berhasil Dihapus!');window.location.href='".base_url('admin/all_diklat')."';</script>";
		}else{
			echo "<script>alert('Data Gagal Dihapus!');window.location.href='".base_url('admin/all_diklat')."';</script>";
		}
	}


	public function create_batch()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Alumni';
			$data['submenu'] = 'Create Batch';
			$data['list_produk'] = $this->Model_jslg->select_produk();
			$this->load->view('super_admin/alumni@create_batch',$data);
		}else{
			redirect('login');
		}
	}	
	public function save_create_batch()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$nama_batch = $this->input->post('nama_batch');
			$id_produk = $this->input->post('id_produk');
			$deskripsi = $this->input->post('deskripsi');
			$csv_file = $_FILES['file']['tmp_name'];


				if($_FILES['file']['type'] == NULL){
	
					echo "<script>alert('File belum dipilih!');javascript:history.go(-1);</script>";
	
				}else{
	
					$extension = $_FILES['file']['type'];
		
					if($extension == 'application/vnd.ms-excel'){

						$data1 = array(
							'nama_batch' => $nama_batch,
							'id_diklat' => $id_produk,
							'deskripsi_batch' => $deskripsi
						);
			
						$insert_batch = $this->Model_jslg->insertdatajslg($data1,'ms_batch');
						$id_batch = $this->db->insert_id();


						$datacsv = fopen($csv_file,'r');
						fgetcsv($datacsv);
	
						while($c = fgetcsv($datacsv)){

							$cek = $this->Model_jslg->cek_biodata($c[0])->num_rows();
							if($cek > 0){
								$cek1 = $this->Model_jslg->cek_alumni($c[0],$id_produk)->num_rows();
								if($cek1 > 0){
;
										$al1 = $c[1];
										$al2 = $c[2];
										$al3 = $c[3];

										$idp = $id_produk;
										$nikp =  $c[0];

									// $this->Model_jslg->updatedatajslg('ms_alumni',$where,$data2);
									$this->db->query("UPDATE ms_alumni a join ms_batch b on a.id_batch=b.id_batch SET a.nama_alumni='$al1',a.angkatan_alumni='$al2',a.instansi_alumni='$al3' WHERE a.nik_peserta='$nikp' and b.id_diklat ='$idp'");

								}else{

									$data3 = array(
										'id_batch' => $id_batch,
										'nik_peserta' => $c[0],
										'nama_alumni' => $c[1],
										'angkatan_alumni' => $c[2],
										'instansi_alumni' => $c[3],
									);
		
									$this->Model_jslg->insertdatajslg($data3,'ms_alumni');
								}
							}
						}

						echo "<script>alert('Data Berhasil Disimpan!');window.location.href='".base_url('admin/all_list_alumni')."';</script>";
						
					}else{
						echo "<script>alert('Maaf Format tidah didukung, silahkan gunakan format *.csv');javascript:history.go(-1);</script>";
					}
	
				}


		}else{
			redirect('login');
		}
	}	
	public function all_list_alumni()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Alumni';
			$data['submenu'] = 'All Alumni';
			$this->load->view('super_admin/alumni@all_list',$data);
		}else{
			redirect('login');
		}
	}
	public function upload_dokumentasi()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Alumni';
			$data['submenu'] = 'Dokumentasi';
			$this->load->view('super_admin/alumni@upload_dokumentasi',$data);
		}else{
			redirect('login');
		}
	}
	public function in_house_training()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Alumni';
			$data['submenu'] = 'In House Training';
			$this->load->view('super_admin/alumni@in_house_training',$data);
		}else{
			redirect('login');
		}
	}
	public function all_list_narasumber()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Narasumber';
			$data['submenu'] = 'All Narasumber';
			$this->load->view('super_admin/narasumber@all_list',$data);
		}else{
			redirect('login');
		}
	}
	public function permohonan_narasumber()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Narasumber';
			$data['submenu'] = 'Permohonan Narasumber';
			$this->load->view('super_admin/narasumber@permohonan_narasumber',$data);
		}else{
			redirect('login');
		}
	}
	public function detail_narasumber()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Narasumber';
			$data['submenu'] = 'Detail Narasumber';
			$this->load->view('super_admin/narasumber@detail_narasumber',$data);
		}else{
			redirect('login');
		}
	}
	public function calon_peserta()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Peserta';
			$data['submenu'] = 'Calon Peserta';
			$this->load->view('super_admin/peserta@calon_peserta',$data);
		}else{
			redirect('login');
		}
	}
	public function peserta()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Peserta';
			$data['submenu'] = 'Peserta';
			$this->load->view('super_admin/peserta@peserta',$data);
		}else{
			redirect('login');
		}
	}
	public function detail_peserta()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Peserta';
			$data['submenu'] = 'Detail Peserta';
			$this->load->view('super_admin/peserta@detail_peserta',$data);
		}else{
			redirect('login');
		}
	}
	public function instansi()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Peserta';
			$data['submenu'] = 'Instansi';
			$this->load->view('super_admin/peserta@instansi',$data);
		}else{
			redirect('login');
		}
	}
	public function detail_instansi()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Peserta';
			$data['submenu'] = 'Detail Instansi';
			$this->load->view('super_admin/peserta@detail_instansi',$data);
		}else{
			redirect('login');
		}
	}
	public function report_peserta()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Report';
			$data['submenu'] = 'Report Peserta';
			$this->load->view('super_admin/report@peserta',$data);
		}else{
			redirect('login');
		}
	}
	public function report_alumni()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Report';
			$data['submenu'] = 'Report Alumni';
			$this->load->view('super_admin/report@alumni',$data);
		}else{
			redirect('login');
		}
	}
	public function report_vidcart()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Report';
			$data['submenu'] = 'Ekstens Vidcart';
			$this->load->view('super_admin/report@vidcart',$data);
		}else{
			redirect('login');
		}
	}
	public function report_penilaian_narasumber()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Report';
			$data['submenu'] = 'Penilaian Narasumber';
			$this->load->view('super_admin/report@penilaian_narasumber',$data);
		}else{
			redirect('login');
		}
	}
	public function report_pengeluaran()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Report';
			$data['submenu'] = 'Pengeluaran';
			$this->load->view('super_admin/report@pengeluaran',$data);
		}else{
			redirect('login');
		}
	}
}
