<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Map_model extends CI_Model {


	/*
	 * get all the unit info
	 */
	function get_units() {

		$this->db->join('blocks', 'blocks.block_id = units.unit_type');
		$query = $this->db->get('units');
		if ($query->num_rows > 0) {
	 	return $query->result();
	 }
	}
}