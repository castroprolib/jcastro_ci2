<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Person_Model extends CI_Model {
	

	public function getPersons()
	{
		
		$this->db->select('*' );
		$this->db->from( 'persons');
		$query = $this->db->get()->result();
		
		return $query;	
	}
}

