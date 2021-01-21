<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Model_admin');
        $this->load->library('form_validation');
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
    public function delmenu($id){
        $this->Model_admin->deletemenu($id);
    }

    public function upmenu($id){
        $this->Model_admin->activmenu($id);
    }

    public function menu(){
        $login = $this->session->userdata('id_pegawai');
        if($login){
            $data['menu'] = $this->Model_admin->viewmenu();
            $data['user'] = $login;
            $this->load->view('menu', $data);
        } else{
            redirect('login');
        }
    }

    public function addmenu(){
        $this->form_validation->set_rules('namamenu', 'required');
        $this->form_validation->set_rules('hargamenu', 'required');
        $this->form_validation->set_rules('jenismenu', 'required');
        if($this->form_validation->run() == false){
            $this->Model_admin->tambahmenu();
        }
    }
}
