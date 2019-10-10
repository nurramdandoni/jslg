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
			'nik' => $nik,
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
					'smtp_pass' => 'schooljimly@@@1',
					'mailtype'  => 'html',
					'starttls'  => true,
					'newline'   => "\r\n",
					'charset'	=> 'utf-8',
				);
				$email_message['login'] = 'Login Akun';
				$email_message['login_url'] = '<?php echo base_url()?>login';
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
					echo "<script>alert('Registrasi Berhasil, silahkan cek Email!');window.location.href='".base_url()."login'</script>";
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
		$user_avail = $this->Model_jslg->cek_user_avail($username);
		$user = $this->Model_jslg->cek_user($username,sha1($password));

		foreach($user->result() as $data_user){
			$level = $data_user->level;
			$username_db = $data_user->username;
			$nik_db = $data_user->nik;
		}

		if($user_avail->num_rows()>0){
			if($user->num_rows()>0){
				$name = '';
				$status_log = '';
				echo "<script>alert('Anda Berhasil Login!');</script>";

				if($level=='super_admin'){
					// login sebagai admin
					$name = 'Super Admin';
				}elseif($level=='narasumber'){
					// login sebagai narasumber
					$ms_biodata_narasumber = $this->Model_jslg->cek_biodata_narsum($nik_db);
					foreach($ms_biodata_narasumber->result() as $bio_nara){
						$name = $bio_nara->nama_narasumber;
					}
				}else{
					// login sebagai peserta
					$ms_biodata_peserta = $this->Model_jslg->cek_biodata($nik_db);
					foreach($ms_biodata_peserta->result() as $bio){
						$name = $bio->nama_peserta;
					}
				}
				
				$this->session->set_userdata('u_level',$level);
				$this->session->set_userdata('u_username',$username_db);
				$this->session->set_userdata('u_name',$name);
				$this->session->set_userdata('u_status_log','ok');

				if($level=='super_admin'){
					redirect('admin');
				}elseif($level=='narasumber'){
					redirect('narasumber');
				}else{
					redirect('peserta');
				}


			}else{
				echo "<script>alert('Username/ Password Salah, silahkan login kembali!');javascript:history.go(-1);</script>";
			}
		}else{
			echo "<script>alert('User tidak ditemukan, silahkan lakukan Registrasi!');javascript:history.go(-1);</script>";
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

	public function logout(){

		$this->session->sess_destroy();

		redirect(base_url().'Login');
	}
	public function forgot_password(){

		$email_forgot = $this->input->post('email_forgot');
		$new_pass = $this->randomPassword();

		$user_avail = $this->Model_jslg->cek_user_avail($email_forgot);
		if($user_avail->num_rows()>0){
			
			$update_pass = $this->Model_jslg->update_pass($email_forgot,sha1($new_pass));
			if($update_pass){

				foreach($user_avail->result() as $data_user){
					$level = $data_user->level;
					$username_db = $data_user->username;
					$nik_db = $data_user->nik;
				}
				$ms_biodata_peserta = $this->Model_jslg->cek_biodata($nik_db);
					foreach($ms_biodata_peserta->result() as $bio){
						$name = $bio->nama_peserta;
					}
				$email_config = Array(
					'protocol'  => 'smtp',
					'smtp_host' => 'ssl://smtp.googlemail.com',
					'smtp_port' => 465,
					'smtp_user' => 'schooljimly@gmail.com',
					'smtp_pass' => 'schooljimly@@@1',
					'mailtype'  => 'html',
					'starttls'  => true,
					'newline'   => "\r\n",
					'charset'	=> 'utf-8',
				);
				$email_message['login'] = 'Login Akun';
				$email_message['login_url'] = '<?php echo base_url()?>login';
				$email_message['title'] = 'Perubahan Password Akun Jimly School';
				$email_message['message'] = 'Selamat '.$name.' anda berhasil melakukan request perubahan password, berikut adalah detail password baru akun anda :';
				$email_message['username'] = $email_forgot;
				$email_message['password'] = $new_pass;
				$this->load->library('email');
				$this->email->initialize($email_config);
				$this->email->from('schooljimly@gmail.com', 'Admin Jimly School');
				$this->email->to($email_forgot);
	
				$this->email->subject('Request Password!');
				$this->email->message($this->load->view('email_registrasi',$email_message, TRUE));

				if (!$this->email->send()) {  
					show_error($this->email->print_debugger());   
				}else{  
					echo "<script>alert('Perubahan Password telah dikirim ke ".$email_forgot." Silahkan cek email!');window.location.href='".base_url()."login'</script>";
				} 
				
			}else{
				echo "<script>alert('Perubahan password Gagal');window.location.href='".base_url()."login'</script>";
			}
			
		}else{
			echo "<script>alert('Email Tidak Terdaftar, silahkan lakukan Registrasi!');window.location.href='".base_url()."login'</script>";

		}
		
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
