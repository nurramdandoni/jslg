<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		// $data['menu'] = 'Dashboard';
		// $data['submenu'] = '';
		$this->load->view('login');
	}

	public function register_peserta()
	{
		$data['menu'] = 'Peserta';
		$data['submenu'] = 'Register';
		$this->load->view('register@peserta',$data);
	}

	public function register_narasumber()
	{
		$data['menu'] = 'Narasumber';
		$data['submenu'] = 'Register';
		$this->load->view('register@narasumber',$data);
	}

	public function process_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($username=='admin' && $password=='jslg2019'){
			redirect('admin');
		}else if($username=='peserta' && $password=='jslg2019'){
			redirect('peserta');
		}else if($username=='narasumber' && $password=='jslg2019'){
			redirect('narasumber');
		}else{
			echo "<script>alert('Username atau Password Salah!');javascript:history.go(-1);</script>";
		}
	}

	
}
