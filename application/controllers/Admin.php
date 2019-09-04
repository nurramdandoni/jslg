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
		$data['menu'] = 'Dashboard';
		$data['submenu'] = '';
		$this->load->view('super_admin/dashboard',$data);
	}

	public function create_produk()
	{
		$data['menu'] = 'Management Produk ( Diklat )';
		$data['submenu'] = 'Create Produk';
		$this->load->view('super_admin/manajemen_produk@create_produk',$data);
	}	
	public function create_diklat()
	{
		$data['menu'] = 'Management Produk ( Diklat )';
		$data['submenu'] = 'Create Diklat';
		$this->load->view('super_admin/manajemen_produk@create_diklat',$data);
	}	
	public function all_diklat()
	{
		$data['menu'] = 'Management Produk ( Diklat )';
		$data['submenu'] = 'All Diklat';
		$this->load->view('super_admin/manajemen_produk@all_diklat',$data);
	}	
	public function blast_mailchimp()
	{
		$data['menu'] = 'Template';
		$data['submenu'] = 'Blast Mailchimp';
		$this->load->view('super_admin/template@blast_mailchimp',$data);
	}	
	public function create_sertificate()
	{
		$data['menu'] = 'Template';
		$data['submenu'] = 'Create Sertificate';
		$this->load->view('super_admin/template@create_sertificate',$data);
	}	
	public function printing_monitor()
	{
		$data['menu'] = 'Template';
		$data['submenu'] = 'Printing Monitor';
		$this->load->view('super_admin/template@printing_monitor',$data);
	}	
	public function create_date()
	{
		$data['menu'] = 'Tempat & Jadwal';
		$data['submenu'] = 'Create date';
		$this->load->view('super_admin/tempat@create_date',$data);
	}	
	public function all_list_jadwal()
	{
		$data['menu'] = 'Tempat & Jadwal';
		$data['submenu'] = 'All List';
		$this->load->view('super_admin/tempat@all_list',$data);
	}	
	public function create_silabus()
	{
		$data['menu'] = 'Silabus';
		$data['submenu'] = 'Create Silabus';
		$this->load->view('super_admin/silabus@create_silabus',$data);
	}	
	public function all_list_silabus()
	{
		$data['menu'] = 'Silabus';
		$data['submenu'] = 'All List';
		$this->load->view('super_admin/silabus@all_list',$data);
	}	
	public function create_batch()
	{
		$data['menu'] = 'Alumni';
		$data['submenu'] = 'Create Batch';
		$this->load->view('super_admin/alumni@create_batch',$data);
	}	
	public function all_list_alumni()
	{
		$data['menu'] = 'Alumni';
		$data['submenu'] = 'All Alumni';
		$this->load->view('super_admin/alumni@all_list',$data);
	}
	public function upload_dokumentasi()
	{
		$data['menu'] = 'Alumni';
		$data['submenu'] = 'Dokumentasi';
		$this->load->view('super_admin/alumni@upload_dokumentasi',$data);
	}
	public function in_house_training()
	{
		$data['menu'] = 'Alumni';
		$data['submenu'] = 'In House Training';
		$this->load->view('super_admin/alumni@in_house_training',$data);
	}
	public function all_list_narasumber()
	{
		$data['menu'] = 'Narasumber';
		$data['submenu'] = 'All Narasumber';
		$this->load->view('super_admin/narasumber@all_list',$data);
	}
	public function permohonan_narasumber()
	{
		$data['menu'] = 'Narasumber';
		$data['submenu'] = 'Permohonan Narasumber';
		$this->load->view('super_admin/narasumber@permohonan_narasumber',$data);
	}
	public function detail_narasumber()
	{
		$data['menu'] = 'Narasumber';
		$data['submenu'] = 'Detail Narasumber';
		$this->load->view('super_admin/narasumber@detail_narasumber',$data);
	}
	public function calon_peserta()
	{
		$data['menu'] = 'Peserta';
		$data['submenu'] = 'Calon Peserta';
		$this->load->view('super_admin/peserta@calon_peserta',$data);
	}
	public function peserta()
	{
		$data['menu'] = 'Peserta';
		$data['submenu'] = 'Peserta';
		$this->load->view('super_admin/peserta@peserta',$data);
	}
	public function detail_peserta()
	{
		$data['menu'] = 'Peserta';
		$data['submenu'] = 'Detail Peserta';
		$this->load->view('super_admin/peserta@detail_peserta',$data);
	}
	public function instansi()
	{
		$data['menu'] = 'Peserta';
		$data['submenu'] = 'Instansi';
		$this->load->view('super_admin/peserta@instansi',$data);
	}
	public function detail_instansi()
	{
		$data['menu'] = 'Peserta';
		$data['submenu'] = 'Detail Instansi';
		$this->load->view('super_admin/peserta@detail_instansi',$data);
	}
	public function report_peserta()
	{
		$data['menu'] = 'Report';
		$data['submenu'] = 'Report Peserta';
		$this->load->view('super_admin/report@peserta',$data);
	}
	public function report_alumni()
	{
		$data['menu'] = 'Report';
		$data['submenu'] = 'Report Alumni';
		$this->load->view('super_admin/report@alumni',$data);
	}
	public function report_vidcart()
	{
		$data['menu'] = 'Report';
		$data['submenu'] = 'Ekstens Vidcart';
		$this->load->view('super_admin/report@vidcart',$data);
	}
}
