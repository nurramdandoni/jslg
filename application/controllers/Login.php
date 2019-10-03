<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$nama = $this->input->post('nama_lengkap');
		$nik = $this->input->post('nik');
		$tmpl = $this->input->post('tempat_lahir');
		$tgl = $this->input->post('tanggal_lahir');
		$alamat = $this->input->post('alamat');
		$prov = $this->input->post('provinsi');
		$kab = $this->input->post('kabkot');
		$kec = $this->input->post('kec');
		$pekerjaan = $this->input->post('pekerjaan');
		$pendidikan = $this->input->post('pendidikan');
		$wa = $this->input->post('wa');
		$nkantor = $this->input->post('nama_kantor');
		$email = $this->input->post('email');
		$jeniskelamin = $this->input->post('jenis_kelamin');
		$password = $this->randomPassword();

		//upload photo
		$config['max_size']=2048;
		$config['allowed_types']="png|jpg|jpeg";
		$config['remove_spaces']=TRUE;
		$config['overwrite']=TRUE;
		$config['upload_path']=FCPATH.'image';
		// inisialisasi konfigurasi upload
		$this->upload->initialize($config);
		//ambil data image
		$this->upload->do_upload('foto');
		$data_image=$this->upload->data('file_name');
		$location=base_url().'image/';
		$pict=$location.$data_image;

		$data = array(
			'nik_peserta' => $nik,
			'nama_peserta' => $nama,
			'tempat_lahir_peserta' => $tmpl,
			'tanggal_lahir_peserta' => $tgl,
			'jenis_kelamin_peserta' => $alamat,
			'alamat_peserta' => $alamat,
			'id_provinsi' => $prov,
			'id_kabkot' => $kab,
			'id_kec' => $kec,
			'email_peserta' => $email,
			'nama_kantor' => $nkantor,
			'jabatan_peserta' => $pekerjaan,
			'pendidikan_peserta' => $pendidikan,
			'telp_peserta' => $wa,
			'foto' => $pict
		);

		$data_user = array(
			'username' => $email,
			'password' => sha1($password),
			'level' => 'peserta'
		);
		$cek_biodata = $this->Model_jslg->cek_biodata($nik);
		if($cek_biodata->num_rows()>0){
			echo "<script>alert('Anda Sudah Terdaftar, Silahkan Login!');window.location.href='".base_url('login')."';</script>";
			
		}else{
			$datainsert = $this->Model_jslg->insertdatajslg($data,'ms_biodata_peserta');
			$datainsert_user = $this->Model_jslg->insertdatajslg($data_user,'ms_user');
			if($datainsert && $datainsert_user){
	
				$email_config = Array(
					'protocol'  => 'smtp',
					'smtp_host' => 'ssl://smtp.googlemail.com',
					'smtp_port' => 465,
					'smtp_user' => 'schooljimly@gmail.com',
					'smtp_pass' => 'schooljimly@@@',
					'mailtype'  => 'html',
					'starttls'  => true,
					'newline'   => "\r\n",
					'charset'	=> 'utf-8',
				);
				$email_message['login'] = 'Login Akun';
				$email_message['login_url'] = '192.168.1.163/jslg/login';
				$email_message['title'] = 'Registrasi Akun Jimly School';
				$email_message['message'] = 'Selamat '.$nama.' anda berhasil melakukan registrasi, berikut adalah detail akun anda :';
				$email_message['username'] = $email;
				$email_message['password'] = $password;
				$this->load->library('email');
				$this->email->initialize($email_config);
				$this->email->from('schooljimly@gmail.com', 'Admin Jimly School');
				$this->email->to($email);
	
				$this->email->subject('Registrasi!');
				$this->email->message($this->load->view('email_registrasi',$email_message, TRUE));
	
				if (!$this->email->send()) {  
					show_error($this->email->print_debugger());   
				}else{  
					echo "<script>alert('Registrasi Berhasil, silahkan cek Email!');</script>";
					redirect('login');
				} 
				
			}else{
				echo "<script>alert('Registrasi Gagal');javascript:history.go(-1);</script>";
			}
		}


		
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
		$user = $this->Model_jslg->cek_user($username,sha1($password));
		if($user->num_rows()>0){
			echo "<script>alert('User ditemukan!');</script>";
			foreach($user->result() as $data_user){
				$level = $data_user->level;
			}

			echo "Anda Login Sebagai : ".$level;
		}else{
			echo "<script>alert('User tidak ditemukan!');</script>";
		}

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

	function randomPassword() {
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //turn the array into a string
	}

	
}
