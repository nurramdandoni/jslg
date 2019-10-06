<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
			$this->load->view('super_admin/manajemen_produk@create_produk',$data);
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
