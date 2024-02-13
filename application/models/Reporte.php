<?php
class Reporte extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		// Carga la base de datos
		$this->load->database();
	}

	function consultarTodos()
	{
		$agencias = $this->db->get("agencia");
		if ($agencias->num_rows() > 0) {
			return $agencias->result();
		} else {
			return false;
		}
	}

	function consultarTodo()
	{
		$cajeros = $this->db->get("cajero");
		if ($cajeros->num_rows() > 0) {
			return $cajeros->result();
		} else {
			return false;
		}
	}
	function consultarTod()
	{
		$corresponsales = $this->db->get("corresponsal");
		if ($corresponsales->num_rows() > 0) {
			return $corresponsales->result();
		} else {
			return false;
		}
	}
}
