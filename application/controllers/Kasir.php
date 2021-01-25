<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('Model_admin');
        $this->load->model('Model_kasir');
    }

	public function index(){
		$login = $this->session->userdata('id_pegawai');
        if($login){
            $data['user'] = $login;
            $data['order'] = $this->Model_admin->vieworders();
            $data['foods'] = $this->Model_admin->viewfood();
            $data['bev'] = $this->Model_admin->viewbev();
            $data['orderan'] = $this->Model_kasir->vieworder();
            $this->load->view('kasir', $data);
        } else{
            redirect('login');
        }
	}

	public function bill(){
		$login = $this->session->userdata('id_pegawai');
        if($login){
            $data['user'] = $login; 
            $data['order'] = $this->Model_admin->vieworders();
            $data['foods'] = $this->Model_admin->viewfood();
            $data['bev'] = $this->Model_admin->viewbev();
            $data['orders'] = $this->Model_kasir->vieworderbill();
            $this->load->view('bill', $data);
        } else{
            redirect('login');
        }
    }
    
    public function promoblackcard(){
        $this->Model_kasir->promo();
    }

    public function bayar(){
        $this->form_validation->set_rules('bayar','Nominal' , 'required');
        if($this->form_validation->run() == false){
            redirect('kasir/bill');
        } else{
            $this->Model_kasir->bayarkuy();
        }
    }
}
