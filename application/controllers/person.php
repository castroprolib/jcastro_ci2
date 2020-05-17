<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Person extends CI_Controller {

	public function __construct()
	{
		// colocar el parent construct, si no se coloca no carga el load->view
		parent::__construct();  

		$this->load->helper('url');

		$this->load->helper('form');


	}

	public function index()
	{
		$data['title'] = 'Persons';
		$this->load->view('persons',$data);
	}
}

