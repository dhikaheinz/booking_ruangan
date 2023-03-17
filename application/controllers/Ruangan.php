<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller {

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
    }

	public function index()
	{
		if ($this->session->userdata('level') == '2') {
			redirect('Home/pageUser');
		}else if ($this->session->userdata('level') == '1') {
			$this->load->view('User/pageLogin');
		}
	}

    function inputRuangan(){

        $data_input_ruangan = array(
			'nama_room' => $this->input->post("nama_room"),
			'kuota_room' => $this->input->post("kuota_room"),
			'gedung_room' => $this->input->post("gedung_room"),
			'deskripsi_room' => $this->input->post("deskripsi_room"),
			'created_date' => date('Y-m-d'),
		);

        $this->M_Ruangan->inputRuangan($data_input_ruangan);
        redirect('home/pageInputRuangan');
    }

    function editRuangan($id){

        $data['data_ruangan'] = $this->M_Ruangan->get_data_ruangan($id)->row();
		$data['viewDataRuangan'] = $this->M_Ruangan->viewRuangan()->result();
        $this->load->view('admin/pageEditRuangan', $data);
    }

	function updateRuangan($id){

        $data_update_ruangan = array(
			'nama_room' => $this->input->post("nama_room"),
			'kuota_room' => $this->input->post("kuota_room"),
			'gedung_room' => $this->input->post("gedung_room"),
			'deskripsi_room' => $this->input->post("deskripsi_room"),
			// 'created_date' => date('Y-m-d'),
		);

        $this->M_Ruangan->updateRuangan($id, $data_update_ruangan);
        redirect('home/pageInputRuangan');
    }

	function deleteRuangan($id){
        $this->M_Ruangan->deleteRuangan($id);
		redirect('home/pageInputRuangan');
    }
}