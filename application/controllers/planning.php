<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Planning extends CI_Controller {

	function __construct()
	{
		
		parent::__construct();
		$this->load->model('news_model');
		$this->load->model('planning_model');		
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->database();
		$this->load->helper('language');
		$this->lang->load('auth');
		$this->lang->load('planning');
		
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
	}

	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
		  //redirect them to the login page
		  redirect('auth/login', 'refresh');
		}
		
	   $data['department'] = $this->department_model->get_departments();
	   $this->load->vars($data);
		
		if (!$this->ion_auth->in_group(1))
		{
		//	 $this->load->view('templates/sidebar/teamcoach');	
			
		}
		else {
				$this->load->view('templates/header');	
		      $this->load->view('dashboard/manager', $data);			
		}	
	}
	

	
	public function shifts()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->has_permission('manage_shifts_hours'))
		{
			show_error("You don't have permission to manage the work hours");
		}		
		
	  $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');		
	  $data['shift'] = $this->planning_model->get_work_hours();
	  $data['users'] = $this->ion_auth->users()->result();	   
	  $this->load->vars($data);
		
	$this->form_validation->set_rules('shift_code', 'code', 'required');
	$this->form_validation->set_rules('shift_start', 'Start', 'required');
	$this->form_validation->set_rules('shift_stop', 'Stop', 'required');							
						
  if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('templates/header', $data);	
		$this->load->view('planning/manage_shifts', $data);
		$this->load->view('templates/footer');	

	}
	else
	{ 
	$addShift =  $this->planning_model->add_work_hour();
	    
	     if($addShift) {
	     	
	    $this->session->set_flashdata('message', lang('shift_added'));	
			redirect('planning/shifts', 'refresh');	 
	}else {			
		$this->session->set_flashdata('message', lang('error_shift_exists'));
					redirect('planning/shifts', 'refresh');	 	
}
}
}



	public function edit_shift($id)
	{

		if (!$this->ion_auth->logged_in() || !$this->ion_auth->has_permission('manage_shifts_hours'))
		{
			show_error("You don't have permission to manage the work hours");
		}		


		
	$this->form_validation->set_rules('shift_code', 'code', 'required');
	$this->form_validation->set_rules('shift_start', 'Start', 'required');
	$this->form_validation->set_rules('shift_stop', 'Stop', 'required');							

	  $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');		
	  $data['shift'] = $this->planning_model->get_work_hours($id);

	  $data['users'] = $this->ion_auth->users()->result();	   
	  $this->load->vars($data);
						
  if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('templates/header', $data);	
		$this->load->view('planning/edit_shift', $data);
		$this->load->view('templates/footer');	

	}
	else
	{ 
	$addShift =  $this->planning_model->edit_work_hour($id);
	    
	     if($addShift) {
	     	
	    $this->session->set_flashdata('message', 'Query is ok');	
			redirect('planning/shifts', 'refresh');	 
	}else {			
		$this->session->set_flashdata('message', 'There is a issue... please fix it');
					redirect('planning/shifts', 'refresh');	 	
}
}
}

	public function remove_shift($id)
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->has_permission('manage_shifts_hours'))
		{
			show_error("You don't have permission to remove this item");
		}		

	  else
	   {   $this->planning_model->remove_work_hour($id);
	   		$this->session->set_flashdata('message','The shift has been removed');
			redirect('planning/shifts', 'refresh');	 
	   }			
    }
	

	public function tasks()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->has_permission('manage_tasks_types'))
		{
			show_error("You don't have permission to manage the tasks types");
		}		
		
	  $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');		
	  $data['task'] = $this->planning_model->get_tasks();
	  $data['users'] = $this->ion_auth->users()->result();	   
	  $this->load->vars($data);
		
	$this->form_validation->set_rules('task_type', 'Type', 'required');
	$this->form_validation->set_rules('task_start', 'Start', 'required');
	$this->form_validation->set_rules('task_stop', 'Stop', 'required');							
						
  if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('templates/header', $data);	
		$this->load->view('planning/manage_tasks', $data);
		$this->load->view('templates/footer');	

	}
	else
	{ 
	$addShift =  $this->planning_model->add_task_type();
	    
	     if($addShift) {
	     	
	    $this->session->set_flashdata('message', lang('confirm_task_added'));	
			redirect('planning/tasks', 'refresh');	 
	}else {			
		
		   redirect('planning/tasks', 'refresh');	 	
}
}
}


	public function edit_task($id)
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->has_permission('manage_tasks_types'))
		{
			show_error("You don't have permission to manage the tasks types");
		}		
		
	  $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');		
	  $data['task'] = $this->planning_model->get_tasks($id);
	  $data['users'] = $this->ion_auth->users()->result();	   
	  $this->load->vars($data);
		
	$this->form_validation->set_rules('task_type', 'Type', 'required');
	$this->form_validation->set_rules('task_start', 'Start', 'required');
	$this->form_validation->set_rules('task_stop', 'Stop', 'required');							
						
  if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('templates/header', $data);	
		$this->load->view('planning/edit_tasks_types', $data);
		$this->load->view('templates/footer');	

	}
	else
	{ 
	$addShift =  $this->planning_model->edit_task_type($id);
	    
	     if($addShift) {
	     	
	    $this->session->set_flashdata('message', lang('confirm_task_added'));	
			redirect('planning/tasks', 'refresh');	 
	}else {			
		
		   redirect('planning/tasks', 'refresh');	 	
}
}
}

	public function remove_task($id)
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->has_permission('manage_task_types'))
		{
			show_error("You don't have permission to remove this item");
		}		

	  else
	   {   $this->planning_model->remove_task_type($id);
	   		$this->session->set_flashdata('message','The task has been removed');
			redirect('planning/shifts', 'refresh');	 
	   }			
    }
    

	public function backup_shifts()
	{
		if (!$this->ion_auth->logged_in())
		{
		  //redirect them to the login page
		  redirect('auth/login', 'refresh');
		}
		
	   $data['department'] = $this->department_model->get_departments();
		$data['users'] = $this->ion_auth->users()->result();	   
	   $this->load->vars($data);
		
		if (!$this->ion_auth->in_group(1))
		{
		//	 $this->load->view('templates/sidebar/teamcoach');	
			
		}
		else {
		$this->form_validation->set_rules('event', 'Event', 'required');
	   $this->form_validation->set_rules('start', 'start', 'required');
		$this->form_validation->set_rules('start', 'stop', 'required');

	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('templates/header', $data);
		$this->load->view('planning/shifts', $data);
		$this->load->view('templates/footer');

	}
	else
	{   $this->planning_model->set_event();		
			
		$this->load->view('templates/header', $data);	
		$this->load->view('planning/shifts', $data);
		$this->load->view('templates/footer');				
			
		}	
}
}

	
   public function agentplanning($id) {
	if (!$this->ion_auth->logged_in())
		{
		  //redirect them to the login page
		  redirect('auth/login', 'refresh');
		}
	   $data['department'] = $this->department_model->get_departments();
	   $this->load->vars($data);		
      
      $query = $this->db->query("SELECT * FROM planning_user where userid = $id ORDER BY start ASC");
      $data['id'] = $id; 
    $jsonevents = array();

    foreach($query->result() as $entry)
    {
        $jsonevents[] = array(
            'id' => $entry->id,
            'title' => $entry->title,
            'start' => $entry->start,
            'end' => $entry->end,
            'color' => $entry->color
        ); 
    }

    $data['json'] = json_encode($jsonevents);
        		
  $this->load->view('templates/header', $data);		
  $this->load->view('planning/edit_agent_planning', $data);
  $this->load->view('templates/footer');		
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
	
	
   public function addagentTask($id)
     {	
   	$this->load->library('email');
      $this->load->library('form_validation');
		// Email configuration
		$data['user'] = $this->ion_auth->user()->row();
      $agentID = $this->input->post('agent_id');

		 				
	   $data['department'] = $this->department_model->get_departments();
	   $this->load->vars($data);	

		$this->form_validation->set_rules('taskName', 'taskName', 'required');
		$this->form_validation->set_rules('taskStart', 'taskStart', 'required');
		$this->form_validation->set_rules('taskStop', 'taskStop', 'required');
		
     if ($this->form_validation->run() == FALSE)
		{
        $this->load->view('templates/header', $data);		
		  $this->load->view('planning/addagenttask', $data);	
        $this->load->view('templates/footer');				  
		}
		else
		{
    	//set the flash data error message if there is one
			$this->data['message'] = $this->session->userdata('message');
   		$this->planning_model->set_agent_task($id);
   		// $this->set_message('Task has been added');
	            $data = array(
             'user' => $id,
             'type' => 'task' ,
             'action' => 'has a new task assigned'
                    );
    $this->db->insert('logs', $data); 
		   redirect("planning/agentplanning/$id");	  		   
  		 }
	  }		
}

?>