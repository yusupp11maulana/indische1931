<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_order');
    }

	public function index(){
		$login = $this->session->userdata('ktp');
        if($login){
			$data['ktp'] = $login; 
			$data['email'] = $this->session->userdata('email');
			$data['menub'] = $this->Model_order->viewmenubev();
			$data['menuf'] = $this->Model_order->viewmenufoods();
			$data['meja'] = $this->Model_order->viewmeja();
			$data['kodedet'] = $this->Model_order->kodedet();
			$data['kodeord'] = $this->Model_order->kodeord();
			$data['vieword'] = $this->Model_order->vieworder($data['ktp'],$data['kodeord']);
			$data['hatot'] = $this->Model_order->hatot($data['ktp'],$data['kodeord']);
            $this->load->view('order', $data);
        } else{
            redirect('login');
        }
	}

	public function addbev(){
        $this->form_validation->set_rules('idmenu','menu', 'required');
        $this->form_validation->set_rules('jumlah','jumlah', 'required');
        if ($this->form_validation->run() == FALSE) {
            redirect('Order');
        } else {
            $this->Model_order->insertdet();
        }
	}

	public function deletedet($id){
		$this->Model_order->hapus($id);
	}

	public function addorder(){
		$this->form_validation->set_rules('meja','meja', 'required');
		if ($this->form_validation->run() == FALSE) {
            redirect('Order');
        } else {
            $this->Model_order->tambahorder();
        }
	}
}
