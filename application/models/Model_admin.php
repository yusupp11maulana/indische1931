<?php

class Model_admin extends CI_model
{
    public function viewmenu(){
        return $this->db->get('menu') -> result_array();
    }

    public function deletemenu($id){
        $data = array(
            "ket_menu" => "deactived",
        );
        $this->db->where('id_menu', $id);
        $this->db->update('menu',$data);
        redirect('admin/menu');
    }
    public function activmenu($id){
        $data = array(
            "ket_menu" => "actived",
        );
        $this->db->where('id_menu', $id);
        $this->db->update('menu',$data);
        redirect('admin/menu');
    }

    public function tambahmenu(){
        $keterangan ="actived";
        $data = array(
            "nama_menu" => $this->input->post('namamenu', true),
            "harga_menu" => $this->input->post('hargamenu', true),
            "jenis_menu" => $this->input->post('jenismenu', true),
            "ket_menu" => $keterangan,
        );
        if($data['nama_menu']=="" || $data['harga_menu']=="" || $data['jenis_menu']==""){
            redirect('admin/menu');
        }else{
            $this->db->insert('menu', $data);
            redirect('admin/menu');
        }
    }
}
