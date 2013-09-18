<?php

class Principal extends CI_Controller{
	
	public function index(){
		$this->load->view('general/Header');
		$this->load->view('index');
		$this->load->view('general/Footer');
	}
}
