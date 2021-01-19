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
			$data['menu'] = $this->Model_order->viewmenu();
            $this->load->view('order', $data);
        } else{
            redirect('login');
        }
		$this->load->view('order');
	}
}
