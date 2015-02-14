<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vacation extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->load->helper('url');

		$this->load->database();

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
		$this->load->helper('language');
	}

	//redirect if needed, otherwise display the page
	function index()
	{

		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		$this->load->view('templates/header');		
		$this->load->view('vacation/index');
		$this->load->view('templates/footer');		
	}
	
	function calendar()
	{

		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else {
		
	   $data['department'] = $this->department_model->get_departments();
	   $this->load->vars($data);
	 	
		$this->load->view('templates/header', $data);		
		$this->load->view('vacation/calendar', $data);
		$this->load->view('templates/footer');		
	}	
}
}
