<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Narasumber extends CI_Controller {

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
		$this->load->view('narasumber/dashboard',$data);
	}
	public function profile()
	{
		$data['menu'] = 'My Account';
		$data['submenu'] = 'Profile';
		$this->load->view('narasumber/myaccount@profile',$data);
	}
	public function change_password()
	{
		$data['menu'] = 'My Account';
		$data['submenu'] = 'Change Password';
		$this->load->view('narasumber/myaccount@change_password',$data);
	}
	public function notifikasi_workshop()
	{
		$data['menu'] = 'Pengajaran';
		$data['submenu'] = 'Notifikasi Workshop';
		$this->load->view('narasumber/pengajaran@notifikasi_workshop',$data);
	}
	public function all_silabus_workshop()
	{
		$data['menu'] = 'pengajaran';
		$data['submenu'] = 'All Pengajaran';
		$this->load->view('narasumber/pengajaran@all_silabus_workshop',$data);
	}
	public function detail_silabus_workshop()
	{
		$data['menu'] = 'pengajaran';
		$data['submenu'] = 'Detail Silabus Workshop';
		$this->load->view('narasumber/pengajaran@detail_silabus_workshop',$data);
	}

}
