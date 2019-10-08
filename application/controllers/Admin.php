<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('upload');
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
				$config['upload_path']=FCPATH.'image';
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
			$this->load->view('super_admin/manajemen_produk@create_diklat',$data);
		}else{
			redirect('login');
		}
	}	
	public function all_diklat()
	{	
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Management Produk ( Diklat )';
			$data['submenu'] = 'All Diklat';
			$this->load->view('super_admin/manajemen_produk@all_diklat',$data);
		}else{
			redirect('login');
		}
	}	
	public function blast_mailchimp()
	{	
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Template';
			$data['submenu'] = 'Blast Mailchimp';
			$this->load->view('super_admin/template@blast_mailchimp',$data);
		}else{
			redirect('login');
		}
	}	
	public function create_sertificate()
	{	
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Template';
			$data['submenu'] = 'Create Sertificate';
			$this->load->view('super_admin/template@create_sertificate',$data);
		}else{
			redirect('login');
		}
	}	
	public function printing_monitor()
	{	
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Template';
			$data['submenu'] = 'Printing Monitor';
			$this->load->view('super_admin/template@printing_monitor',$data);
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
			$this->load->view('super_admin/tempat@create_date',$data);
		}else{
			redirect('login');
		}
	}	
	public function all_list_jadwal()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Tempat & Jadwal';
			$data['submenu'] = 'All List';
			$this->load->view('super_admin/tempat@all_list',$data);
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
			$this->load->view('super_admin/silabus@create_silabus',$data);
		}else{
			redirect('login');
		}
	}	
	public function all_list_silabus()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Silabus';
			$data['submenu'] = 'All List';
			$this->load->view('super_admin/silabus@all_list',$data);
		}else{
			redirect('login');
		}
	}	
	public function create_batch()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='super_admin'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Alumni';
			$data['submenu'] = 'Create Batch';
			$this->load->view('super_admin/alumni@create_batch',$data);
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
