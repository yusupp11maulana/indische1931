<?php

class Model_kasir extends CI_model
{
    public function vieworder(){
        $this->db->join('customer', 'customer.no_ktp=orderan.no_ktp');
        $this->db->join('meja', 'meja.id_meja=orderan.id_meja');
        return $this->db->get('orderan')->result_array();
    }

    public function vieworderbill(){
        $status = "Belum Terbayar";
        $tanggal = date('Y-m-d');
        $this->db->where('tgl_order',$tanggal);
        $this->db->where('status_bayar',$status);
        $this->db->join('customer', 'customer.no_ktp=orderan.no_ktp');
        $this->db->join('meja', 'meja.id_meja=orderan.id_meja');
        return $this->db->get('orderan')->result_array();
    }

    public function promo(){
        $id = $this->input->post('id', true);
        $this->db->where('id_order', $id);
        $select = $this->db->get('orderan')->result_array();
        $harga = 0;
        foreach($select as $s):
            $harga=$s['total_harga'];
        endforeach;
        $promo = $harga * 0.8;
        $data = array(
            "promo" => "Black Card",
            "total_harga" => $promo,
        );
        $this->db->update('orderan', $data);
        redirect('kasir/bill');
    }

    public function bayarkuy(){
        $meja = $this->input->post('meja', true);
        $pgw = $this->input->post('pgw', true);
        $id = $this->input->post('id', true);
        $uang = $this->input->post('bayar', true);
        $this->db->where('id_order', $id);
        $select = $this->db->get('orderan') ->result_array();
        $harga = 0;
        foreach($select as $s):
            $harga=$s['total_harga'];
        endforeach;
        $harganya = $harga;
        $kembalian = $uang - $harganya;
        $data=array(
            "id_pegawai" => $id,
            "pembayaran" => $uang,
            "kembalian" => $kembalian,
            "Status_bayar" => "Terbayar",
        );
        $this->db->where('id_order', $id);
        $this->db->update('orderan', $data);

        $mejadata=array(
            "ket_meja" => "ready"
        );
        $this->db->where('id_meja', $meja);
        $this->db->update('meja', $mejadata);
        redirect('kasir');
    }
}
