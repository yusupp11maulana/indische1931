<?php

class Model_bar extends CI_model
{
    public function vieworder(){
        $bev="Beverages";
        $tanggal = date('Y-m-d');
        $this->db->where('tgl_order', $tanggal);
        $this->db->join('customer', 'customer.no_ktp=orderan.no_ktp');
        $this->db->join('meja', 'meja.id_meja=orderan.id_meja');
        $this->db->join('detail', 'detail.id_order=orderan.id_order');
        $this->db->join('menu', 'menu.id_menu=detail.id_menu');
        $this->db->where('jenis_menu', $bev);
        return $this->db->get('orderan')->result_array();
    }

    public function update(){
        $menu = 1;
        $id = $this->input->post('ready', true);
        $this->db->where('id_order', $id);
        $this->db->where('jm', $menu);
        $data = array(
            "status_order" => "Ready",
        );
        $this->db->update('detail', $data);
        redirect('bar');
    }
}
