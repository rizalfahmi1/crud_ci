<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_mahasiswa extends CI_Model {

	public function get_data(){
		return $this->db->get('data_mhs');
	}

}
?>