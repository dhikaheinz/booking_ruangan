<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('M_User');
    }

	public function index()
	{
		if ($this->session->userdata('status') == 'login') {
			redirect('home/index');
		}else if ($this->session->userdata('status') == 'admin') {
			redirect('admin/index');
		}
		$this->load->view('front_dashboard');
	}

	function aksi_login(){
		$user_nip = $this->input->post('user_nip');
		$pass = $this->input->post('pass');

		$result = $this->db->get_where('users', array('user_nip' => $user_nip, 'pass' => $pass));
		$data_user = $result->result();
		if($result->num_rows() > 0){
			foreach ($data_user as $row) {
			$data_session = array(
				'id_user' => $row->id_user,
				'user_nip' => $user_nip,
				'level' => $row->level,
				'email' => $row->email,
				'status' => "login",
				// 'lokasi' => $poltekkes
				);
 
			$this->session->set_userdata($data_session);
			}
			$this->session->set_flashdata('success', '<p class="hide-it text-center text-white bg-green-600 my-3 p-2 rounded-md">Berhasil Login</p>');
			redirect('home');
 
		}else{
			$this->session->set_flashdata('success', '<p class="hide-it text-center text-white bg-red-500 my-3 p-2 rounded-md">Data NIP Dan Password Salah</p>');
			redirect('user/index');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('user');
	}

	function chooseAcc(){
		$this->load->view('login/front_choose_acc');
	}

	function pageAdmin(){
		$this->load->view('admin/index');
	}
}