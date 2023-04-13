<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserProfil extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('M_UserProfil');
		$this->load->model('M_User');
    }

	public function index()
	{
		if ($this->session->userdata('level') == '2') {
			redirect('Home/pageUser');
		}else if ($this->session->userdata('level') == '1') {
			$this->load->view('User/pageLogin');
		}
	}

    function inputUserProfil(){

        $data_input_UserProfil = array(
			'nama_user' => $this->input->post("nama_user"),
			'nip_nim' => $this->input->post("nip_nim"),
			'tingkat' => $this->input->post("tingkat"),
			'jurusan' => $this->input->post("jurusan"),
			'no_hp' => $this->input->post("no_hp"),
			'email' => $this->input->post("email"),
			'created_date' => date('Y-m-d'),
		);

        $data_input_UserLogin = array(
			'nip_nim' => $this->input->post("nip_nim"),
			'pass' => $this->input->post("password"),
			'level' => '2',
			'created_date' => date('Y-m-d'),
		);

        $this->M_UserProfil->inputUserProfil($data_input_UserProfil);
        $this->M_User->inputUserLogin($data_input_UserLogin);
        redirect('home/pageInputUser');
    }

    function editUserProfil($id){

        $data['data_UserProfil'] = $this->M_UserProfil->get_data_UserProfil($id)->row();
        $data['data_UserProfil_Login'] = $this->M_UserProfil->get_data_UserProfil_Login($id)->row();
		$data['viewDataUserProfil'] = $this->M_UserProfil->viewUserProfil()->result();
        $this->load->view('admin/pageEditUser', $data);
    }

	function updateUserProfil($id){

        $data_update_UserProfil = array(
			'nama_user' => $this->input->post("nama_user"),
			'nip_nim' => $this->input->post("nip_nim"),
			'tingkat' => $this->input->post("tingkat"),
			'jurusan' => $this->input->post("jurusan"),
			'no_hp' => $this->input->post("no_hp"),
			'email' => $this->input->post("email"),
			// 'created_date' => date('Y-m-d'),
		);

        $data_update_UserProfil_Login = array(
			'nip_nim' => $this->input->post("nip_nim"),
			'pass' => $this->input->post("password"),
			// 'level' => '2',
			// 'created_date' => date('Y-m-d'),
		);

        $this->M_UserProfil->updateUserProfil($id, $data_update_UserProfil);
        $this->M_UserProfil->updateUserProfilLogin($id, $data_update_UserProfil_Login);
        redirect('home/pageInputUser');
    }

	function deleteUserProfil($id){
        $this->M_UserProfil->deleteUserProfil($id);
        $this->M_UserProfil->deleteUserProfilUser($id);
		redirect('home/pageInputUser');
    }
}