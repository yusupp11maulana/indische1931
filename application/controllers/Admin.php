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

    public function menu(){
        $login = $this->session->userdata('id_pegawai');
        if($login){
            $data['user'] = $login;
            $this->load->view('menu', $data);
        } else{
            redirect('login');
        }
    }

    public function Addmenu(){
        $this->form_validation->set_rules('namamenu', 'required');
        $this->form_validation->set_rules('hargamenu', 'required');
        $this->form_validation->set_rules('jenismenu', 'required');
        if($this->form_validation->run() == false){
            $data = array(
            "nama_menu" => $this->input->post('namamenu', true),
            "harga_menu" => $this->input->post('hargamenu', true),
            "jenis_menu" => $this->input->post('jenismenu', true),
        );
        var_dump($data);die;
            // redirect('admin/menu');
        } else{
            $data = array(
            "nama_menu" => $this->input->post('namamenu', true),
            "harga_menu" => $this->input->post('hargamenu', true),
            "jenis_menu" => $this->input->post('jenismenu', true),
        );
        var_dump($data);die;
            // $this->Model_admin->tambahmenu();
            // redirect('admin/menu');
        }
    }
}
