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
		return $this->db->query("SELECT * FROM ms_user a left join ms_biodata_peserta b on a.nik=b.nik_peserta WHERE a.username='$username' AND a.password='$password'"); 
	}

	public function cek_user_avail($username){
		return $this->db->query("SELECT * FROM ms_user WHERE username='$username'"); 
	}

	public function update_pass($username,$new_pass){
		return $this->db->query("UPDATE ms_user SET password='$new_pass' WHERE username='$username'"); 
	}

	public function select_kategori(){
		return $this->db->query("SELECT * FROM ms_kategori_produk"); 
	}

	public function select_produk(){
		return $this->db->query("SELECT * FROM ms_produk a join ms_kategori_produk b on a.id_kategori_produk=b.id_kategori_produk"); 
	}

	public function select_narasumber(){
		return $this->db->query("SELECT * FROM ms_narasumber"); 
	}

	public function select_narasumber_id($id_narsum){
		return $this->db->query("SELECT * FROM ms_narasumber WHERE id_narasumber='$id_narsum'"); 
	}

	public function select_penyelenggara(){
		return $this->db->query("SELECT * FROM ms_penyelenggara"); 
	}

	public function select_silabus(){
		return $this->db->query("SELECT * FROM ms_silabus a join ms_narasumber b on a.id_narasumber=b.id_narasumber"); 
	}

	public function select_diklat(){
		return $this->db->query("SELECT * FROM ms_diklat a join ms_produk b on a.id_produk=b.id_produk join ms_penyelenggara c on a.id_penyelenggara=c.id_penyelenggara join ms_narasumber d on a.id_narasumber=d.id_narasumber join ms_kategori_produk e on b.id_kategori_produk=e.id_kategori_produk join ms_silabus f on a.id_silabus=f.id_silabus"); 
	}

	public function select_user(){
		return $this->db->query("SELECT * FROM ms_user a join ms_biodata_peserta b on a.nik=b.nik_peserta"); 
	}

	public function select_user_email($email_send){
		return $this->db->query("SELECT * FROM ms_user a join ms_biodata_peserta b on a.nik=b.nik_peserta WHERE b.email_peserta='$email_send'"); 
	}

	public function updatedatajslg($table,$where,$data){
		return $this->db->where($where)->update($table,$data);
	}

	public function delete_diklat($id){
		return $this->db->query("DELETE FROM ms_diklat WHERE id_diklat='$id'");
	}

	
}
?>