<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
	
	public function index()
	{
		$parametros = array('mostrar_barra' => $mostrar);
		$this->mostrar('', $parametros);
	}
}
