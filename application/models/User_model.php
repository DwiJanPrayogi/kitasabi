<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class User_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function getUser($email="",$password=""){
		$query = $this->db->get_where('user',array('email' => $email, 'password' => $password));
		$query = $query->result_array();
		return $query;
	}

	public function setDataUser(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'rekening' => $this->input->post('rekening'),
			'alamat' => $this->input->post('alamat')
		);
		return $this->db->insert('user', $data);
	}

	public function getDataUser($userID=""){
		$query = $this->db->get_where('user',array('userId' => $userID));
		return $query->row_array();
	}

	public function editDataUser($userID=""){
		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'rekening' => $this->input->post('rekening'),
			'alamat' => $this->input->post('alamat')
		);

		$this->db->where('userId', $userID);
		$this->db->update('user', $data);
		$query = $this->db->get_where('user',array('userId' => $userID));
		return $query->row_array();
	}
}

?>