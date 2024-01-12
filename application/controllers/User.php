<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('M_User');
		$this->load->model('M_RequestRoom');
		$this->load->model('M_Ruangan');
    }

	public function index()
	{
		if ($this->session->userdata('status') == 'login') {
			redirect('Home/index');
		}
		$data['viewDataBookingKep'] = $this->M_RequestRoom->viewRequestRoomFrontKep()->result();
		$data['viewDataBookingKeb'] = $this->M_RequestRoom->viewRequestRoomFrontKeb()->result();
		$data['viewDataBookingJKG'] = $this->M_RequestRoom->viewRequestRoomFrontJKG()->result();
		$data['viewDataBookingOP'] = $this->M_RequestRoom->viewRequestRoomFrontOP()->result();
		$data['viewDataBookingDir'] = $this->M_RequestRoom->viewRequestRoomFrontDir()->result();
		$data['viewDataBookingAdm'] = $this->M_RequestRoom->viewRequestRoomFrontAdm()->result();
		$data['viewDataBookingOther'] = $this->M_RequestRoom->viewRequestRoomFrontOther()->result();
		$data['viewTglDataBooking'] = $this->M_RequestRoom->viewRequestRoomFront()->row();
		$data['viewTotalDataRuangan'] = $this->M_Ruangan->viewRuangan()->num_rows();
		$data['viewRuanganToday'] = $this->M_Ruangan->viewRuanganToday()->num_rows();
		$data['viewRuanganTotal'] = $this->M_Ruangan->viewRuanganTotal()->num_rows();
		$data['viewRequestRoomTotalRuanganNow'] = $this->M_RequestRoom->viewRequestRoomTotalRuanganNow()->num_rows();
		$this->load->view('page/frontDashboard', $data);
	}

	function aksi_login(){
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');

		$result = $this->db->get_where('tbl_user', array('nip_nim' => $user, 'pass' => $pass));
		$data_user = $result->result();
		if($result->num_rows() > 0){
			foreach ($data_user as $row) {
			$data_session = array(
				'id_user' => $row->id_user,
				'nip_nim' => $user,
				'level' => $row->level,
				'status' => "login",
				);
			$this->session->set_userdata($data_session);
			}
			$data_user_nim_nip = $this->session->userdata('nip_nim');
			$query_data_user_detail =$this->db->get_where('tbl_profil_user', array('nip_nim' => $data_user_nim_nip));
			$data_user_detail = $query_data_user_detail->row();
			$this->session->set_userdata('nama_user', $data_user_detail->nama_user);
			$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-green-600 my-3 p-2 rounded-md">Berhasil Login</p>');
			redirect('home');
 
		}else{
			$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-red-500 my-3 p-2 rounded-md">Data NIP/NIM Dan Password Salah</p>');
			redirect('Home/pageLogin');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('user');
	}
}