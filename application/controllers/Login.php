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
			'nik_peserta' => $nama,
			'nama_peserta' => $nik,
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
		$datainsert = $this->Model_jslg->insertdatajslg($data,'ms_biodata_peserta');
		if($datainsert){

		$email_config = Array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'schooljimly@gmail.com',
            'smtp_pass' => 'schooljimly@@@',
            'mailtype'  => 'html',
            'starttls'  => true,
			'newline'   => "\r\n",
			'charset'	=> 'utf-8'
        );
		$this->load->library('email');
		$this->email->initialize($email_config);
		$this->email->from('schooljimly@gmail.com', 'Admin Jimly School');
		$this->email->to($email);

		$this->email->subject('Registrasi!');
		$this->email->message('Testing the email class.');

		if (!$this->email->send()) {  
			show_error($this->email->print_debugger());   
		   }else{  
			echo "<script>alert('Registrasi Berhasil, silahkan cek Email!');javascript:history.go(-1);</script>";
		   } 
			
		}else{
			echo "<script>alert('Registrasi Gagal');javascript:history.go(-1);</script>";
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
