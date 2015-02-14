<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teams extends CI_Controller {

	function __construct()
	{
		parent::__construct();
      $this->load->model('department_model', '', TRUE);
      $this->load->model('team_model', '', TRUE);      
      		
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
		
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else {
	   $data['department'] = $this->department_model->get_departments();   
	   $data['teams'] = $this->team_model->get_teams();   
	   $data['users'] = $this->ion_auth->users()->result();
	   	   
	
   $this->form_validation->set_rules('department_name', 'Name', 'required');	
	$this->form_validation->set_rules('team_name', 'Name', 'required');
	$this->form_validation->set_rules('team_coach', 'Manager', 'required');
	$this->load->vars($data);
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('templates/header', $data);
      $this->load->view('teams/index', $data);
		$this->load->view('templates/footer');

	}
	else
	{	
	   
		$this->team_model->add_team();
		$sendto = $this->input->post("team_coach");

	$this->db->select('id, email, first_name');
	$this->db->from('users');
 	$this->db->where('id', $sendto);
 	$SelectManager = $this->db->get();	
    foreach ($SelectManager->result() as $row)
    {
    echo $row->email;
    $mailbox = $row->email;
    $dname = $this->input->post("department_name");
    
      $data['first_name'] = $row->first_name;
    	$data['dbname'] = $this->input->post("department_name");
 	  
		
		$this->email->from('services@timecontrol.be', "Time control");
		$this->email->to("$mailbox");
		$this->email->subject("Team created");
		// $this->email->message("Dear $row->first_name,<br>The department $dname has been created. <br>You can find more details <a href=\"http://dev.timecontrol.be/departments\">here</a>	");
		$msg = $this->load->view('templates/mail/department_created', $data, TRUE);
      $this->email->message($msg);	
		
		if($this->email->send()){					
			echo "Mail sent to $mailbox";			
		}
		
else {
       echo "Sorry Unable to send email...";	

}		
		
	}
 	   $data['department'] = $this->department_model->get_departments();   
	   $data['teams'] = $this->team_model->get_teams();   
	   $data['users'] = $this->ion_auth->users()->result();
	   
	 	$this->load->view('templates/header', $data);
      $this->load->view('teams/index', $data);
		$this->load->view('templates/footer');
	
	}
   }
   }

}


