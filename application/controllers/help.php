<?php
class Help extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
      $this->load->model('department_model', '', TRUE);
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->database();
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->lang->load('auth');
		$this->load->helper('language');	
	}

public function index()
{
	 $data['department'] = $this->department_model->get_departments();
	 $data['title'] = 'Department archive';

	$this->load->view('templates/header');
	$this->load->view('support/index', $data);
	$this->load->view('templates/footer');
}

public function create()
{
	$this->load->helper('form');
	$this->load->library('form_validation');


	$this->form_validation->set_rules('name', 'Name', 'required');
	$this->form_validation->set_rules('manager', 'Manager', 'required');

	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('templates/header');
		$this->load->view('departments/index');
		$this->load->view('templates/footer');

	}
	else
	{
		$this->department_model->create_department();
		$this->load->view('departments/index');
	}
}

public function view($id)
{
	$data['news_item'] = $this->news_model->get_news($id);

	if (empty($data['news_item']))
	{
		show_404();
	}

	$data['title'] = $data['news_item']['title'];

	$this->load->view('templates/header', $data);
	$this->load->view('news/view', $data);
	$this->load->view('templates/footer');
}

}