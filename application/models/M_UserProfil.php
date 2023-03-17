<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_UserProfil extends CI_Model {

    function inputUserProfil($data_input_UserProfil) {
        $this->db->insert("tbl_profil_user", $data_input_UserProfil);
        $this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-green-600 my-3 p-2 rounded-md">Berhasil Tambah UserProfil</p>');
    }

    function viewUserProfil(){
        $this->db->select('*');
        $this->db->from('tbl_profil_user');
        $this->db->order_by('id_profil', 'DESC');
    
        return $query = $this->db->get();
    }

    function get_data_UserProfil($id){
        $this->db->select('*');
        $this->db->from('tbl_profil_user');
        $this->db->where('nip_nim', $id);

        return $query = $this->db->get();
    }

    function get_data_UserProfil_Login($id){
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('nip_nim', $id);

        return $query = $this->db->get();
    }

    function updateUserProfil($id, $data_update_UserProfil) {
        $this->db->where('nip_nim', $id);
        $this->db->update('tbl_profil_user', $data_update_UserProfil);
        $this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-green-600 my-3 p-2 rounded-md">Berhasil Update UserProfil</p>');
    }

    function updateUserProfilLogin($id, $data_update_UserProfil_Login) {
        $this->db->where('nip_nim', $id);
        $this->db->update('tbl_user', $data_update_UserProfil_Login);
        // $this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-green-600 my-3 p-2 rounded-md">Berhasil Update UserProfil</p>');
    }

    function deleteUserProfil($id) {
        $this->db->where('nip_nim', $id);
        $this->db->delete('tbl_profil_user');
        $this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">Berhasil Delete UserProfil</p>');
    }

    function deleteUserProfilUser($id) {
        $this->db->where('nip_nim', $id);
        $this->db->delete('tbl_user');
        // $this->session->set_flashdata('notif', '<p class="hide-it text-center text-white bg-yellow-600 my-3 p-2 rounded-md">Berhasil Delete UserProfil</p>');
    }
}