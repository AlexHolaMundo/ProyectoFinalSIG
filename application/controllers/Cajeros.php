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
		/* INICIO PROCESO DE SUBIDA DE ARCHIVO */
		$config['upload_path'] = APPPATH . '../uploads/cajeros/'; //ruta de subida de archivos
		$config['allowed_types'] = 'jpeg|jpg|png'; //tipo de archivos permitidos
		$config['max_size'] = 6 * 1024; //definir el peso maximo de subida (5MB)
		$nombre_aleatorio = "cajero_" . time() * rand(100, 10000); //creando un nombre aleatorio
		$config['file_name'] = $nombre_aleatorio; //asignando el nombre al archivo subido
		$this->load->library('upload', $config); //cargando la libreria UPLOAD
		if ($this->upload->do_upload("fotografia")) { //intentando subir el archivo
			$dataArchivoSubido = $this->upload->data(); //capturando informacion del archivo subido
			$nombre_archivo_subido = $dataArchivoSubido["file_name"]; //obteniendo el nombre del archivo
		} else {
			$nombre_archivo_subido = ""; //Cuando no se sube el archivo el nombre queda VACIO
		}
		// Obtener el nombre de la agencia seleccionada
		$idAgencia = $this->input->post("id_agencia");
		$agencia = $this->Agencia->obtenerPorId($idAgencia);
		$nombreAgencia = ($agencia) ? $agencia->nombre : "";
		$datosNuevoCajero = array(
			"estado" => $this->input->post("estado"),
			"tipo" => $this->input->post("tipo"),
			"provincia" => $this->input->post("provincia"),
			"ciudad" => $this->input->post("ciudad"),
			"fotografia" => $nombre_archivo_subido,
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
	public function editar($idCajero)
	{
		$datosCajero = $this->Cajero->obtenerPorId($idCajero);
		$this->load->view('../views/templates/header');
		$this->load->view('cajeros/editar', $datosCajero);
		$this->load->view('../views/templates/footer');
	}

	//Actualizar un cajero
	public function actualizarCajero()
	{
		$idCajero = $this->input->post("idCajero");
	}
}
