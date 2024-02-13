<?php
class Cajero extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	//Insertar un cajero
	function insertar($datos)
	{
		$respuesta = $this->db->insert('cajero', $datos);
		return $respuesta;
	}

	//Obtener todos los cajeros
	function consultarTodos()
	{
		$cajeros = $this->db->get('cajero');
		if ($cajeros->num_rows() > 0) {
			return $cajeros->result();
		} else {
			return false;
		}
	}

	//Eliminar cajero por id
	function eliminar($id)
	{
		$this->db->where('idCajero', $id);
		$return = $this->db->delete('cajero');
	}

	//Obtener cajero por id
	function obtenerPorId($id)
	{
		$this->db->where('idCajero', $id);
		$cajeros = $this->db->get('cajero');
		if ($cajeros->num_rows() > 0) {
			return $cajeros->row();
		} else {
			return false;
		}
	}

	//Function para actualizar un cajero
	function actualizar($id, $datos)
	{
		$this->db->where('idCajero', $id);
		$return = $this->db->update('cajero', $datos);
		return $return;
	}
}
