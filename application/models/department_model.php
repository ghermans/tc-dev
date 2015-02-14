<?php
class Department_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

   public function get_departments($id = FALSE)
   {
	if ($id === FALSE)
	{
		$query = $this->db->get('departments');
		return $query->result_array();
	}

	$query = $this->db->get_where('departments', array('department_id' => $id));
	return $query->row_array();
   }

   public function query_departments()
   {

$this->db->select('departments.department_id AS departmentID, departments.department_name, users.id, users.first_name, users.last_name');
$this->db->from('departments');
$this->db->join('users', 'users.id = departments.department_manager');
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



   public function add_department()
   {
	$this->load->helper('url');

	// $slug = url_title($this->input->post('name'), 'dash', TRUE);

	$data = array(
		'name' => $this->input->post('department_name'),
		'manager' => $this->input->post('department_manager')
		
	);
 
 
	return $this->db->insert('departments', $data);
	
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