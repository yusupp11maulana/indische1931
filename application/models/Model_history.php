<?php

class Model_history extends CI_model
{
    public function viewdet($ktp){
        $status="Belum Terbayar";
        $this->db->select('id_order');
        $this->db->where('no_ktp', $ktp);
        $this->db->where('status_bayar', $status);
        $id = $this->db->get('orderan')->result_array();
        $id_order="kosong";
        foreach ($id as $ido):
            $id_order = $ido['id_order'];
        endforeach;
        if($id_order=="kosong"){
            return $id_order;
        }else{
        $this->db->where('id_order', $id_order);
        $this->db->join('menu', 'menu.id_menu=detail_order.id_menu');
        return $this->db->get('detail_order')->result_array();
        }
    }

    public function vieworder($ktp){
        $this->db->where('no_ktp', $ktp);
        $this->db->join('meja','meja.id_meja=orderan.id_meja');
        $id = $this->db->get('orderan')->result_array();
        return $id;
    }
}
