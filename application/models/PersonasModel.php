<?php

class Personasmodel extends CI_Model {

	public $idPersona;
	public $Nombre;
	public $Apellido;
	public $Sexo;
	public $Nacimiento;
	public $Tipo;

	function __construct() {
		parent::__construct();
	}

	function buscarVendedor() {
		$query = $this -> db -> select();
	}

}
