<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('status') == '') {
		// 	redirect('user');
		// }
		// echo $this->session->userdata('id_user').'id<br>';
		// echo $this->session->userdata('nip_nim').'nim<br>';
		// echo $this->session->userdata('level').'level<br>';
		$this->load->model('M_Ruangan');
		$this->load->model('M_UserProfil');
		$this->load->model('M_RequestRoom');
    }

	public function index()
	{
		if ($this->session->userdata('level') == '2') {
			redirect('Home/pageUser');
		}else if ($this->session->userdata('level') == '1') {
			redirect('Home/pageAdmin');
		}
		$this->load->view('User/pageLogin');
	}

	function pageLogin(){
		$this->load->view('login/index');
	}

	function pageUser(){
		if ($this->session->userdata('status') == '' && $this->session->userdata('level') == '') {
			redirect('user');
		}else if($this->session->userdata('status') == 'login' && $this->session->userdata('level') == '2'){

			$data['viewTotalRequestRoom'] = $this->M_RequestRoom->viewRequestRoom()->num_rows();
			$data['viewRequestRoomUser'] = $this->M_RequestRoom->viewRequestRoomUser()->num_rows();
			$data['viewRequestRoomTotalApprove'] = $this->M_RequestRoom->viewRequestRoomTotalApprove()->num_rows();
			$data['viewRequestRoomTotalPending'] = $this->M_RequestRoom->viewRequestRoomTotalPending()->num_rows();
			$data['viewTotalUserProfil'] = $this->M_UserProfil->viewUserProfil()->num_rows();
			$data['viewTotalDataRuangan'] = $this->M_Ruangan->viewRuangan()->num_rows();
			$data['viewRuanganToday'] = $this->M_Ruangan->viewRuanganToday()->num_rows();
			$data['viewRuanganTotal'] = $this->M_Ruangan->viewRuanganTotal()->num_rows();
			$data['viewDataBooking'] = $this->M_RequestRoom->viewRequestRoomFront()->result();
			$this->load->view('user/index', $data);
		}else{
			redirect('user');
		}
	}
	
	function pageAdmin(){
		if ($this->session->userdata('status') == '' && $this->session->userdata('level') == '') {
			redirect('user');
		}else if($this->session->userdata('status') == 'login' && $this->session->userdata('level') == '1'){

			$data['viewTotalRequestRoom'] = $this->M_RequestRoom->viewRequestRoom()->num_rows();
			$data['viewRequestRoomTotalApprove'] = $this->M_RequestRoom->viewRequestRoomTotalApprove()->num_rows();
			$data['viewRequestRoomTotalPending'] = $this->M_RequestRoom->viewRequestRoomTotalPending()->num_rows();
			$data['viewTotalUserProfil'] = $this->M_UserProfil->viewUserProfil()->num_rows();
			$data['viewTotalDataRuangan'] = $this->M_Ruangan->viewRuangan()->num_rows();
			$data['viewRuanganToday'] = $this->M_Ruangan->viewRuanganToday()->num_rows();
			$data['viewRuanganTotal'] = $this->M_Ruangan->viewRuanganTotal()->num_rows();
			$data['viewDataBooking'] = $this->M_RequestRoom->viewRequestRoomFront()->result();
			$this->load->view('admin/index', $data);
		}else{
			redirect('user');
		}
	}

	function pageInputRuangan(){
		if ($this->session->userdata('status') == '' && $this->session->userdata('level') == '') {
			redirect('user');
		}else if($this->session->userdata('status') == 'login' && $this->session->userdata('level') == '1'){
			$data['viewDataRuangan'] = $this->M_Ruangan->viewRuangan()->result();
			$this->load->view('admin/pageInputRuangan', $data);
			// print_r($data['viewDataRuangan']);
		}else{
			redirect('user');
		}
	}

	function pageInputUser(){
		if ($this->session->userdata('status') == '' && $this->session->userdata('level') == '') {
			redirect('user');
		}else if($this->session->userdata('status') == 'login' && $this->session->userdata('level') == '1'){
			$data['viewDataUser'] = $this->M_UserProfil->viewUserProfil()->result();
			$this->load->view('admin/pageInputUser', $data);
			// print_r($data['viewDataRuangan']);
		}else{
			redirect('user');
		}
	}

	function pageRequestRuangan(){
		if ($this->session->userdata('status') == '' && $this->session->userdata('level') == '') {
			redirect('user');
		}else if($this->session->userdata('status') == 'login' && $this->session->userdata('level') == '1'){
			$data['viewDataBooking'] = $this->M_RequestRoom->viewRequestRoom()->result();
			$data['viewDataRuangan'] = $this->M_Ruangan->viewRuangan()->result();
			$this->load->view('admin/pageInputRequestRoom', $data);
			// print_r($data['viewDataBooking']);
		}else if($this->session->userdata('status') == 'login' && $this->session->userdata('level') == '2'){
			$data['viewDataBooking'] = $this->M_RequestRoom->viewRequestRoomUser()->result();
			$data['viewDataRuangan'] = $this->M_Ruangan->viewRuangan()->result();
			// echo $this->db->last_query();
			// echo $this->session->userdata('user');
			$this->load->view('user/pageInputRequestRoom', $data);
			// print_r($data['viewDataBooking']);
		}else{
			redirect('user');
		}
	}

	function filterTanggal(){
		$tgl_cari = $this->input->post("tgl_cari");

		$data['viewDataBooking'] = $this->M_RequestRoom->viewRequestRoomFrontbyDate($tgl_cari)->result();
		$data['viewTglDataBooking'] = $this->M_RequestRoom->viewRequestRoomFrontbyDate($tgl_cari)->row();
		if ($this->session->userdata('status') == 'login') {
			redirect('Home/index');
		}
		// $data['viewDataBooking'] = $this->M_RequestRoom->viewRequestRoomFront()->result();
		$data['viewTotalDataRuangan'] = $this->M_Ruangan->viewRuangan()->num_rows();
		$data['viewRuanganToday'] = $this->M_Ruangan->viewRuanganToday()->num_rows();
		$data['viewRuanganTotal'] = $this->M_Ruangan->viewRuanganTotal()->num_rows();
		$this->load->view('page/frontDashboard', $data);
	}

	// function filterTanggalAdmin(){
	// 	$tgl_cari = $this->input->post("tgl_cari");

	// 	$data['viewDataBooking'] = $this->M_RequestRoom->viewRequestRoomFrontbyDate($tgl_cari)->result();
	// 	$data['viewTglDataBooking'] = $this->M_RequestRoom->viewRequestRoomFrontbyDate($tgl_cari)->row();
	// 	if ($this->session->userdata('status') == 'login') {
	// 		redirect('Home/index');
	// 	}
	// 	// $data['viewDataBooking'] = $this->M_RequestRoom->viewRequestRoomFront()->result();
	// 	$data['viewTotalDataRuangan'] = $this->M_Ruangan->viewRuangan()->num_rows();
	// 	$data['viewRuanganToday'] = $this->M_Ruangan->viewRuanganToday()->num_rows();
	// 	$data['viewRuanganTotal'] = $this->M_Ruangan->viewRuanganTotal()->num_rows();
	// 	$this->load->view('page/frontDashboard', $data);
	// }

	function filterTanggalAdmin(){
		if ($this->session->userdata('status') == '' && $this->session->userdata('level') == '') {
			redirect('user');
		}else if($this->session->userdata('status') == 'login' && $this->session->userdata('level') == '1'){

			$tgl_cari = $this->input->post("tgl_cari");

			$data['viewDataBooking'] = $this->M_RequestRoom->viewRequestRoomFrontbyDate($tgl_cari)->result();
			$data['viewTglDataBooking'] = $this->M_RequestRoom->viewRequestRoomFrontbyDate($tgl_cari)->row();
			
			$data['viewTotalRequestRoom'] = $this->M_RequestRoom->viewRequestRoom()->num_rows();
			$data['viewRequestRoomTotalApprove'] = $this->M_RequestRoom->viewRequestRoomTotalApprove()->num_rows();
			$data['viewRequestRoomTotalPending'] = $this->M_RequestRoom->viewRequestRoomTotalPending()->num_rows();
			$data['viewTotalUserProfil'] = $this->M_UserProfil->viewUserProfil()->num_rows();
			$data['viewTotalDataRuangan'] = $this->M_Ruangan->viewRuangan()->num_rows();
			$data['viewRuanganToday'] = $this->M_Ruangan->viewRuanganToday()->num_rows();
			$data['viewRuanganTotal'] = $this->M_Ruangan->viewRuanganTotal()->num_rows();
			// $data['viewDataBooking'] = $this->M_RequestRoom->viewRequestRoomFront()->result();
			$this->load->view('admin/index', $data);
		}else{
			redirect('user');
		}
	}
}