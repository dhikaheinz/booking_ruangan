<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RequestRuangan extends CI_Controller {

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
		$this->load->model('M_RequestRoom');
    }

	public function index()
	{
		if ($this->session->userdata('level') == '2') {
			redirect('Home/pageUser');
		}else if ($this->session->userdata('level') == '1') {
			$this->load->view('User/pageLogin');
		}
	}

    function inputRequestRuangan(){
		
		// Jam Filtering
		$dataExMulai = explode(":", $this->input->post("jam_mulai"));
		$dataExSelesai  = explode(":", $this->input->post("jam_selesai"));

		// Booking Filtering
		$inputIdRoom = $this->input->post("id_room");
		$inputTglMulai = $this->input->post("tgl_mulai");
		$inputjamMulai = $this->input->post("jam_mulai");
		$inputjamSelesai = $this->input->post("jam_selesai");
		$dataAllBooking = $this->db->get_where('tbl_booking', array('id_room' => $inputIdRoom, 'tgl_mulai' => $inputTglMulai));
		$dataBooking = $dataAllBooking->row();
		$dbExMulai = explode(":", $dataBooking->jam_mulai);
		$dbExSelesai  = explode(":", $dataBooking->jam_selesai);
		if ($dataAllBooking->num_rows() > 0) {
			if ($dataExMulai[0] >= $dbExMulai[0] && $dataExMulai[0] <= $dbExSelesai[0]) {
					$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">Gagal Tambah Ruangan, Karena Ruangan Sedang Digunakan Pada Jam Tersebut Harap Periksa Kembali Kembali</p>');
					redirect('home/pageRequestRuangan');
			}else{
				if($dataExMulai[0] < $dataExSelesai[0]){
					$total_jam = $dataExSelesai[0] - $dataExMulai[0];
		
					$data_input_request_ruangan = array(
						'id_profil' => $this->session->userdata('nip_nim'),
						'id_room' => $this->input->post("id_room"),
						'kegiatan' => $this->input->post("kegiatan"),
						'jml_jam' => $total_jam,
						'jam_mulai' => $this->input->post("jam_mulai"),
						'jam_selesai' => $this->input->post("jam_selesai"),
						'tgl_mulai' => $this->input->post("tgl_mulai"),
						'tgl_selesai' => $this->input->post("tgl_selesai"),
						'created_date' => date('Y-m-d'),
					);
		
					$this->M_RequestRoom->inputRequestRuangan($data_input_request_ruangan);
					redirect('home/pageRequestRuangan');
				}else{
					$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
					redirect('home/pageRequestRuangan');
				};
			}
		} else if($dataExMulai[0] < $dataExSelesai[0]){
			$total_jam = $dataExSelesai[0] - $dataExMulai[0];

			$data_input_request_ruangan = array(
				'id_profil' => $this->session->userdata('nip_nim'),
				'id_room' => $this->input->post("id_room"),
				'kegiatan' => $this->input->post("kegiatan"),
				'jml_jam' => $total_jam,
				'jam_mulai' => $this->input->post("jam_mulai"),
				'jam_selesai' => $this->input->post("jam_selesai"),
				'tgl_mulai' => $this->input->post("tgl_mulai"),
				'tgl_selesai' => $this->input->post("tgl_selesai"),
				'created_date' => date('Y-m-d'),
			);

			$this->M_RequestRoom->inputRequestRuangan($data_input_request_ruangan);
			redirect('home/pageRequestRuangan');
		}else{
			$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
			redirect('home/pageRequestRuangan');
		};
    }

    function approveRequestRuangan($id){

		$data_update_approveRequest = array(
			'status_booking' => "1",
		);

        $this->M_RequestRoom->updateApproveRequest($id, $data_update_approveRequest);
		redirect('home/pageRequestRuangan');
    }

    function cancelApproveRequestRuangan($id){

		$data_update_approveRequest = array(
			'status_booking' => "0",
		);

        $this->M_RequestRoom->updateApproveRequest($id, $data_update_approveRequest);
		redirect('home/pageRequestRuangan');
    }

    function editRequestRuangan($id){

        $data['data_request_ruangan'] = $this->M_RequestRoom->get_data_request_ruangan($id)->row();
		$data['viewDataBooking'] = $this->M_RequestRoom->viewRequestRoom()->result();
		$data['viewDataRuangan'] = $this->M_Ruangan->viewRuangan()->result();
        $this->load->view('admin/pageEditRequestRoom', $data);
    }

	function updateRequestRuangan($id){

        $dataExMulai = explode(":", $this->input->post("jam_mulai"));
		$dataExSelesai  = explode(":", $this->input->post("jam_selesai"));
		if($dataExMulai[0] < $dataExSelesai[0]){
			$total_jam = $dataExSelesai[0] - $dataExMulai[0];

			$data_update_request_ruangan = array(
				'id_profil' => $this->session->userdata('nip_nim'),
				'id_room' => $this->input->post("id_room"),
				'kegiatan' => $this->input->post("kegiatan"),
				'jml_jam' => $total_jam,
				'jam_mulai' => $this->input->post("jam_mulai"),
				'jam_selesai' => $this->input->post("jam_selesai"),
				'tgl_mulai' => $this->input->post("tgl_mulai"),
				'tgl_selesai' => $this->input->post("tgl_selesai"),
				'created_date' => date('Y-m-d'),
			);

			$this->M_RequestRoom->updateRequestRuangan($id, $data_update_request_ruangan);
			redirect('home/pageRequestRuangan');
		}else{
			$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
			redirect('home/pageRequestRuangan');
		};
    }

	function deleteRequestRuangan($id){
        $this->M_RequestRoom->deleteRequestRuangan($id);
		redirect('home/pageRequestRuangan');
    }
}