<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
	public function __construct(){
        parent::__construct();
    }

	public function index(){
		$data['ktp'] =$this->session->userdata('ktp');
		$data['email'] = $this->session->userdata('email');
		$this->load->view('index',$data);
	}
}
