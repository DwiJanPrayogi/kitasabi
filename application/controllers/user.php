<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('user_model');
	}

	public function index(){

		if($this->session->userdata('login?')==TRUE){
			redirect('home');
		}else{
			$this->load->view('login');
		}
	}

	function do_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$cek = $this->user_model->getUser($email, $password);
		if (count($cek) == 1) {
			foreach ($cek as $cek) {
				$role = $cek['role'];
				$id = $cek['userId'];
			}
			$this->session->set_userdata(array('login?' => TRUE, 'id' => $id, 'role' => $role));
			$this->load->view('index');
		}else{
			$this->session->set_flashdata('gagallogin', 'Email/Password yang anda masukan salah');
			$this->load->view('login');
		}
	}

	function do_logout(){
		$this->session->sess_destroy();
		redirect('home');
	}

	function do_register(){
		$this->user_model->setDataUser();
		$this->session->set_flashdata('berhasil', 'Data Anda Berhasil dimasukan');
		$this->load->view('login');
	}

	function get_profile(){
		$userid = $this->session->userdata('id');
		$data = $this->user_model->getDataUser($userid);
		$this->session->set_userdata(array(
			'nama' => $data['nama'], 
			'email' => $data['email'], 
			'password' => $data['password'],
			'rekening' => $data['rekening'],
			'alamat' => $data['alamat']
		));
		$this->load->view('profile');
	}

	function edit_profil(){
		$userid = $this->session->userdata('id');
		$data = $this->user_model->editDataUser($userid);
		$this->session->set_userdata(array(
			'nama' => $data['nama'], 
			'email' => $data['email'], 
			'password' => $data['password'],
			'rekening' => $data['rekening'],
			'alamat' => $data['alamat']
		));
		$this->session->set_flashdata('update', 'Data Anda Berhasil di Update');
		$this->load->view('profile');
	}
}
