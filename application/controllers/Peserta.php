<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

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
		$data['submenu'] = 'Lates ';
		$this->load->view('peserta/dashboard',$data);
	}
	public function profile()
	{
		$data['menu'] = 'My Account';
		$data['submenu'] = 'Profile';
		$this->load->view('peserta/myaccount@profile',$data);
	}
	public function change_password()
	{
		$data['menu'] = 'My Account';
		$data['submenu'] = 'Change Password';
		$this->load->view('peserta/myaccount@change_password',$data);
	}
	public function confirm_payment()
	{
		$data['menu'] = 'My Account';
		$data['submenu'] = 'Confirm Payment';
		$this->load->view('peserta/myaccount@confirm_payment',$data);
	}
	public function barcode_base()
	{
		$data['menu'] = 'My Account';
		$data['submenu'] = 'Barcode Base';
		$this->load->view('peserta/myaccount@barcode_base',$data);
	}
	public function all_workshop()
	{
		$data['menu'] = 'Workshop & Pendidikan';
		$data['submenu'] = 'All Workshop & Pendidikan';
		$this->load->view('peserta/workshop@all_workshop',$data);
	}
	public function detail_workshop()
	{
		$data['menu'] = 'Workshop & Pendidikan';
		$data['submenu'] = 'Detail';
		$this->load->view('peserta/workshop@detail',$data);
	}
	public function mulai_essay()
	{
		$data['menu'] = 'Essay';
		$data['submenu'] = 'Soal';
		$this->load->view('peserta/essay@soal',$data);
	}
	public function hasil_essay()
	{
		$data['menu'] = 'Essay';
		$data['submenu'] = 'Hasil';
		$this->load->view('peserta/essay@hasil',$data);
	}

}
