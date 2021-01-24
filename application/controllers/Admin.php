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
            $data['order'] = $this->Model_admin->vieworders();
            $data['foods'] = $this->Model_admin->viewfood();
            $data['bev'] = $this->Model_admin->viewbev();
            $data['orders'] = $this->Model_admin->vieworder();
            $this->load->view('admin', $data);
        } else{
            redirect('login');
        }
    }
    
    public function karyawan(){
        $login = $this->session->userdata('id_pegawai');
        if($login){
            $data['user'] = $login;
            $data['id'] = $this->Model_admin->nomer();
            $data['view'] = $this->Model_admin->viewpeg();
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
        $this->Model_admin->tambahmenu();
        
    }

    public function insertpeg(){
        $this->form_validation->set_rules('nama','nama', 'required');
        $this->form_validation->set_rules('alamat','alamat', 'required');
        $this->form_validation->set_rules('ttlpeg','ttl', 'required');
        $this->form_validation->set_rules('notelp','telp', 'required');
        $this->form_validation->set_rules('id_role','role', 'required');
        if($this->form_validation->run() == false){
            redirect('admin/karyawan');
        } else{
            $this->Model_admin->insertpegawai();
        }
    }
    
    public function updatepeg(){
        $this->form_validation->set_rules('nama','nama', 'required');
        $this->form_validation->set_rules('alamat','alamat', 'required');
        $this->form_validation->set_rules('notelp','telp', 'required');
        $this->form_validation->set_rules('id_role','role', 'required');
        if($this->form_validation->run() == false){
            redirect('admin/karyawan');
        } else{
            $this->Model_admin->updatepegawai();
        }
    }

    public function delete($id){
        $this->Model_admin->deletepeg($id);
    }
}
