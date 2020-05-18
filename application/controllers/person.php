<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Person extends CI_Controller {

	public function __construct()
	{
		// colocar el parent construct, si no se coloca no carga el load->view
		parent::__construct();

		// $this->load->libraries('database');

		$this->load->database();  

		// $this->load->helper('url');

		// $this->load->helper('form');

		$this->load->helper(array('url', 'form'));

		$this->load->model('person_model');


	}

	public function index()
	{
		$data['title'] = 'Persons';

		$data['persons'] = $this->person_model->getPersons();

		// print_r($data);

		$this->load->view('persons',$data);
	}
}

