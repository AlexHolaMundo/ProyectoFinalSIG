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
		$data['listadoAgencias'] = $this->Agencia->consultarTodos();
		$this->load->view('../views/templates/header');
		$this->load->view('agencias/index', $data);
		$this->load->view('../views/templates/footer');
	}

	//Eliminar una agencia
	public function borrar($idAgencia)
	{
		$this->Agencia->eliminar($idAgencia);
		$this->session->set_flashdata('alerta', 'Agencia eliminada correctamente');
		redirect('agencias/index');
	}

	//Insertar una agencia
	public function guardar()
	{
		/* INICIO PROCESO DE SUBIDA DE ARCHIVO */
		$config['upload_path'] = APPPATH . '../uploads/agencias/'; //ruta de subida de archivos
		$config['allowed_types'] = 'jpeg|jpg|png'; //tipo de archivos permitidos
		$config['max_size'] = 6 * 1024; //definir el peso maximo de subida (5MB)
		$nombre_aleatorio = "agencia_" . time() * rand(100, 10000); //creando un nombre aleatorio
		$config['file_name'] = $nombre_aleatorio; //asignando el nombre al archivo subido
		$this->load->library('upload', $config); //cargando la libreria UPLOAD
		if ($this->upload->do_upload("fotografia")) { //intentando subir el archivo
			$dataArchivoSubido = $this->upload->data(); //capturando informacion del archivo subido
			$nombre_archivo_subido = $dataArchivoSubido["file_name"]; //obteniendo el nombre del archivo
		} else {
			$nombre_archivo_subido = ""; //Cuando no se sube el archivo el nombre queda VACIO
		}
		$datosNuevoAgencia = array(
			"nombre" => $this->input->post("nombre"),
			"direccion" => $this->input->post("direccion"),
			"email" => $this->input->post("email"),
			"telefono" => $this->input->post("telefono"),
			"ciudad" => $this->input->post("ciudad"),
			"provincia" => $this->input->post("provincia"),
			"fechaInaguracion" => $this->input->post("fechaInaguracion"),
			"horario" => $this->input->post("horario"),
			"horarioDiferido" => $this->input->post("horarioDiferido"),
			"fotografia" => $nombre_archivo_subido,
			"latitudAgencia" => $this->input->post("latitudAgencia"),
			"longitudAgencia" => $this->input->post("longitudAgencia")
		);
		$this->Agencia->insertar($datosNuevoAgencia);
		$this->session->set_flashdata('alerta', 'Agencia guardada correctamente');
		redirect('agencias/index');
	}
	//Editar una agencia
	public function editar($id)
	{
		$data['agenciaEditar'] = $this->Agencia->obtenerPorId($id);
		$this->load->view('../views/templates/header');
		$this->load->view('agencias/editar', $data);
		$this->load->view('../views/templates/footer');
	}
	//Actualizar una agencia
	public function actualizarAgencia()
	{
		$idAgencia = $this->input->post("idAgencia");
		// Obtener información de la agencia antes de la actualización
		$agenciaActual = $this->Agencia->obtenerPorId($idAgencia);

		// INICIO PROCESO DE SUBIDA DE ARCHIVO
		$config['upload_path'] = APPPATH . '../uploads/agencias/'; // ruta de subida de archivos
		$config['allowed_types'] = 'jpeg|jpg|png'; // tipo de archivos permitidos
		$config['max_size'] = 5 * 1024; // definir el peso máximo de subida (5MB)

		// Verificar si se está intentando subir una nueva foto
		if ($_FILES['nueva_foto_age']['error'] != 4) { // Error 4 significa que no se seleccionó ningún archivo
			$nombre_aleatorio = "agencia_" . time() * rand(100, 10000); // creando un nombre aleatorio
			$config['file_name'] = $nombre_aleatorio; // asignando el nombre al archivo subido

			$this->load->library('upload', $config); // cargando la librería UPLOAD

			if ($this->upload->do_upload("nueva_foto_age")) { // intentando subir el nuevo archivo
				$dataArchivoSubido = $this->upload->data(); // capturando información del archivo subido
				$nombre_archivo_subido = $dataArchivoSubido["file_name"]; // obteniendo el nombre del archivo
				// Eliminar la foto anterior si existe
				if (!empty($agenciaActual->fotografia)) {
					$ruta_foto_anterior = APPPATH . '../uploads/agencias/' . $agenciaActual->fotografia;
					if (file_exists($ruta_foto_anterior)) {
						unlink($ruta_foto_anterior);
					}
				}
			} else {
				$nombre_archivo_subido = $agenciaActual->fotografia; // Conservar la foto actual si la subida falla
			}
		} else {
			$nombre_archivo_subido = $agenciaActual->fotografia; // Conservar la foto actual si no se selecciona una nueva
		}
		//Datos Actualizados de la Agencia
		$datosAgencia = array(
			"nombre" => $this->input->post("nombre"),
			"direccion" => $this->input->post("direccion"),
			"email" => $this->input->post("email"),
			"telefono" => $this->input->post("telefono"),
			"ciudad" => $this->input->post("ciudad"),
			"provincia" => $this->input->post("provincia"),
			"fechaInaguracion" => $this->input->post("fechaInaguracion"),
			"horario" => $this->input->post("horario"),
			"horarioDiferido" => $this->input->post("horarioDiferido"),
			"fotografia" => $nombre_archivo_subido,
			"latitudAgencia" => $this->input->post("latitudAgencia"),
			"longitudAgencia" => $this->input->post("longitudAgencia")
		);
		$this->Agencia->actualizar($idAgencia, $datosAgencia);
		$this->session->set_flashdata('alerta', 'Agencia actualizada correctamente');
		redirect('agencias/index');
	}
}
