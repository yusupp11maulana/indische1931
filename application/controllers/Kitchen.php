<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kitchen extends CI_Controller {
	public function __construct(){
        parent::__construct();
    }

	public function index()
	{
		$login = $this->session->userdata('id_pegawai');
        if($login){
            $data['user'] = $login; 
            $this->load->view('kitchen', $data);
        } else{
            redirect('login');
        }
	}
}
