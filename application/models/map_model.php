<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Map_model extends CI_Model {


	/*
	 * get all the unit info
	*/
	function get_units() {

		$this->db->join('blocks', 'blocks.block_id = units.unit_type');
		$this->db->join('tenants', 'tenants.tenant_id = units.occupied', 'left');
		$query = $this->db->get('units');
		if ($query->num_rows > 0) {
	 	return $query->result();
	 }
	}

	function get_blocks() {

		$query = $this->db->get('blocks');
		if ($query->num_rows > 0) {

			return $query->result();

		}
	}

	function get_unit($id) {

		$this->db->join('blocks', 'blocks.block_id = units.unit_type');
		$this->db->join('tenants', 'tenants.tenant_id = units.occupied', 'left');
		$this->db->where('units.unit_id', $id);
		$query = $this->db->get('units');
		if ($query->num_rows == 1) {
			return $query->result();
		}
	}
}