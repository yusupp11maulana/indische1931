<?php

class Model_order extends CI_model
{
    public function viewmenu(){
        return $this->db->get('menu')->result_array();
    }
}
