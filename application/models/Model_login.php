<?php

class Model_transaksi extends CI_model
{
    public function LoginAdmin(){
        return $this->db->query('SELECT * FROM `produk` WHERE `jumlah`>=1 AND `statusproduk`="actived"')->result_array();

    }
}
