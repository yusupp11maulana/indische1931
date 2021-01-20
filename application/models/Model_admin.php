<?php

class Model_admin extends CI_model
{
    public function tambahmenu(){
        $data = array(
            "nama_menu" => $this->input->post('namamenu', true),
            "harga_menu" => $this->input->post('hargamenu', true),
            "jenis_menu" => $this->input->post('jenismenu', true),
        );
        var_dump($data);die;
        // $this->db->insert('customer', $data);
        // redirect('login');
    }
}
