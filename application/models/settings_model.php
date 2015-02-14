<?php
class Settings_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

   public function get_mailbox($id = FALSE)
   {
	if ($id === FALSE)
	{
		$query = $this->db->get('mail_settings');
		return $query->result_array();
	}

	$query = $this->db->get_where('mail_settings', array('id' => $id));
	return $query->row_array();
   }

   public function query_departments()
   {

$this->db->select('departments.id AS departmentID, departments.name, users.id, users.first_name, users.last_name');
$this->db->from('departments');
$this->db->join('users', 'users.id = departments.manager');
$query2 = $this->db->get();	
	return $query2->result_array();
   }
   
   
   public function get_managers()
   {

$this->db->select('users.id, users.first_name, users.last_name, users_groups.id AS roleID, users_groups.user_id, users_groups.group_id,');
$this->db->from('users');
$this->db->join('users_groups', 'users_groups.user_id = users.id');
$this->db->where('users_groups.group_id = 2');

$query3 = $this->db->get();	
	return $query3->result_array();
   }   



   public function add_mailbox()
   {
	$this->load->helper('url');
   $this->load->library('encrypt');
	
   $mailboxPassword = $this->input->post('mailbox_password');
   $data = array(
		'type' => $this->input->post('mailbox_type'),
		'hostname' => $this->input->post('mailbox_hostname'),
		'port' => $this->input->post('mailbox_port'),				
		'login' => $this->input->post('mailbox_login'),
      'password' => $this->encrypt->encode($mailboxPassword),
      'ssl' => $this->input->post('mailbox_ssl'),
      'description' => $this->input->post('mailbox_description')
   );
    return $this->db->insert('mail_settings', $data);
  //  $this->set_message('message', 'Mailbox has been added');
   }
   

   public function get_mailtemplates($id = FALSE)
   {

   if ($id === FALSE)
	{
		$query = $this->db->get('mail_templates');
		return $query->result_array();
	}

	$query = $this->db->get_where('mail_templates', array('id' => $id));
	return $query->row_array();
   }		
   
   
      public function get_mailboxes($id = FALSE)
   {

   if ($id === FALSE)
	{
		$query = $this->db->get('mail_settings');
		return $query->result_array();
	}

	$query = $this->db->get_where('mail_settings', array('id' => $id));
	return $query->row_array();
   }
		
		
	   
   public function add_mailtemplate()
   {
	$this->load->helper('url');
   $data = array(
		'name' => $this->input->post('template_name'),
		'location' => $this->input->post('template_location'),
		'description' => $this->input->post('template_description')
   );
    return $this->db->insert('mail_templates', $data);
 
   }
   
public function delete_department($id)
	{
      
		// delete department from department table
		$this->db->delete('departments', array('id' => $id));

		// if user does not exist in database then it returns FALSE else removes the user from groups
		if ($this->db->affected_rows() == 0)
		{
		    return FALSE;
		}   
  }
}
  
?>