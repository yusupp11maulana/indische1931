<?php

class Model_order extends CI_model
{
    public function viewmenubev(){
        $status = "actived";
        $jenis = "Beverages"; 
        $this->db->where('ket_menu',$status);
        $this->db->where('jenis_menu',$jenis);
        return $this->db->get('menu')->result_array();
    }

    public function viewmenufoods(){
        $status = "actived";
        $jenis = "Foods"; 
        $this->db->where('ket_menu',$status);
        $this->db->where('jenis_menu',$jenis);
        return $this->db->get('menu')->result_array();
    }

    public function viewmeja(){
        $status = "ready"; 
        $this->db->where('ket_meja',$status);
        return $this->db->get('meja')->result_array();
    }

    function kodedet(){
        $query = $this->db->query("SELECT MAX(id_detail) as kodedet FROM detail_order")->row_array()['kodedet'];
        $urutan = (int) substr($query, 3, 5);
        $urutan++;
        $simbol = "Det";
        $kodenya = $simbol . sprintf("%05s", $urutan);
        return $kodenya;
	}
	function kodeord(){
        $query = $this->db->query("SELECT MAX(id_order) as kodeord FROM orderan")->row_array()['kodeord'];
        $urutan = (int) substr($query, 3, 5);
        $urutan++;
        $simbol = "Ord";
        $kodenya = $simbol . sprintf("%05s", $urutan);
        return $kodenya;
    }

    public function insertdet(){
        //MENU HARGA
        $id = $this->input->post('idmenu', true);
        $this->db->select('harga_menu');
        $this->db->where('id_menu',$id);
        $select = $this->db->get('menu') -> result_array();
        foreach ($select as $s):
            $harga = $s['harga_menu'];
        endforeach;
        $jumlah = $this->input->post('jumlah', true);
        $total = $jumlah * $harga;
        $status = "On Proses";
        $data = array(
            "id_detail" => $this->input->post('kodedet', true),
            "id_order" => $this->input->post('kodeord', true),
            "no_ktp" => $this->input->post('noktp', true),
            "id_menu" => $id,
            "jumlah_order" => $jumlah,
            "harga_order" => $total,
            "status_order" => $status,
            "statusnya" => "Belum Terbayar",
        );
        $this->db->insert('detail_order', $data);
        redirect('order');
    }

    public function vieworder($ktp, $idm){
        $this->db->select('nama_menu');
        $this->db->select('harga_menu');
        $this->db->select('jumlah_order');
        $this->db->select('harga_order');
        $this->db->select('id_detail');
        $this->db->from('detail_order');
        $this->db->where('no_ktp',$ktp);
        $this->db->where('id_order',$idm);
        $this->db->join('menu','menu.id_menu=detail_order.id_menu');
        return $this->db->get()->result_array();
    }

    public function hapus($id){
        $this->db->where('id_detail', $id);
        $this->db->delete('detail_order');
        redirect('order');
    }

    public function hatot($ktp, $idm){
        $this->db->where('no_ktp',$ktp);
        $this->db->where('id_order',$idm);
        $this->db->select_sum('harga_order');
        $query = $this->db->get('detail_order')->result_array();
        foreach ($query as $q) :
            $harga = $q['harga_order'];
        endforeach;
        return $harga;
    }

    public function tambahorder(){
        $kode = $this->input->post('kodeord', true);
        $this->db->where('id_order', $kode);
        $this->db->select_sum('jumlah_order');
        $query = $this->db->get('detail_order')->result_array();
        foreach ($query as $q) :
            $jumlah = $q['jumlah_order'];
        endforeach;
        date_default_timezone_set("Asia/Jakarta");
        $tglorder = date('Y-m-d');
        $waktu = date('H:i:s');
        $data = array(
            "id_order" => $kode,
            "no_ktp" => $this->input->post('noktp', true),
            "id_meja" => $this->input->post('meja', true),
            "jumlah_orderan" => $jumlah,
            "total_harga" => $this->input->post('hatot', true),
            "tgl_order" => $tglorder,
            "waktu_order" => $waktu,
            "status_bayar" =>"Belum Terbayar",
        );
        $this->db->insert('orderan', $data);
        $datameja = array(
            "ket_meja" => "booked",
        );
        $this->db->where('id_meja', $this->input->post('meja'));
        $this->db->update('meja',$datameja);
        redirect('history');
    }
}
