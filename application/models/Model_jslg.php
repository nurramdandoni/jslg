<?php 
defined('BASEPATH') or exit('no direct script allowed');

/**
 * 
 */
class Model_jslg extends CI_Model
{
	
	function __construct(){
		parent::__construct();
	}

	public function tampil_provinsi(){
		return $this->db->query("SELECT * FROM provinsi");
	}

	public function tampil_kota($id_provinsi){
		return $this->db->query("SELECT * FROM kabkot WHERE id_provinsi='$id_provinsi'");
	}

	public function tampil_kec($id_kota){
		return $this->db->query("SELECT * FROM kecamatan WHERE id_kabkot='$id_kota'");
	}

	public function insertdatajslg($data,$table){
		return $this->db->insert($table, $data); 
	}

	public function cek_biodata($nik){
		return $this->db->query("SELECT * FROM ms_biodata_peserta WHERE nik_peserta='$nik'"); 
	}
	public function cek_biodata_narsum($nik){
		return $this->db->query("SELECT * FROM ms_narasumber WHERE nik_narasumber='$nik'"); 
	}

	public function cek_user($username,$password){
		return $this->db->query("SELECT * FROM ms_user WHERE username='$username' AND password='$password'"); 
	}

	public function cek_user_avail($username){
		return $this->db->query("SELECT * FROM ms_user WHERE username='$username'"); 
	}

	public function update_pass($username,$new_pass){
		return $this->db->query("UPDATE ms_user SET password='$new_pass' WHERE username='$username'"); 
	}

	
}
?>