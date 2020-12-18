<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {

	public function index()
	{
		$this->load->view('kasir');
	}

	public function bill()
	{
		$this->load->view('bill');
	}
}
