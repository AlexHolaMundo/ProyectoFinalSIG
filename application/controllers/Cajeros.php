<?php
class Cajeros extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Cajero');
		$this->load->model('Agencia');
	}

	//Renderizar la vista de la lista de cajeros
	public function index()
	{
		$data['listadoAgencias'] = $this->Agencia->consultarTodos();
		$data['listadoCajeros'] = $this->Cajero->consultarTodos();
		$this->load->view('../views/templates/header');
		$this->load->view('cajeros/index', $data);
		$this->load->view('../views/templates/footer');
	}

	//Eliminar un cajero
	public function borrar($idCajero)
	{
		$this->Cajero->eliminar($idCajero);
		$this->session->set_flashdata('alerta', 'Cajero eliminado correctamente');
		redirect('cajeros/index');
	}

	//Insertar un cajero
	public function guardar()
	{
		// Obtener el nombre de la agencia seleccionada
		$idAgencia = $this->input->post("id_agencia");
		$agencia = $this->Agencia->obtenerPorId($idAgencia);
		$nombreAgencia = ($agencia) ? $agencia->nombre : "";
		$datosNuevoCajero = array(
			"estado" => $this->input->post("estado"),
			"tipo" => $this->input->post("tipo"),
			"provincia" => $this->input->post("provincia"),
			"ciudad" => $this->input->post("ciudad"),
			"serie" => $this->input->post("serie"),
			"latitudCajero" => $this->input->post("latitudCajero"),
			"longitudCajero" => $this->input->post("longitudCajero"),
			"idAgencia" => $this->input->post("id_agencia"),
			"nombreAgencia" => $nombreAgencia
		);
		$this->Cajero->insertar($datosNuevoCajero);
		$this->session->set_flashdata('alerta', 'Cajero guardado correctamente');
		redirect('cajeros/index');
	}

	//Editar un cajero
	public function editar($id)
	{
		$data['cajeroEditar'] = $this->Cajero->obtenerPorId($id);
		$data['listadoAgencias'] = $this->Agencia->consultarTodos();
		$data['cajeroActualizado'] = $this->Cajero->obtenerPorId($id);
		$this->load->view('../views/templates/header');
		$this->load->view('cajeros/editar', $data);
		$this->load->view('../views/templates/footer');
	}


	//Actualizar un cajero
	public function actualizarCajero()
	{
		$idCajero = $this->input->post("idCajero");
		// Obtener el nombre de la agencia seleccionada
		$idAgencia = $this->input->post("id_agencia");
		$agencia = $this->Agencia->obtenerPorId($idAgencia);
		$nombreAgencia = ($agencia) ? $agencia->nombre : "";
		//Datos Actualizados del cajero
		$datosCajero = array(
			"estado" => $this->input->post("estado"),
			"tipo" => $this->input->post("tipo"),
			"provincia" => $this->input->post("provincia"),
			"ciudad" => $this->input->post("ciudad"),
			"serie" => $this->input->post("serie"),
			"latitudCajero" => $this->input->post("latitudCajero"),
			"longitudCajero" => $this->input->post("longitudCajero"),
			"idAgencia" => $idAgencia,
			"nombreAgencia" => $nombreAgencia
		);
		$this->Cajero->actualizar($idCajero, $datosCajero);
		$this->session->set_flashdata('alerta', 'Cajero actualizado correctamente');
		redirect('cajeros/index');
	}
}
