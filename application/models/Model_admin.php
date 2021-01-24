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

    public function vieworders(){
        $tanggal = date('Y-m-d');
        $this->db->where('tgl_order', $tanggal);
        return $this->db->count_all('orderan');
        
    }

    public function viewfood(){
        $food="Foods";
        $this->db->join('orderan', 'orderan.id_order=detail.id_order');
        $tanggal= date('Y-m-d');
        $this->db->where('tgl_order', $tanggal);
        $this->db->join('menu', 'menu.id_menu=detail.id_menu');
        $this->db->where('jenis_menu', $food);
        $this->db->select_sum('jumlah_order');
        $query = $this->db->get('detail')->result_array();
        $food=0;
        foreach($query as $q):
            $food = $q['jumlah_order'];
        endforeach;
        return $food;
    }

    public function viewbev(){
        $bev="Beverages";
        $tanggal= date('Y-m-d');
        $this->db->join('orderan', 'orderan.id_order=detail.id_order');
        $this->db->where('tgl_order', $tanggal);
        $this->db->join('menu', 'menu.id_menu=detail.id_menu');
        $this->db->where('jenis_menu', $bev);
        $this->db->select_sum('jumlah_order');
        $query = $this->db->get('detail')->result_array();
        $bev=0;
        foreach($query as $q):
            $bev = $q['jumlah_order'];
        endforeach;
        return $bev;
    }

    public function vieworder(){
        $this->db->join('customer', 'customer.no_ktp=orderan.no_ktp');
        $this->db->join('meja', 'meja.id_meja=orderan.id_meja');
        return $this->db->get('orderan')->result_array();
    }

    public function nomer(){
        $query = $this->db->query("SELECT MAX(id_pegawai) as kodepeg FROM pegawai")->row_array()['kodepeg'];
        $urutan = (int) substr($query, 3, 4);
        $urutan++;
        $simbol = "PGW";
        $kodenya = $simbol . sprintf("%04s", $urutan);
        return $kodenya;
    }

    public function insertpegawai(){
        $data = array(
            "id_pegawai" => $this->input->post('id', true),
            "nama_pegawai" => $this->input->post('nama', true),
            "alamat_pegawai" => $this->input->post('alamat', true),
            "no_telp_pegawai" => $this->input->post('notelp', true),
            "tanggal_lahir" => $this->input->post('ttlpeg', true),
            "id_role" => $this->input->post('id_role', true),
        );
        $this->db->insert('pegawai', $data);
        redirect('admin/karyawan');
    }

    public function viewpeg(){
        $this->db->join('role', 'role.id_role=pegawai.id_role');
        return $this->db->get('pegawai')->result_array();
    }

    public function updatepegawai(){
        $id = $this->input->post('id', true);
        $data = array(
            "nama_pegawai" => $this->input->post('nama', true),
            "alamat_pegawai" => $this->input->post('alamat', true),
            "no_telp_pegawai" => $this->input->post('notelp', true),
            "id_role" => $this->input->post('id_role', true),
        );
        $this->db->where('id_pegawai', $id);
        $this->db->update('pegawai', $data);
        redirect('admin/karyawan');
    }
    
    public function deletepeg($id){
        $this->db->where('id_pegawai', $id);
        $this->db->delete('pegawai');
        redirect('admin/karyawan');
    }
}
