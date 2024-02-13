<?php
class Corresponsal extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	//Insertar un corresponsal
	function insertar($datos)
	{
		$respuesta = $this->db->insert('corresponsal', $datos);
		return $respuesta;
	}

	//Obtener todos los corresponsales
	function consultarTodos()
	{
		$corresponsales = $this->db->get('corresponsal');
		if ($corresponsales->num_rows() > 0) {
			return $corresponsales->result();
		} else {
			return false;
		}
	}

	//Eliminar corresponsal por id
	function eliminar($id)
	{
		$this->db->where('idCorresponsal', $id);
		$return = $this->db->delete('corresponsal');
	}

	//Obtener corresponsal por id
	function obtenerPorId($id)
	{
		$this->db->where('idCorresponsal', $id);
		$corresponsales = $this->db->get('corresponsal');
		if ($corresponsales->num_rows() > 0) {
			return $corresponsales->row();
		} else {
			return false;
		}
	}

	//Function para actualizar un corresponsal
	function actualizar($id, $datos)
	{
		$this->db->where('idCorresponsal', $id);
		$return = $this->db->update('corresponsal', $datos);
		return $return;
	}
}
