<?php
class Agencia extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	//Insertar una agencia
	function insertar($datos)
	{
		$respuesta = $this->db->insert('agencia', $datos);
		return $respuesta;
	}

	//Obtener todas las agencias
	function consultarTodos()
	{
		$agencias = $this->db->get('agencia');
		if ($agencias->num_rows() > 0) {
			return $agencias->result();
		} else {
			return false;
		}
	}

	//Eliminar agencia por id
	function eliminar($id)
	{
		$this->db->where('idAgencia', $id);
		$return = $this->db->delete('agencia');
	}

	//Obtener agencia por id
	function obtenerPorId($id)
	{
		$this->db->where('idAgencia', $id);
		$agencias = $this->db->get('agencia');
		if ($agencias->num_rows() > 0) {
			return $agencias->row();
		} else {
			return false;
		}
	}

	//Function para actualizar una agencia
	function actualizar($id, $datos)
	{
		$this->db->where('idAgencia', $id);
		$return = $this->db->update('agencia', $datos);
		return $return;
	}
}
