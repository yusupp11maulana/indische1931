<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

	public function index(){
        $login = $this->session->userdata('id_pegawai');
        if($login){
            $data['user'] = $login; 
            $this->load->view('admin', $data);
        } else{
            redirect('login');
        }
    }
    
    public function karyawan(){
        $login = $this->session->userdata('id_pegawai');
        if($login){
            $data['user'] = $login;
            $this->load->view('karyawan', $data);
        } else{
            redirect('login');
        }
    }
}
