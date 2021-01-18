<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('Model_login');
  }

	public function index(){
        $this->load->view('login');
    }

  public function login_official(){
    $this->form_validation->set_rules('unameadm', 'required');
    $this->form_validation->set_rules('passadm', 'required');
    if($this->form_validation->run() == false){
        $this->Model_login->LoginAdmin();
    } else{
        $this->load->view('login');
    }
  }

  public function regist(){
		$this->load->view('registrasi');
  }

  public function logout(){
    $this->Model_login->logout();
  }
  
}
