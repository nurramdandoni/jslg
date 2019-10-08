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
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='peserta'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Selamat Datang, '.$data['nama_user'];
			$data['submenu'] = '';
			$this->load->view('peserta/dashboard',$data);
		}else{
			redirect('login');
		}
	}
	public function profile()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='peserta'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'My Account';
			$data['submenu'] = 'Profile';
			$this->load->view('peserta/myaccount@profile',$data);
		}else{
			redirect('login');
		}
	}
	public function change_password()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='peserta'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'My Account';
			$data['submenu'] = 'Change Password';
			$this->load->view('peserta/myaccount@change_password',$data);
		}else{
			redirect('login');
		}
	}
	public function confirm_payment()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='peserta'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'My Account';
			$data['submenu'] = 'Confirm Payment';
			$this->load->view('peserta/myaccount@confirm_payment',$data);
		}else{
			redirect('login');
		}
	}
	public function barcode_base()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='peserta'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'My Account';
			$data['submenu'] = 'Barcode Base';
			$this->load->view('peserta/myaccount@barcode_base',$data);
		}else{
			redirect('login');
		}
	}
	public function all_workshop()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='peserta'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Workshop & Pendidikan';
			$data['submenu'] = 'All Workshop & Pendidikan';
			$this->load->view('peserta/workshop@all_workshop',$data);
		}else{
			redirect('login');
		}
	}
	public function detail_workshop()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='peserta'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Workshop & Pendidikan';
			$data['submenu'] = 'Detail';
			$this->load->view('peserta/workshop@detail',$data);
		}else{
			redirect('login');
		}
	}
	public function mulai_essay()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='peserta'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Essay';
			$data['submenu'] = 'Soal';
			$this->load->view('peserta/essay@soal',$data);
		}else{
			redirect('login');
		}
	}
	public function hasil_essay()
	{
		if($this->session->userdata('u_status_log')=='ok' AND $this->session->userdata('u_level')=='peserta'){
			$data['nama_user'] = $this->session->userdata('u_name');
			$data['menu'] = 'Essay';
			$data['submenu'] = 'Hasil';
			$this->load->view('peserta/essay@hasil',$data);
		}else{
			redirect('login');
		}
	}

}
