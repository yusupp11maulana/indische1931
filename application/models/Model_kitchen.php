<?php

class Model_kitchen extends CI_model
{
    public function vieworder(){
        $bev="Foods";
        $tanggal = date('Y-m-d');
        $this->db->where('tgl_order',$tanggal);
        $this->db->join('customer', 'customer.no_ktp=orderan.no_ktp');
        $this->db->join('meja', 'meja.id_meja=orderan.id_meja');
        $this->db->join('detail_order', 'detail_order.id_order=orderan.id_order');
        $this->db->join('menu', 'menu.id_menu=detail_order.id_menu');
        $this->db->where('jenis_menu', $bev);
        return $this->db->get('orderan')->result_array();
    }

    public function update(){
        $menu = 2;
        $id = $this->input->post('ready', true);
        $this->db->where('id_order', $id);
        $this->db->where('jm', $menu);
        $data = array(
            "status_order" => "Ready",
        );
        $this->db->update('detail_order', $data);
        redirect('kitchen');
    }
}
