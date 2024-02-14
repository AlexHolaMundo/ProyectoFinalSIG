<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index()
    {
		// Carga el modelo de Agencias
        $this->load->model('Agencia');
        $data['listadoAgencias'] = $this->Agencia->consultarTodos();
        $data['totalAgencias'] = count($data['listadoAgencias']);

        // Carga el modelo de cajeros
        $this->load->model('Cajero');
        $data['listadoCajeros'] = $this->Cajero->consultarTodos();
        $data['totalCajeros'] = count($data['listadoCajeros']);

        // Carga el modelo de corresponsales
        $this->load->model('Corresponsal');
        $data['listadoCorresponsales'] = $this->Corresponsal->consultarTodos();
        $data['totalCorresponsales'] = count($data['listadoCorresponsales']);


        // Carga la vista y pasa los datos de los corresponsales
        $this->load->view('../views/templates/header.php');
        $this->load->view('welcome_message', $data);
        $this->load->view('../views/templates/footer.php');
    }
}
