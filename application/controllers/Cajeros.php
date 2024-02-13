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
		$datosNuevoCajero = array(
			"estado" => $this->input->post("estado"),
			"tipo" => $this->input->post("tipo"),
			"provincia" => $this->input->post("provincia"),
			"ciudad" => $this->input->post("ciudad"),
			"serie" => $this->input->post("serie"),
			"latitudCajero" => $this->input->post("latitudCajero"),
			"longitudCajero" => $this->input->post("longitudCajero"),
		);
		$this->Cajero->insertar($datosNuevoCajero);
		$this->session->set_flashdata('alerta', 'Cajero guardado correctamente');
		redirect('cajeros/index');
	}

	//Editar un cajero
	public function editar($id)
	{
		$data['cajeroEditar'] = $this->Cajero->obtenerPorId($id);
		$this->load->view('../views/templates/header');
		$this->load->view('cajeros/editar', $data);
		$this->load->view('../views/templates/footer');
	}


	// Actualizar un cajero
public function actualizarCajero()
{
    // Obtener el ID del cajero a actualizar
    $idCajero = $this->input->post("idCajero");

    // Obtener los datos del formulario
    $datosCajero = array(
        "estado" => $this->input->post("estado"),
        "tipo" => $this->input->post("tipo"),
        "provincia" => $this->input->post("provincia"),
        "ciudad" => $this->input->post("ciudad"),
        "serie" => $this->input->post("serie"),
        "latitudCajero" => $this->input->post("latitudCajero"),
        "longitudCajero" => $this->input->post("longitudCajero"),
    );

    // Cargar el modelo Cajero
    $this->load->model('Cajero');

    // Actualizar el cajero en la base de datos
    $actualizado = $this->Cajero->actualizar($idCajero, $datosCajero);

    if ($actualizado) {
        $this->session->set_flashdata('alerta', 'Cajero actualizado correctamente');
    } else {
        $this->session->set_flashdata('alerta', 'Error al actualizar el cajero');
    }

    // Redireccionar a la página de lista de cajeros
    redirect('cajeros/index');
}

}
