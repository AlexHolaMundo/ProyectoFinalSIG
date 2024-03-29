<?php
class Corresponsales extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Corresponsal');
	}

	//Renderizar la vista de la lista de corresponsales
	public function index()
	{
		$data['listadoCorresponsales'] = $this->Corresponsal->consultarTodos();
		$this->load->view('../views/templates/header');
		$this->load->view('corresponsales/index', $data );
		$this->load->view('../views/templates/footer');
	}

	//Eliminar un corresponsal
	public function borrar($idCorresponsal)
	{
		$this->Corresponsal->eliminar($idCorresponsal);
		$this->session->set_flashdata('alerta', 'Corresponsal eliminado correctamente');
		redirect('corresponsales/index');
	}

	//Insertar un corresponsal
	public function guardar()
	{
		/* INICIO PROCESO DE SUBIDA DE ARCHIVO */
		$config['upload_path'] = APPPATH . '../uploads/corresponsales/'; //ruta de subida de archivos
		$config['allowed_types'] = 'jpeg|jpg|png'; //tipo de archivos permitidos
		$config['max_size'] = 6 * 1024; //definir el peso maximo de subida (5MB)
		$nombre_aleatorio = "corresponsal_" . time() * rand(100, 10000); //creando un nombre aleatorio
		$config['file_name'] = $nombre_aleatorio; //asignando el nombre al archivo subido
		$this->load->library('upload', $config); //cargando la libreria UPLOAD
		if ($this->upload->do_upload("fotografia")) { //intentando subir el archivo
			$dataArchivoSubido = $this->upload->data(); //capturando informacion del archivo subido
			$nombre_archivo_subido = $dataArchivoSubido["file_name"]; //obteniendo el nombre del archivo
		} else {
			$nombre_archivo_subido = ""; //Cuando no se sube el archivo el nombre queda VACIO
		}
		$datosNuevoCorresponsal = array(
			"nombre" => $this->input->post("nombre"),
			"direccion" => $this->input->post("direccion"),
			"telefono" => $this->input->post("telefono"),
			"descripcion" => $this->input->post("descripcion"),
			"horario" => $this->input->post("horario"),
			"fotografia" => $nombre_archivo_subido,
			"latitudCorresponsal" => $this->input->post("latitudCorresponsal"),
			"longitudCorresponsal" => $this->input->post("longitudCorresponsal")
		);
		$this->Corresponsal->insertar($datosNuevoCorresponsal);
		$this->session->set_flashdata('alerta', 'Corresponsal guardado correctamente');
		redirect('corresponsales/index');
	}

	//Editar un corresponsal
	public function editar($id)
	{
		$data['corresponsalEditar'] = $this->Corresponsal->obtenerPorId($id);
		$this->load->view('../views/templates/header');
		$this->load->view('corresponsales/editar', $data);
		$this->load->view('../views/templates/footer');
	}

	//Actualizar un corresponsal
	public function actualizarCorresponsal()
	{
		$idCorresponsal = $this->input->post("idCorresponsal");
		// Obtener información del corresponsal antes de la actualización
		$corresponsalActual = $this->Corresponsal->obtenerPorId($idCorresponsal);

		// INICIO PROCESO DE SUBIDA DE ARCHIVO
		$config['upload_path'] = APPPATH . '../uploads/corresponsales/'; // ruta de subida de archivos
		$config['allowed_types'] = 'jpeg|jpg|png'; // tipo de archivos permitidos
		$config['max_size'] = 5 * 1024; // definir el peso máximo de subida (5MB)

		// Verificar si se está intentando subir una nueva foto
		if ($_FILES['nueva_foto_cor']['error'] != 4) { // Error 4 significa que no se seleccionó ningún archivo
			$nombre_aleatorio = "corresponsal_" . time() * rand(100, 10000); // creando un nombre aleatorio
			$config['file_name'] = $nombre_aleatorio; // asignando el nombre al archivo subido

			$this->load->library('upload', $config); // cargando la librería UPLOAD

			if ($this->upload->do_upload("nueva_foto_cor")) { // intentando subir el nuevo archivo
				$dataArchivoSubido = $this->upload->data(); // capturando información del archivo subido
				$nombre_archivo_subido = $dataArchivoSubido["file_name"]; // obteniendo el nombre del archivo
				// Eliminar la foto anterior si existe
				if (!empty($corresponsalActual->fotografia)) {
					$ruta_foto_anterior = APPPATH . '../uploads/agencias/' . $corresponsalActual->fotografia;
					if (file_exists($ruta_foto_anterior)) {
						unlink($ruta_foto_anterior);
					}
				}
			} else {
				$nombre_archivo_subido = $corresponsalActual->fotografia; // Conservar la foto actual si la subida falla
			}
		} else {
			$nombre_archivo_subido = $corresponsalActual->fotografia; // Conservar la foto actual si no se selecciona una nueva
		}
		//Datos actualizados del corresponsal
		$datosCorresponsal = array(
			"nombre" => $this->input->post("nombre"),
			"direccion" => $this->input->post("direccion"),
			"telefono" => $this->input->post("telefono"),
			"descripcion" => $this->input->post("descripcion"),
			"horario" => $this->input->post("horario"),
			"fotografia" => $nombre_archivo_subido,
			"latitudCorresponsal" => $this->input->post("latitudCorresponsal"),
			"longitudCorresponsal" => $this->input->post("longitudCorresponsal")
		);
		$this->Corresponsal->actualizar($idCorresponsal, $datosCorresponsal);
		$this->session->set_flashdata('alerta', 'Corresponsal actualizado correctamente');
		redirect('corresponsales/index');
	}
}
