<?php

class Principal extends CI_Controller {
	public $datos;
	public function index() {
		$this -> load -> view('general/Header');
		$this -> load -> view('principal/index');
		$this -> load -> view('general/Footer');
	}

	public function QuienesSomos() {
		$this -> load -> view('general/Header');
		$this -> load -> view('principal/quienessomos');
		$this -> load -> view('general/Footer');
	}

	public function Mision() {
		$this -> load -> view('general/Header');
		$this -> load -> view('principal/mision');
		$this -> load -> view('general/Footer');
	}

	public function Vision() {
		$this -> load -> view('general/Header');
		$this -> load -> view('principal/vision');
		$this -> load -> view('general/Footer');
	}
	
	public function Reglamento($var){
		$this->datos =  $var;
		$this -> load -> view('general/Header');
		$this -> load -> view('principal/reglamento');
		$this -> load -> view('general/Footer');
	}
}
