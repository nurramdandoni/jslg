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

	
}
?>