<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->database();
		$this->load->model('settings_model');
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->helper('language');
		$this->lang->load('auth');
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
	}
	
	public function index()
	{
	   $data['department'] = $this->department_model->get_departments();
	   $this->load->vars($data);
		
		$this->load->view('templates/header', $data);		
		$this->load->view('settings/main');
		$this->load->view('templates/footer');		
	}
	
	public function mailboxes()
	{
	if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else {
	$this->load->helper('form');
	$data['department'] = $this->department_model->get_departments();
	$data['mailbox'] = $this->settings_model->get_mailboxes();
		
	
		 $this->load->view('templates/header', $data);       
		 $this->load->view('settings/mailboxes', $data);
		 $this->load->view('templates/footer');
	 }	
	 }
		
	
	public function addmailbox()
	{

	if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else {
	$this->load->helper('form');

	$data['title'] = 'Add new mailbox';
	$data['department'] = $this->department_model->get_departments();
	$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

	$this->form_validation->set_rules('mailbox_type', 'Type', 'required');
	$this->form_validation->set_rules('mailbox_hostname', 'Hostname', 'required');
	$this->form_validation->set_rules('mailbox_port', 'Port', 'required');
	$this->form_validation->set_rules('mailbox_login', 'Login', 'required');
	$this->form_validation->set_rules('mailbox_password', 'Password', 'required');
	
			
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('templates/header', $data);
		$this->load->view('settings/mailbox_add', $data);
		$this->load->view('templates/footer');

	}
	else
	{   $this->settings_model->add_mailbox();
       $data['message'] = 'Your mailbox has been created !';
   
   	 $this->load->view('templates/header', $data);       
		 $this->load->view('settings/mailbox_add', $data);
		 $this->load->view('templates/footer');
	}
}
	
	}	
	
	public function license()
	{
		$this->load->view('templates/header');		
		$this->load->view('settings/license');
		$this->load->view('templates/footer');		
	}
	
	public function templates()
	{
	if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else {
	$this->load->helper('form');
	$data['department'] = $this->department_model->get_departments();
	$data['template'] = $this->settings_model->get_mailtemplates();
		
	$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

	$this->form_validation->set_rules('template_name', 'Name', 'required');
	$this->form_validation->set_rules('template_location', 'location', 'required');
			
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('templates/header', $data);
		$this->load->view('settings/mail', $data);
		$this->load->view('templates/footer');

	}
	else
	{  
	    $this->settings_model->add_mailtemplate();
	    $data['department'] = $this->department_model->get_departments();
	    $data['template'] = $this->settings_model->get_mailtemplates();
		    
       $data['message'] = 'Your template has been created !';

		 $this->load->view('templates/header', $data);       
		 $this->load->view('settings/mail', $data);
		 $this->load->view('templates/footer');
	 }	
	 }
	}	
	
	public function edittemplate($id)
	{
	if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else {
	$this->load->helper('form');
	$data['department'] = $this->department_model->get_departments();
		
	$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
	$data['template_item'] = $this->settings_model->get_mailtemplates($id);
   
	if (empty($data['template_item']))
	{
		show_404();
	}
	$this->load->helper('file');
	$this->load->vars($data);
		
   
	
	$data['file'] = read_file('/dev.timecontrol.be/application/views/templates/mail/account_created.php');
	
	$this->load->view('templates/header', $data);       
	$this->load->view('settings/edit_template', $data);
   $this->load->view('templates/footer');	
	
	 }
	}	
	
   public function sendTestEmail(){			
		// Email configuration
      $to = $this->input->post('mailaddress');
	
		$this->load->library('email');
		$this->email->from('services@timecontrol.be', "Time Control - Development environment");
		$this->email->to("$to");
		$this->email->subject("We have a new announcement");
		$this->email->message("Mail sent test message...");
			
		$data['message'] = "Sorry Unable to send email...";	
		if($this->email->send()){					
			$data['message'] = "Test mail sent...";			
		}	
		 				
		// forward to index page
		$this->load->view('news/settings', $data);		
	}	
}

