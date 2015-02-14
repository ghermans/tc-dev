<?php
class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
      $this->load->model('news_model', '', TRUE);
      $this->lang->load('news');
	}

public function index()
{
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else {
	$data['department'] = $this->department_model->get_departments();			
	$data['news'] = $this->news_model->get_news();
	$data['title'] = 'News archive';

	$this->load->view('templates/header', $data);
	$this->load->view('news/index', $data);
	$this->load->view('templates/footer');
}
}

public function create()
{
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else {
	$this->load->helper('form');
	$this->load->library('form_validation');

	$data['title'] = 'Create a news item';

	$this->form_validation->set_rules('title', 'Title', 'required');
	$this->form_validation->set_rules('text', 'text', 'required');

	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('templates/header', $data);
		$this->load->view('news/create', $data);
		$this->load->view('templates/footer');

	}
	else
	{   $this->news_model->set_news();
       $this->sendEmail(); 
		 $this->load->view('templates/header', $data);       
		 $this->load->view('news/create', $data);
		 $this->load->view('templates/footer');		 
	}
}
}

public function more($id)
{
	$data['news_item'] = $this->news_model->get_news($id);

	if (empty($data['news_item']))
	{
		show_404();
	}

	$data['title'] = $data['news_item']['title'];

	$this->load->view('news/create', $data);
}

public function remove($id)
{
	$data['news_item'] = $this->news_model->remove_news($id);

	if (empty($data['news_item']))
	{
		show_404();
	}

	redirect('news/create', $data);
}


public function change($id)
{
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else {
	$data['news_item'] = $this->news_model->get_news($id);

	if (empty($data['news_item']))
	{
		show_404();
	}
	
	$data['title'] = $data['news_item']['title'];
	$data['department'] = $this->department_model->get_departments();
	$this->load->vars($data);
   
   $this->load->view('templates/header', $data);
	$this->load->view('news/change', $data);
	$this->load->view('templates/footer');
	
}
}

public function sendEmail(){			
		// Email configuration
	if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else {
		$this->load->library('email');
		$this->email->from('services@timecontrol.be', "iDevelopment Testing");
		$this->email->to("glenn.hermans@idevelopment.be");
		$this->email->cc("glenn.hermans@unixtrip.org");
		$this->email->subject("We have a new announcement");
		$this->email->message("Mail sent test message...");
			
		$data['message'] = "Sorry Unable to send email...";	
		if($this->email->send()){					
			$data['message'] = "Mail sent...";			
		}	
		 				
		// forward to index page
		redirect('news/index', $data);		
	}
}
}