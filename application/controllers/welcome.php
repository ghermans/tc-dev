<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		
		parent::__construct();
	//	$this->load->model('news_model');
	//	$this->load->model('log_model');		
		
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->database();
		$this->lang->load('auth');
		$this->load->helper('language');
		
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
	}

	//redirect if needed, otherwise display the user list
	function index()
	{

		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else {
			

   //	$data['news'] = $this->news_model->get_news();
	   $data['department'] = $this->department_model->get_departments();   	

		$this->load->view('templates/header', $data);		
		$this->load->view('dashboard/manager', $data);
					
		$this->load->view('templates/footer');		
		}	
	}
}
