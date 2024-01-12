<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_RequestRoom extends CI_Model {

    function inputRequestRuangan($data_input_request_ruangan) {
        $this->db->insert("tbl_booking", $data_input_request_ruangan);
        $this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-green-600 my-3 p-2 rounded-md">Berhasil Tambah Request</p>');
    }

    function viewRequestRoom(){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        $this->db->join('tbl_profil_user', 'tbl_profil_user.nip_nim = tbl_booking.id_profil');
        $this->db->order_by('tbl_booking.created_date', 'DESC');
        
        return $query = $this->db->get();
    }

    function viewRequestRoomFront(){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        $this->db->join('tbl_profil_user', 'tbl_profil_user.nip_nim = tbl_booking.id_profil');
        $this->db->where('tbl_booking.tgl_mulai', date('Y-m-d'));
        $this->db->where('tbl_booking.status_booking', "1");
        $this->db->order_by('id_booking', 'DESC');
        
        return $query = $this->db->get();
    }

    function viewRequestRoomUser(){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        $this->db->join('tbl_profil_user', 'tbl_profil_user.nip_nim = tbl_booking.id_profil');
        $this->db->where('tbl_booking.id_profil', $this->session->userdata('nip_nim'));
        $this->db->order_by('id_booking', 'DESC');

        return $query = $this->db->get();
    }

    function updateApproveRequest($id, $data_update_approveRequest) {
        $this->db->where('id_booking', $id);
        $this->db->update('tbl_booking', $data_update_approveRequest);
        $this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-green-600 my-3 p-2 rounded-md">Berhasil Approve Request</p>');
    }

    function get_data_request_ruangan($id){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        $this->db->where('id_booking', $id);

        return $query = $this->db->get();
    }

    function updateRequestRuangan($id, $data_update_request_ruangan) {
        $this->db->where('id_booking', $id);
        $this->db->update('tbl_booking', $data_update_request_ruangan);
        $this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-green-600 my-3 p-2 rounded-md">Berhasil Update Request Ruangan</p>');
    }

    function deleteRequestRuangan($id) {
        $this->db->where('id_booking', $id);
        $this->db->delete('tbl_booking');
        $this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">Berhasil Delete Request Ruangan</p>');
    }

    function viewRequestRoomTotalApprove(){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        $this->db->where('tbl_booking.status_booking', '1');
        
        return $query = $this->db->get();
    }

    function viewRequestRoomTotalPending(){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        $this->db->where('tbl_booking.status_booking', '0');
        
        return $query = $this->db->get();
    }

    function viewRequestRoomFrontbyDate($tgl_cari){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        $this->db->join('tbl_profil_user', 'tbl_profil_user.nip_nim = tbl_booking.id_profil');
        $this->db->where('tbl_booking.tgl_mulai', $tgl_cari);
        $this->db->where('tbl_booking.status_booking', "1");
        $this->db->order_by('id_booking', 'DESC');
        
        return $query = $this->db->get();
    }
}