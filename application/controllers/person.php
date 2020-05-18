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

	public function create()
	{
		// echo json_encode($_POST);

		$date = date('Y-m-d');

		$data = array(
			'first_name' => $_POST['first_name'],
			'last_name' => $_POST['last_name'],
			'sex' => $_POST['sex'],
			'country_id' => $_POST['country_id'],
			'created_at' => $date,
			'updated_at' => $date
			 );

		$query = $this->db->insert('jcastro_ci2.persons', $data);


		echo json_encode($query);
	}


	public function getCountrys()
	{

		$data = $this->person_model->getCountrys();
		
		// print_r($_POST);

		echo json_encode($data);
	}

	public function getSex()
	{	

		$data = array(
			'0' => 'male',
			'1' => 'female'
			 );

		echo json_encode($data);
	}
}

