<?php

class Model_history extends CI_model
{
    public function viewdet($ktp){
        $status="Belum Terbayar";
        $this->db->where('no_ktp', $ktp);
        $this->db->where('statusnya', $status);
        $this->db->join('menu', 'menu.id_menu=detail.id_menu');
        return $this->db->get('detail')->result_array();
    }


    public function vieworder($ktp){
        $this->db->where('orderan.no_ktp', $ktp);
        $this->db->join('meja','meja.id_meja=orderan.id_meja');
        $id = $this->db->get('orderan')->result_array();
        return $id;
    }
}
