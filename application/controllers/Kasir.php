<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {
	public function __construct(){
        parent::__construct();
    }

	public function index()
	{
		$login = $this->session->userdata('id_pegawai');
        if($login){
            $data['user'] = $login; 
            $this->load->view('kasir', $data);
        } else{
            redirect('login');
        }
	}

	public function bill()
	{
		$login = $this->session->userdata('id_pegawai');
        if($login){
            $data['user'] = $login; 
            $this->load->view('bill', $data);
        } else{
            redirect('login');
        }
	}
}
