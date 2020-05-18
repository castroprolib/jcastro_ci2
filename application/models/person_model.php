<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Person_Model extends CI_Model {
	

	public function getPersons()
	{
		
		$this->db->select('*' );
		$this->db->from( 'jcastro_ci2.persons');
		$query = $this->db->get()->result();
		
		return $query;	
	}

	public function getcountrys()
	{
		
		$this->db->select('id,country' );
		$this->db->from( 'jcastro_ci2.countrys');
		$query = $this->db->get()->result();
		
		return $query;	
	}
}

