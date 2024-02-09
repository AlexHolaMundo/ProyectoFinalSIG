<?php
class Agencias extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Agencia');
	}

	//Renderizar la vista de la lista de agencias
	public function index()
	{
		//$data['listadoAgencias'] = $this->Agencia->getAgencias();
		$this->load->view('../views/templates/header');
		$this->load->view('agencias/index');
		$this->load->view('../views/templates/footer');
	}
}
