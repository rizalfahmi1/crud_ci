<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct(){
       
        parent::__construct();
        $this->load->model('Model_mahasiswa');
    }



	// public function tambah(){
	// 	$data['judul']		= 'Tambah Data';
	// 	$this->load->view('tambah_data', $data);
	// }

	// public function tambah_data(){
	// 	$data 				= array(
	// 		'nim'			=>$this->input->post('nim'),
	// 		'nama_mhs'		=>$this->input->post('nama_mhs'),
	// 		'jenis_kelamin'	=>$this->input->post('jenis_kelamin'),
	// 		'alamat'		=>$this->input->post('alamat'),
	// 		'prodi'			=>$this->input->post('prodi'),
	// 	);

	// 	$this->db->insert('data_mhs',$data);
	// 	redirect('Mahasiswa');
	// }

	// public function delete(){
	// 	$nim = $this->uri->segment(3);
	// 	$this->db->where('nim',$nim);
	// 	$this->db->delete('data_mhs');
	// 	redirect('Mahasiswa');
	// }
}
