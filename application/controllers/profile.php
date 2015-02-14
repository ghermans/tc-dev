<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct()
	{
		
		parent::__construct();
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
		$this->form_validation->set_rules('old', $this->lang->line('change_password_validation_old_password_label'), 'required');
		$this->form_validation->set_rules('new', $this->lang->line('change_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
		$this->form_validation->set_rules('new_confirm', $this->lang->line('change_password_validation_new_password_confirm_label'), 'required');

		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}

		$user = $this->ion_auth->user()->row();

		if ($this->form_validation->run() == false)
		{
			//display the form
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
 			$this->data['user'] = $this->ion_auth->user()->row();
				
	$this->data['first_name'] = array(
			'name'  => 'first_name',
			'id'    => 'first_name',
			'type'  => 'text',
			'class'  => 'form-control',			
			'value' => $user->first_name,
		);

	$this->data['last_name'] = array(
			'name'  => 'last_name',
			'id'    => 'last_name',
			'type'  => 'text',
			'class'  => 'form-control',
			'value' => $user->last_name
		);		

	$this->data['email'] = array(
			'name'  => 'email',
			'id'    => 'email',
			'type'  => 'email',
			'class'  => 'form-control',
			'value' => $user->email			
		);	
		
	$this->data['phone'] = array(
			'name'  => 'phone',
			'id'    => 'phone',
			'type'  => 'text',
			'class'  => 'form-control',
			'value' => $user->phone		
		);	
		
	$this->data['mobile'] = array(
			'name'  => 'mobile',
			'id'    => 'mobile',
			'type'  => 'text',
			'class'  => 'form-control',
			'value' => $user->mobile		
		);			
		
	$this->data['address'] = array(
			'name'  => 'address',
			'id'    => 'address',
			'type'  => 'text',
			'class'  => 'form-control',
			'value' => $user->address		
		);				

	$this->data['city'] = array(
			'name'  => 'city',
			'id'    => 'city',
			'type'  => 'text',
			'class'  => 'form-control',
			'value' => $user->city		
		);	
	
	$this->data['zipcode'] = array(
			'name'  => 'zipcode',
			'id'    => 'zipcode',
			'type'  => 'text',
			'class'  => 'form-control',
			'value' => $user->zipcode		
		);						
		
			$this->data['old_password'] = array(
				'name' => 'old',
				'id'   => 'old',
				'type' => 'password',
				'class' => 'form-control',
			);
			$this->data['new_password'] = array(
				'name' => 'new',
				'id'   => 'new',
				'type' => 'password',
				'class' => 'form-control',
				'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
			);
			$this->data['new_password_confirm'] = array(
				'name' => 'new_confirm',
				'id'   => 'new_confirm',
				'class' => 'form-control',				
				'type' => 'password',
				'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
			);
			$this->data['user_id'] = array(
				'name'  => 'user_id',
				'id'    => 'user_id',
				'class' => 'form-control',				
				'type'  => 'hidden',
				'value' => $user->id,
			);

			$data['department'] = $this->department_model->get_departments();
		

		
		

		$this->load->view('templates/header');		
			$this->load->view('profile/index', $this->data);
		}
		else
		{
			$identity = $this->session->userdata('identity');

			$change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));

			if ($change)
			{
				//if the password was successfully changed
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				$this->logout();
			}
			else
			{
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('profile/index', 'refresh');
			}
		}
		$this->load->view('templates/footer');		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */