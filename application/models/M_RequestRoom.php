<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_RequestRoom extends CI_Model {

    function inputRequestRuangan($data_input_request_ruangan) {
        $this->db->insert("tbl_booking", $data_input_request_ruangan);
        $this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-green-600 my-3 p-2 rounded-md">Berhasil Tambah Request</p>');
    }

    function inputRequestRuangan_batch($data_input_request_ruangan) {
        $this->db->insert_batch("tbl_booking", $data_input_request_ruangan);
        $this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-green-600 my-3 p-2 rounded-md">Berhasil Tambah Request</p>');
    }

    function viewRequestRoom(){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        $this->db->join('tbl_profil_user', 'tbl_profil_user.nip_nim = tbl_booking.id_profil');
        $this->db->order_by('id_booking', 'DESC');
        $this->db->limit(300);
        
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

    function viewRequestRoomFrontKep(){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        $this->db->join('tbl_profil_user', 'tbl_profil_user.nip_nim = tbl_booking.id_profil');
        $this->db->where('tbl_booking.tgl_mulai', date('Y-m-d'));
        $this->db->where('tbl_booking.status_booking', "1");
        $this->db->where('tbl_profil_user.nip_nim', "111");
        $this->db->order_by('id_booking', 'DESC');
        
        return $query = $this->db->get();
    }

    function viewRequestRoomFrontKeb(){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        $this->db->join('tbl_profil_user', 'tbl_profil_user.nip_nim = tbl_booking.id_profil');
        $this->db->where('tbl_booking.tgl_mulai', date('Y-m-d'));
        $this->db->where('tbl_booking.status_booking', "1");
        $this->db->where('tbl_profil_user.nip_nim', "112");
        $this->db->order_by('id_booking', 'DESC');
        
        return $query = $this->db->get();
    }

    function viewRequestRoomFrontJKG(){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        $this->db->join('tbl_profil_user', 'tbl_profil_user.nip_nim = tbl_booking.id_profil');
        $this->db->where('tbl_booking.tgl_mulai', date('Y-m-d'));
        $this->db->where('tbl_booking.status_booking', "1");
        $this->db->where('tbl_profil_user.nip_nim', "113");
        $this->db->order_by('id_booking', 'DESC');
        
        return $query = $this->db->get();
    }

    function viewRequestRoomFrontOP(){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        $this->db->join('tbl_profil_user', 'tbl_profil_user.nip_nim = tbl_booking.id_profil');
        $this->db->where('tbl_booking.tgl_mulai', date('Y-m-d'));
        $this->db->where('tbl_booking.status_booking', "1");
        $this->db->where('tbl_profil_user.nip_nim', "114");
        $this->db->order_by('id_booking', 'DESC');
        
        return $query = $this->db->get();
    }

    function viewRequestRoomFrontDir(){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        $this->db->join('tbl_profil_user', 'tbl_profil_user.nip_nim = tbl_booking.id_profil');
        $this->db->where('tbl_booking.tgl_mulai', date('Y-m-d'));
        $this->db->where('tbl_booking.status_booking', "1");
        $this->db->where('tbl_profil_user.nip_nim', "110");
        $this->db->order_by('id_booking', 'DESC');
        
        return $query = $this->db->get();
    }

    function viewRequestRoomFrontAdm(){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        $this->db->join('tbl_profil_user', 'tbl_profil_user.nip_nim = tbl_booking.id_profil');
        $this->db->where('tbl_booking.tgl_mulai', date('Y-m-d'));
        $this->db->where('tbl_booking.status_booking', "1");
        $this->db->where('tbl_profil_user.nip_nim', "101");
        $this->db->order_by('id_booking', 'DESC');
        
        return $query = $this->db->get();
    }

    function viewRequestRoomFrontOther(){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        $this->db->join('tbl_profil_user', 'tbl_profil_user.nip_nim = tbl_booking.id_profil');
        $this->db->where('tbl_booking.tgl_mulai', date('Y-m-d'));
        $this->db->where('tbl_booking.status_booking', "1");
        $this->db->where('tbl_profil_user.nip_nim !=', "101");
        $this->db->where('tbl_profil_user.nip_nim !=', "103");
        $this->db->where('tbl_profil_user.nip_nim !=', "110");
        $this->db->where('tbl_profil_user.nip_nim !=', "111");
        $this->db->where('tbl_profil_user.nip_nim !=', "112");
        $this->db->where('tbl_profil_user.nip_nim !=', "113");
        $this->db->where('tbl_profil_user.nip_nim !=', "114");
        $this->db->order_by('id_booking', 'DESC');
        // echo $this->db->last_query();
        return $query = $this->db->get();
    }
    //tgl
    function viewRequestRoomFrontKepDate($tgl_cari){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        $this->db->join('tbl_profil_user', 'tbl_profil_user.nip_nim = tbl_booking.id_profil');
        $this->db->where('tbl_booking.tgl_mulai', $tgl_cari);
        $this->db->where('tbl_booking.status_booking', "1");
        $this->db->where('tbl_profil_user.nip_nim', "111");
        $this->db->order_by('id_booking', 'DESC');
        
        return $query = $this->db->get();
    }

    function viewRequestRoomFrontKebDate($tgl_cari){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        $this->db->join('tbl_profil_user', 'tbl_profil_user.nip_nim = tbl_booking.id_profil');
        $this->db->where('tbl_booking.tgl_mulai', $tgl_cari);
        $this->db->where('tbl_booking.status_booking', "1");
        $this->db->where('tbl_profil_user.nip_nim', "112");
        $this->db->order_by('id_booking', 'DESC');
        
        return $query = $this->db->get();
    }

    function viewRequestRoomFrontJKGDate($tgl_cari){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        $this->db->join('tbl_profil_user', 'tbl_profil_user.nip_nim = tbl_booking.id_profil');
        $this->db->where('tbl_booking.tgl_mulai', $tgl_cari);
        $this->db->where('tbl_booking.status_booking', "1");
        $this->db->where('tbl_profil_user.nip_nim', "113");
        $this->db->order_by('id_booking', 'DESC');
        
        return $query = $this->db->get();
    }

    function viewRequestRoomFrontOPDate($tgl_cari){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        $this->db->join('tbl_profil_user', 'tbl_profil_user.nip_nim = tbl_booking.id_profil');
        $this->db->where('tbl_booking.tgl_mulai', $tgl_cari);
        $this->db->where('tbl_booking.status_booking', "1");
        $this->db->where('tbl_profil_user.nip_nim', "114");
        $this->db->order_by('id_booking', 'DESC');
        
        return $query = $this->db->get();
    }

    function viewRequestRoomFrontDirDate($tgl_cari){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        $this->db->join('tbl_profil_user', 'tbl_profil_user.nip_nim = tbl_booking.id_profil');
        $this->db->where('tbl_booking.tgl_mulai', $tgl_cari);
        $this->db->where('tbl_booking.status_booking', "1");
        $this->db->where('tbl_profil_user.nip_nim', "110");
        $this->db->order_by('id_booking', 'DESC');
        
        return $query = $this->db->get();
    }

    function viewRequestRoomFrontAdmDate($tgl_cari){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        $this->db->join('tbl_profil_user', 'tbl_profil_user.nip_nim = tbl_booking.id_profil');
        $this->db->where('tbl_booking.tgl_mulai', $tgl_cari);
        $this->db->where('tbl_booking.status_booking', "1");
        $this->db->where('tbl_profil_user.nip_nim', "101");
        $this->db->order_by('id_booking', 'DESC');
        
        return $query = $this->db->get();
    }

    function viewRequestRoomFrontOtherDate($tgl_cari){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        $this->db->join('tbl_profil_user', 'tbl_profil_user.nip_nim = tbl_booking.id_profil');
        $this->db->where('tbl_booking.tgl_mulai', $tgl_cari);
        $this->db->where('tbl_booking.status_booking', "1");
        $this->db->where('tbl_profil_user.nip_nim !=', "101");
        $this->db->where('tbl_profil_user.nip_nim !=', "103");
        $this->db->where('tbl_profil_user.nip_nim !=', "110");
        $this->db->where('tbl_profil_user.nip_nim !=', "111");
        $this->db->where('tbl_profil_user.nip_nim !=', "112");
        $this->db->where('tbl_profil_user.nip_nim !=', "113");
        $this->db->where('tbl_profil_user.nip_nim !=', "114");
        $this->db->order_by('id_booking', 'DESC');
        // echo $this->db->last_query();
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

    function viewRequestRoomTotalRuanganNow(){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        // $this->db->where('tbl_booking.status_booking', '0');
        $this->db->where('tbl_booking.tgl_mulai', date('Y-m-d'))
        ->group_start() // Open bracket`
            ->or_where('tbl_room.id_room =', 48)
            ->or_where('tbl_room.id_room =', 49)
            ->or_where('tbl_room.id_room =', 50)
            ->or_where('tbl_room.id_room =', 19)
            ->or_where('tbl_room.id_room =', 20)
            ->or_where('tbl_room.id_room =', 21)
            ->or_where('tbl_room.id_room =', 22)
            ->or_where('tbl_room.id_room =', 23)
            ->or_where('tbl_room.id_room =', 24)
            ->or_where('tbl_room.id_room =', 45)
            ->or_where('tbl_room.id_room =', 46)
            ->or_where('tbl_room.id_room =', 47)
            ->or_where('tbl_room.id_room =', 34)
            ->or_where('tbl_room.id_room =', 35)
            ->or_where('tbl_room.id_room =', 36)
            ->or_where('tbl_room.id_room =', 37)
            ->or_where('tbl_room.id_room =', 38)
            ->or_where('tbl_room.id_room =', 39)
        ->group_end(); // Close bracket`
        return $query = $this->db->get();
    }

    function viewRequestRoomTotalRuanganTgl($tgl_cari){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_room', 'tbl_booking.id_room = tbl_room.id_room');
        // $this->db->where('tbl_booking.status_booking', '0');
        $this->db->where('tbl_booking.tgl_mulai', $tgl_cari)
        ->group_start() // Open bracket`
            ->or_where('tbl_room.id_room =', 48)
            ->or_where('tbl_room.id_room =', 49)
            ->or_where('tbl_room.id_room =', 50)
            ->or_where('tbl_room.id_room =', 19)
            ->or_where('tbl_room.id_room =', 20)
            ->or_where('tbl_room.id_room =', 21)
            ->or_where('tbl_room.id_room =', 22)
            ->or_where('tbl_room.id_room =', 23)
            ->or_where('tbl_room.id_room =', 24)
            ->or_where('tbl_room.id_room =', 45)
            ->or_where('tbl_room.id_room =', 46)
            ->or_where('tbl_room.id_room =', 47)
            ->or_where('tbl_room.id_room =', 34)
            ->or_where('tbl_room.id_room =', 35)
            ->or_where('tbl_room.id_room =', 36)
            ->or_where('tbl_room.id_room =', 37)
            ->or_where('tbl_room.id_room =', 38)
            ->or_where('tbl_room.id_room =', 39)
        ->group_end(); // Close bracket`
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