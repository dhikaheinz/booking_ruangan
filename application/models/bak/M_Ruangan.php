<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Ruangan extends CI_Model {

    function inputRuangan($data_input_ruangan) {
        $this->db->insert("tbl_room", $data_input_ruangan);
        $this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-green-600 my-3 p-2 rounded-md">Berhasil Tambah Ruangan</p>');
    }

    function viewRuangan(){
        $this->db->select('*');
        $this->db->from('tbl_room');
        $this->db->order_by('id_room', 'DESC');
    
        return $query = $this->db->get();
    }

    function get_data_ruangan($id){
        $this->db->select('*');
        $this->db->from('tbl_room');
        $this->db->where('id_room', $id);

        return $query = $this->db->get();
    }

    function updateRuangan($id, $data_update_ruangan) {
        $this->db->where('id_room', $id);
        $this->db->update('tbl_room', $data_update_ruangan);
        $this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-green-600 my-3 p-2 rounded-md">Berhasil Update Ruangan</p>');
    }

    function deleteRuangan($id) {
        $this->db->where('id_room', $id);
        $this->db->delete('tbl_room');
        $this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">Berhasil Delete Ruangan</p>');
    }
}