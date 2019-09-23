<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('session');

		$this->load->model('Model_jslg');

	}

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
		$data['provinsi'] = $this->Model_jslg->tampil_provinsi();
		$this->load->view('register@peserta',$data);
	}

	public function proses_register_peserta()
	{
		
	}

	public function ambilkota(){

		$id_prov = $this->input->get('provinsi');
		$data['data_kota'] = $this->Model_jslg->tampil_kota($id_prov);

		foreach ($data['data_kota']->result_array() as $k) {
			echo "<option value=".$k['id_kabkot'].">".$k['nama_kabkot']."</option>";
		}
	}

	public function ambilkecamatan(){

		$id_kota = $this->input->get('kota');
		$data['data_kec'] = $this->Model_jslg->tampil_kec($id_kota);

		foreach ($data['data_kec']->result_array() as $k) {
			echo "<option value=".$k['id_kecamatan'].">".$k['nama_kecamatan']."</option>";
		}
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

		// if($username=='admin' && $password=='jslg2019'){
		// 	redirect('admin');
		// }else if($username=='peserta' && $password=='jslg2019'){
		// 	redirect('peserta');
		// }else if($username=='narasumber' && $password=='jslg2019'){
		// 	redirect('narasumber');
		// }else{
		// 	echo "<script>alert('Username atau Password Salah!');javascript:history.go(-1);</script>";
		// }

	}

	
}
