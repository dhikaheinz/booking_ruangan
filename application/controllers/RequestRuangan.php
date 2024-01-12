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

		$inputIdRoom = $this->input->post("id_room");
		
		// Jam Filtering
		// $dataExMulai = explode(":", $this->input->post("jam_mulai"));
		// $dataExSelesai  = explode(":", $this->input->post("jam_selesai"));
		
		// Tgl Input
		$tglPureMulai = $this->input->post("tgl_mulai");
		$tglPureSelesai  = $this->input->post("tgl_mulai");
		
		// Jam Input
		$JamPureMulai = $this->input->post("jam_mulai");
		$JamPureSelesai  = $this->input->post("jam_selesai");

		//Check DB
		$dataAllBooking = $this->db->get_where('tbl_booking', array('id_room' => $inputIdRoom, 'tgl_mulai' => $tglPureMulai));
		$dataBooking = $dataAllBooking->row();

		//ExpoJam
		// $dbExMulai = explode(":", $dataBooking->jam_mulai);
		// $dbExSelesai  = explode(":", $dataBooking->jam_selesai);

		//Formating Tgl dan Waktu
		// $JaminputMulaiFormat = DateTime::createFromFormat('h:i', $JamPureMulai);
		// $JaminputSelesaiFormat = DateTime::createFromFormat('h:i', $JamPureSelesai);
		// $JamdbMulaiFormat = DateTime::createFromFormat('h:i', $dataBooking->jam_mulai);
		// $JamdbSelesaiFormat = DateTime::createFromFormat('h:i', $dataBooking->jam_selesai);

		// $JamdbMulai = "";
		// $JamdbSelesai = "";

		// if (!empty($dataBooking['jam_mulai'])) {
			$JamdbMulai = $dataBooking->jam_mulai;
			$JamdbSelesai = $dataBooking->jam_selesai;
		// } else {
		// 	$JamdbMulai = "";
		// 	$JamdbSelesai = "";
		// }
		
		$JaminputMulaiFormat = strtotime($JamPureMulai);
		$JaminputSelesaiFormat = strtotime($JamPureSelesai);
		$JamdbMulaiFormat = strtotime($JamdbMulai);
		$JamdbSelesaiFormat = strtotime($JamdbSelesai);

		$TglMulaiFormat = DateTime::createFromFormat('Y-m-d', $tglPureMulai);
		$TglSelesaiFormat = DateTime::createFromFormat('Y-m-d', $tglPureSelesai);

		//done check ^^

		//Config Range TGL
		$convDateMulai = $TglMulaiFormat->format('Y-m-d');
		$convDateSelesai = $TglSelesaiFormat->format('Y-m-d');
		
		$tglDari = date_create($convDateMulai);
		$tglSampai = date_create($convDateSelesai);

		// get range tanggal
		$diff = date_diff($tglDari, $tglSampai);
		$rangeTgl = $diff->format("%a");
		$rangeTglEnd = $rangeTgl + 1;

		// tanggal minus 1
		$dataTglMulai2 = date('Y-m-d', strtotime($tglPureMulai . "-1 days"));

		// if ($rangeTgl == 0) {
		// 	$dataBooking = $dataAllBooking->row();
		// }else{
		// 	$dataBooking = $dataAllBooking->row_array();
		// };

		if ($rangeTgl == 0) {
			if ($dataAllBooking->num_rows() > 0) {
				//check jam
				if ($JaminputMulaiFormat < $JaminputSelesaiFormat) {
					if ($JaminputMulaiFormat > $JamdbMulaiFormat && $JaminputMulaiFormat < $JamdbSelesaiFormat){
							//false data mulai lebih besar dari data selesai
							$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
							(001) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
							redirect('home/pageRequestRuangan');
					}else if ($JaminputMulaiFormat > $JamdbMulaiFormat && $JaminputMulaiFormat < $JamdbSelesaiFormat){
							//false data mulai lebih besar dari data selesai
							$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
							(002) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
							redirect('home/pageRequestRuangan');
					}else if ($JaminputSelesaiFormat > $JamdbMulaiFormat && $JaminputSelesaiFormat < $JamdbSelesaiFormat){
							//false data mulai lebih besar dari data selesai
							$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
							(011) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
							redirect('home/pageRequestRuangan');
					}else if ($JaminputSelesaiFormat > $JamdbMulaiFormat && $JaminputSelesaiFormat < $JamdbSelesaiFormat){
							//false data mulai lebih besar dari data selesai
							$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
							(012) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
							redirect('home/pageRequestRuangan');
					}else if ($JaminputMulaiFormat > $JamdbMulaiFormat && $JaminputMulaiFormat < $JamdbSelesaiFormat && 
							$JaminputSelesaiFormat > $JamdbMulaiFormat && $JaminputSelesaiFormat < $JamdbSelesaiFormat){
							//false data mulai lebih besar dari data selesai
							$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
							(003) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
							redirect('home/pageRequestRuangan');
					}else{
						$data_input_request_ruangan = array(
							'id_profil' => $this->session->userdata('nip_nim'),
							'id_room' => $this->input->post("id_room"),
							'kegiatan' => $this->input->post("kegiatan"),
							'jam_mulai' => $this->input->post("jam_mulai"),
							'jam_selesai' => $this->input->post("jam_selesai"),
							'tgl_mulai' => $this->input->post("tgl_mulai"),
							'tgl_selesai' => $this->input->post("tgl_selesai"),
							'created_date' => date('Y-m-d'),
						);
						$this->M_RequestRoom->inputRequestRuangan($data_input_request_ruangan);
						$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-green-600 my-3 p-2 rounded-md">
						(001) Berhasil Tambah Ruangan</p>');
						redirect('home/pageRequestRuangan');
					};
				}else{
					//false data mulai lebih besar dari data selesai
					$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
					(004) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
					redirect('home/pageRequestRuangan');
				};
			}else {
				if ($JaminputMulaiFormat < $JaminputSelesaiFormat) {
					if ($JaminputMulaiFormat >= $JamdbMulaiFormat && $JaminputMulaiFormat <= $JamdbSelesaiFormat){
							//false data mulai lebih besar dari data selesai
							$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
							(005) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
							redirect('home/pageRequestRuangan');
					}else if ($JaminputMulaiFormat >= $JamdbMulaiFormat && $JaminputMulaiFormat <= $JamdbSelesaiFormat){
							//false data mulai lebih besar dari data selesai
							$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
							(006) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
							redirect('home/pageRequestRuangan');
					}else if ($JaminputSelesaiFormat > $JamdbMulaiFormat && $JaminputSelesaiFormat < $JamdbSelesaiFormat){
							//false data mulai lebih besar dari data selesai
							$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
							(021) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
							redirect('home/pageRequestRuangan');
					}else if ($JaminputSelesaiFormat > $JamdbMulaiFormat && $JaminputSelesaiFormat < $JamdbSelesaiFormat){
							//false data mulai lebih besar dari data selesai
							$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
							(022) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
							redirect('home/pageRequestRuangan');
					}else if ($JaminputMulaiFormat >= $JamdbMulaiFormat && $JaminputMulaiFormat <= $JamdbSelesaiFormat && 
							$JaminputSelesaiFormat >= $JamdbMulaiFormat && $JaminputSelesaiFormat <= $JamdbSelesaiFormat){
							//false data mulai lebih besar dari data selesai
							$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
							(007) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
							redirect('home/pageRequestRuangan');
					}else{
						$data_input_request_ruangan = array(
							'id_profil' => $this->session->userdata('nip_nim'),
							'id_room' => $this->input->post("id_room"),
							'kegiatan' => $this->input->post("kegiatan"),
							'jam_mulai' => $this->input->post("jam_mulai"),
							'jam_selesai' => $this->input->post("jam_selesai"),
							'tgl_mulai' => $this->input->post("tgl_mulai"),
							'tgl_selesai' => $this->input->post("tgl_selesai"),
							'created_date' => date('Y-m-d'),
						);
						$this->M_RequestRoom->inputRequestRuangan($data_input_request_ruangan);
						$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-green-600 my-3 p-2 rounded-md">
						(002) Berhasil Tambah Ruangan</p>');
						redirect('home/pageRequestRuangan');
					};
				}else{
					//false data mulai lebih besar dari data selesai
					$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
					(008) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
					redirect('home/pageRequestRuangan');
				};
			}
		}else{
			//range tanggal
			$dataRangeTgl = array();

			$index = 0;

			for($index = 0; $index <= $dataRangeTgl; $index++) {

				if ($dataAllBooking->num_rows() > 0) {
					//check jam
					if ($JaminputMulaiFormat < $JaminputSelesaiFormat) {
						if ($JaminputMulaiFormat > $JamdbMulaiFormat && $JaminputMulaiFormat < $JamdbSelesaiFormat){
								//false data mulai lebih besar dari data selesai
								$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
								(101) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
								redirect('home/pageRequestRuangan');
						}else if ($JaminputMulaiFormat > $JamdbMulaiFormat && $JaminputMulaiFormat < $JamdbSelesaiFormat){
								//false data mulai lebih besar dari data selesai
								$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
								(102) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
								redirect('home/pageRequestRuangan');
						}else if ($JaminputSelesaiFormat > $JamdbMulaiFormat && $JaminputSelesaiFormat < $JamdbSelesaiFormat){
								//false data mulai lebih besar dari data selesai
								$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
								(111) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
								redirect('home/pageRequestRuangan');
						}else if ($JaminputSelesaiFormat > $JamdbMulaiFormat && $JaminputSelesaiFormat < $JamdbSelesaiFormat){
								//false data mulai lebih besar dari data selesai
								$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
								(112) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
								redirect('home/pageRequestRuangan');
						}else if ($JaminputMulaiFormat > $JamdbMulaiFormat && $JaminputMulaiFormat < $JamdbSelesaiFormat && 
								$JaminputSelesaiFormat > $JamdbMulaiFormat && $JaminputSelesaiFormat < $JamdbSelesaiFormat){
								//false data mulai lebih besar dari data selesai
								$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
								(103) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
								redirect('home/pageRequestRuangan');
						}else{
							$dataTglMulai2 = date('Y-m-d', strtotime($dataTglMulai2 . "+1 days"));
							$dataRangeTgl[] = array(
								'id_profil' => $this->session->userdata('nip_nim'),
								'id_room' => $this->input->post("id_room"),
								'kegiatan' => $this->input->post("kegiatan"),
								'jam_mulai' => $this->input->post("jam_mulai"),
								'jam_selesai' => $this->input->post("jam_selesai"),
								'tgl_mulai' => $dataTglMulai2,
								'tgl_selesai' => $dataTglMulai2,
								'created_date' => date('Y-m-d'),
							);
							print_r($dataRangeTgl);
							$this->M_RequestRoom->inputRequestRuangan_batch($dataRangeTgl);
							$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-green-600 my-3 p-2 rounded-md">
							(101) Berhasil Tambah Ruangan</p>');
							redirect('home/pageRequestRuangan');
						};
					}else{
						//false data mulai lebih besar dari data selesai
						$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
						(104) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
						redirect('home/pageRequestRuangan');
					};
				} else {
					if ($JaminputMulaiFormat < $JaminputSelesaiFormat) {
						if ($JaminputMulaiFormat >= $JamdbMulaiFormat && $JaminputMulaiFormat <= $JamdbSelesaiFormat){
								//false data mulai lebih besar dari data selesai
								$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
								(105) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
								redirect('home/pageRequestRuangan');
						}else if ($JaminputMulaiFormat >= $JamdbMulaiFormat && $JaminputMulaiFormat <= $JamdbSelesaiFormat){
								//false data mulai lebih besar dari data selesai
								$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
								(106) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
								redirect('home/pageRequestRuangan');
						}else if ($JaminputSelesaiFormat > $JamdbMulaiFormat && $JaminputSelesaiFormat < $JamdbSelesaiFormat){
								//false data mulai lebih besar dari data selesai
								$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
								(121) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
								redirect('home/pageRequestRuangan');
						}else if ($JaminputSelesaiFormat > $JamdbMulaiFormat && $JaminputSelesaiFormat < $JamdbSelesaiFormat){
								//false data mulai lebih besar dari data selesai
								$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
								(122) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
								redirect('home/pageRequestRuangan');
						}else if ($JaminputMulaiFormat >= $JamdbMulaiFormat && $JaminputMulaiFormat <= $JamdbSelesaiFormat && 
								$JaminputSelesaiFormat >= $JamdbMulaiFormat && $JaminputSelesaiFormat <= $JamdbSelesaiFormat){
								//false data mulai lebih besar dari data selesai
								$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
								(107) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
								redirect('home/pageRequestRuangan');
						}else{
							$dataTglMulai2 = date('Y-m-d', strtotime($dataTglMulai2 . "+1 days"));
							$dataRangeTgl[] = array(
								'id_profil' => $this->session->userdata('nip_nim'),
								'id_room' => $this->input->post("id_room"),
								'kegiatan' => $this->input->post("kegiatan"),
								'jam_mulai' => $this->input->post("jam_mulai"),
								'jam_selesai' => $this->input->post("jam_selesai"),
								'tgl_mulai' => $dataTglMulai2,
								'tgl_selesai' => $dataTglMulai2,
								'created_date' => date('Y-m-d'),
							);
							print_r($dataRangeTgl);
							$this->M_RequestRoom->inputRequestRuangan_batch($dataRangeTgl);
							// $this->M_RequestRoom->inputRequestRuangan($data_input_request_ruangan);
							$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-green-600 my-3 p-2 rounded-md">
							(102) Berhasil Tambah Ruangan</p>');
							redirect('home/pageRequestRuangan');
						};
					}else{
						//false data mulai lebih besar dari data selesai
						$this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">
						(108) Gagal Tambah Ruangan, Karena Jam Mulai dan Jam Selesai Tidak Sesuai</p>');
						redirect('home/pageRequestRuangan');
					};
				};
			}
		};
		//New ============================
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