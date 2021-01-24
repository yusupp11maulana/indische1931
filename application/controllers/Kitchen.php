<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kitchen extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('Model_admin');
        $this->load->model('Model_kitchen');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$login = $this->session->userdata('id_pegawai');
        if($login){
            $data['user'] = $login;
            $data['order'] = $this->Model_admin->vieworders();
            $data['foods'] = $this->Model_admin->viewfood();
            $data['bev'] = $this->Model_admin->viewbev();
            $data['orderan'] = $this->Model_kitchen->vieworder();
            $this->load->view('kitchen', $data);
        } else{
            redirect('login');
        }
    }

    public function kitchenready(){
        $this->Model_kitchen->update();
    }
}
