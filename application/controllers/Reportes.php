<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Reporte');
        $this->load->model("Agencia");
		$this->load->model("Cajero");
		$this->load->model("Corresponsal");
    }

    public function index()
    {
        $data["listadoAgencias"] = $this->Reporte->consultarTodos();
        $data["listadoCajeros"] = $this->Reporte->consultarTodo();
        $data["listadoCorresponsales"] = $this->Reporte->consultarTod();
        $this->load->view("../views/templates/header");
        $this->load->view("reportes/index", $data);
        $this->load->view("../views/templates/footer");
    }
}
?>
