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
}
