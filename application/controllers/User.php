<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * 
 */
class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
	}

	public function index(){
		$data['mahasiswa'] = $this->users_model->getAllUsers();
		$this->load->view('users_list', $data);
	}

	public function addnew(){
		$this->load->view('addform');
	}

	public function insert()
	{
		$nama 		= $this->input->post('nama');
		$nim 		= $this->input->post('nim');
		$jurusan 	= $this->input->post('jurusan');
		$alamat 	= $this->input->post('alamat');

		$data = [
			'nama' 		=> $nama,
			'nim' 		=> $nim,
			'jurusan' 	=> $jurusan,
			'alamat' 	=> $alamat
		];

		$this->db->insert('mahasiswa', $data);
		redirect('user');
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('mahasiswa');
		redirect('user');
	}

	public function edit($id){
		$data['editmhs'] = $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
		$this->load->view('editform', $data);
	}

	public function update($id)
	{
		$nama 		= $this->input->post('nama');
		$nim 		= $this->input->post('nim');
		$jurusan 	= $this->input->post('jurusan');
		$alamat 	= $this->input->post('alamat');

		$data = [
			'nama' 		=> $nama,
			'nim' 		=> $nim,
			'jurusan' 	=> $jurusan,
			'alamat' 	=> $alamat
		];

		$this->db->where('id', $id);
		$this->db->update('mahasiswa', $data);
		redirect('user');
	}
	 
}
?>