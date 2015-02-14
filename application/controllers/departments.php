<?php
class Departments extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
      $this->load->model('department_model', '', TRUE);
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->load->library('email'); 
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
			
	$data['department'] = $this->department_model->query_departments();
	$data['logins'] = $this->ion_auth->users()->result();	   
	$this->load->vars($data);

	$this->load->view('templates/header');
	$this->load->view('departments/index', $data);
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
	$data['department'] = $this->department_model->query_departments();
	$data['options'] = $this->department_model->get_managers();
	
	$this->form_validation->set_rules('department_name', 'Name', 'required');
	$this->form_validation->set_rules('department_manager', 'Manager', 'required');

	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('templates/header', $data);
		$this->load->view('departments/create', $data);
		$this->load->view('templates/footer');

	}
	else
	{
		$this->department_model->add_department();
		$sendto = $this->input->post("department_manager");

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
		$this->email->subject("Department created");
		// $this->email->message("Dear $row->first_name,<br>The department $dname has been created. <br>You can find more details <a href=\"http://dev.timecontrol.be/departments\">here</a>	");
		$msg = $this->load->view('templates/mail/department_created', $data, TRUE);
      $this->email->message($msg);	
		
		if($this->email->send()){					
			echo "Mail sent to $mailbox";			
		}
		
else {
       echo "Sorry Unable to send email...";	

}		
		 redirect('departments', 'refresh');
	}
	}
   }
   }


   function delete_department($id)
	{
if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		$this->department_model->delete_department($id);
		redirect("departments");
	}



public function change($id)
{
	if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else {
	   $data['department_item'] = $this->department_model->get_departments($id);

	if (empty($data['department_item']))
	{
		show_404();
	}
	else{ 
			
	$data['department'] = $this->department_model->get_departments($id);
	$data['logins'] = $this->ion_auth->users()->result();	   
	$this->load->vars($data);

	$this->load->view('templates/header',$data);
	$this->load->view('departments/edit', $data);
	$this->load->view('templates/footer');
	}
}
}

}