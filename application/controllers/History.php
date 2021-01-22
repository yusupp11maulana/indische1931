<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_history');
    }

	public function index()
	{
		$login = $this->session->userdata('ktp');
		if($login){
			$data['ktp'] = $login; 
			$data['email'] = $this->session->userdata('email');
			$data['proses'] = $this->Model_history->viewdet($data['ktp']);
			$data['orderan'] = $this->Model_history->vieworder($data['ktp']);
			$this->load->view('history',$data);
        } else{
            redirect('login');
        }
	}
}
