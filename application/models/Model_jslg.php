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

	public function cek_alumni($nik,$id_diklat){
		return $this->db->query("SELECT * FROM ms_alumni a join ms_batch b on a.id_batch=b.id_batch WHERE a.nik_peserta='$nik' and b.id_diklat ='$id_diklat'"); 
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

	public function select_batch(){
		return $this->db->query("SELECT * FROM ms_batch b join ms_diklat c on b.id_diklat=c.id_diklat join ms_produk d on c.id_produk=d.id_produk"); 
	}

	public function select_alumni(){
		return $this->db->query("SELECT * FROM ms_alumni a join ms_batch b on a.id_batch=b.id_batch join ms_diklat c on b.id_diklat=c.id_diklat join ms_produk d on c.id_produk=d.id_produk"); 
	}

	public function select_produk(){
		return $this->db->query("SELECT * FROM ms_produk a join ms_kategori_produk b on a.id_kategori_produk=b.id_kategori_produk"); 
	}

	public function select_narasumber(){
		return $this->db->query("SELECT * FROM ms_narasumber"); 
	}

	public function select_narsum_email($email){
		return $this->db->query("SELECT * FROM ms_narasumber WHERE email_narasumber='$email'"); 
	}

	public function select_docs_send($id){
		return $this->db->query("SELECT * FROM ms_permohonan_narasumber WHERE id_permohonan_ns='$id'"); 
	}

	public function select_narasumber_by_stat($stat){
		return $this->db->query("SELECT * FROM ms_narasumber WHERE status_verifikasi_narasumber='$stat'"); 
	}

	public function select_narasumber_id($id_narsum){
		return $this->db->query("SELECT * FROM ms_narasumber WHERE id_narasumber='$id_narsum'"); 
	}

	public function select_quiz(){
		return $this->db->query("SELECT * FROM ms_quiz "); 
	}

	public function select_penyelenggara(){
		return $this->db->query("SELECT * FROM ms_penyelenggara"); 
	}

	public function select_silabus(){
		return $this->db->query("SELECT * FROM ms_silabus a join ms_narasumber b on a.id_narasumber=b.id_narasumber join ms_quiz c on a.id_quiz=c.id_quiz"); 
	}

	public function select_silabus_narasumber_id($id){
		return $this->db->query("SELECT * FROM ms_silabus WHERE id_narasumber='$id'"); 
	}

	public function select_diklat(){
		return $this->db->query("SELECT * FROM ms_diklat a join ms_produk b on a.id_produk=b.id_produk join ms_penyelenggara c on a.id_penyelenggara=c.id_penyelenggara join ms_narasumber d on a.id_narasumber=d.id_narasumber join ms_kategori_produk e on b.id_kategori_produk=e.id_kategori_produk join ms_silabus f on a.id_silabus=f.id_silabus order by a.tanggal_diklat ASC"); 
	}

	public function select_diklat_id($id){
		return $this->db->query("SELECT * FROM ms_diklat a join ms_produk b on a.id_produk=b.id_produk join ms_penyelenggara c on a.id_penyelenggara=c.id_penyelenggara join ms_narasumber d on a.id_narasumber=d.id_narasumber join ms_kategori_produk e on b.id_kategori_produk=e.id_kategori_produk join ms_silabus f on a.id_silabus=f.id_silabus WHERE a.id_diklat='$id' order by a.tanggal_diklat ASC"); 
	}

	public function select_user(){
		return $this->db->query("SELECT * FROM ms_user a join ms_biodata_peserta b on a.nik=b.nik_peserta"); 
	}

	public function select_jadwal(){
		return $this->db->query("SELECT * FROM ms_tempat a join ms_diklat b on a.id_diklat=b.id_diklat join ms_produk c on b.id_produk=c.id_produk join ms_kategori_produk d on c.id_kategori_produk=d.id_kategori_produk order by a.tanggal ASC"); 
	}

	public function select_peserta(){
		return $this->db->query("SELECT * FROM ms_peserta a join ms_diklat b on a.id_diklat=b.id_diklat join ms_user c on a.id_user=c.id_user JOIN ms_biodata_peserta d on a.id_biodata_peserta=d.id_biodata join ms_sertificate e on a.id_peserta=e.id_peserta join ms_sertificate_temp f on e.id_sertificate_temp=f.id_sertificate_temp join ms_produk g on b.id_produk=g.id_produk"); 
	}

	public function select_peserta_lulus(){
		return $this->db->query("SELECT * FROM ms_peserta a join ms_diklat b on a.id_diklat=b.id_diklat join ms_user c on a.id_user=c.id_user JOIN ms_biodata_peserta d on a.id_biodata_peserta=d.id_biodata join ms_sertificate e on a.id_peserta=e.id_peserta join ms_sertificate_temp f on e.id_sertificate_temp=f.id_sertificate_temp join ms_produk g on b.id_produk=g.id_produk WHERE a.status_alumni_peserta='Yes'"); 
	}

	public function select_peserta_lulus_id($id){
		return $this->db->query("SELECT * FROM ms_peserta a join ms_diklat b on a.id_diklat=b.id_diklat join ms_user c on a.id_user=c.id_user JOIN ms_biodata_peserta d on a.id_biodata_peserta=d.id_biodata join ms_sertificate e on a.id_peserta=e.id_peserta join ms_sertificate_temp f on e.id_sertificate_temp=f.id_sertificate_temp join ms_produk g on b.id_produk=g.id_produk WHERE a.status_alumni_peserta='Yes' and a.id_peserta='$id'"); 
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

	public function delete_jadwal($id){
		return $this->db->query("DELETE FROM ms_tempat WHERE id_tempat='$id'");
	}

	public function delete_quiz($id){
		return $this->db->query("DELETE FROM ms_quiz WHERE id_quiz='$id'");
	}

	// public function delete_silabus($id){
	// 	return $this->db->query("DELETE FROM ms_silabus WHERE id_silabus='$id'");
	// }

	public function update_create_sertificate($id){
		return $this->db->query("SELECT * FROM ms_sertificate_temp WHERE id_diklat_temp='$id'");
	}

	
}
?>