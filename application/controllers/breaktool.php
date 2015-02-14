<?php
class Breaktool extends CI_Controller {

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
	$this->load->model("queue_model");   
   	$data['user'] = $this->ion_auth->user()->row();
    $data['department'] = $this->department_model->get_departments();
	
	
	if($this->input->post()!=NULL){
		switch($this->input->post("submit")){
			
			case "Leave Queue":
							$this->queue_model->kick($data['user']->id);
							break;

			case "Quit Break":
							$this->queue_model->quit_break($data['user']);
							break;

			case "Go in Queue":
							$this->queue_model->go_in_q($data['user']);
							break;							

			case "Take break":
							$this->queue_model->take_break($data['user']);
							break;
														
			default:
					break;
			
			
			
		}	  
    }
   
   	$data['me_in_queue'] = $this->queue_model->get_queue($data['user']->id);
	$data['me_in_break'] = $this->queue_model->get_break_user($data['user']->id);	
	$data['my_department'] = $this->department_model->get_departments($data['user']->departmentid);
	$data['department_in_break']= $this->queue_model->get_department_break($data['user']->departmentid);
	$data['department_in_queue']= $this->queue_model->get_department_queue($data['user']->departmentid);
	$data['department_settings']= $this->queue_model->get_department_settings($data['user']->departmentid);	
   
   


   
	$data['queue']	= $this->queue_model->get_queue();
	$data['break'] = $this->queue_model->get_break();
	
	$this->load->vars($data);
	

	
	
	
	$this->load->view('templates/header_agent', $data);
	$this->load->view('break/index', $data);
	$this->load->view('templates/footer');
   }
   
     public function manage()
   {
   		if (!$this->ion_auth->logged_in())
		{
		  //redirect them to the login page
		  redirect('auth/login', 'refresh');
		}
   	$data['user'] = $this->ion_auth->user()->row();
 	$this->load->model("queue_model");
	$departmentid = $this->uri->segment(3);		
		
	if($this->input->post()!=NULL){
		
		$newRow = $this->input->post();
		$newRow['departmentid'] = $departmentid;
		$this->queue_model->updateDepartment($newRow);
		
	}
		


   	$data['department'] = $this->department_model->get_departments();
  
	$data['department_in_break']= $this->queue_model->get_department_break($departmentid);
	   
	$data['queue']	= $this->queue_model->get_queue($departmentid);
	$data['break'] = $this->queue_model->get_break($departmentid);
	$data['department_settings'] = $this->queue_model->get_department_settings($departmentid);
	
	$this->load->vars($data);
	
	
	
	$this->load->view('templates/header', $data);
	$this->load->view('break/management', $data);
	$this->load->view('templates/footer');
   }
   
   public function promote($id,$level){
	   
	   $this->load->model("queue_model");	
		switch($level){
			case "up":
					$this->queue_model->promote($id);	
					break;
			case "down":
					$this->queue_model->demote($id);					
					break;
			default:
					break;	
			
		}
		
		redirect("break/management");
	   
	   
   }
   
   
   public function demote(){
	
		$user = $this->ion_auth->user()->row();
		$this->load->model("queue_model");
		
		$this->queue_model->demote($user);
		
		redirect("breaktool");
   }
   
   public function kick($id){
	
  	   $this->load->model("queue_model");	
	   $this->queue_model->kick($id);
	   
		redirect("break/management");

	   
   }

}
