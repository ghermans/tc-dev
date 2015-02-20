<?php
class Planning_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

   public function get_agent_planning($id = FALSE)
   {
	if ($id === FALSE)
	{
		$query = $this->db->get('planning_user');
		return $query->result_array();
	}

	$query = $this->db->get_where('planning_user', array('id' => $id));
	return $query->row_array();
   }
   
   
   public function get_work_hours($id = FALSE)
   {
   	if ($id === FALSE)
	{
		$query = $this->db->get('task_shifts');
		return $query->result_array();
	}
	else {
	   $query = $this->db->get_where('task_shifts', array('shift_id' => $id));
		return $query->row_array();
	}
	}
	
	public function add_work_hour()
{
	$this->load->helper('url');

	
    $this->db->where('shift_start', $this->input->post('shift_start'));
    $this->db->where('shift_end', $this->input->post('shift_stop'));    
    $query = $this->db->get('task_shifts');
    if ($query->num_rows() > 0){
	        return false;
    }
    else{
   $data = array(
		'shift_code' =>  $this->input->post('shift_code'),
		'shift_start' => $this->input->post('shift_start'),
		'shift_end' =>   $this->input->post('shift_stop')
	); 
  	return $this->db->insert('task_shifts', $data);
   	
  }
}

 public function edit_work_hour($id) { 
   
   $data = array(
		'shift_code' =>  $this->input->post('shift_code'),
		'shift_start' => $this->input->post('shift_start'),
		'shift_end' =>   $this->input->post('shift_stop')
	); 

   $this->db->where('shift_id', $id);
   return $this->db->update('task_shifts', $data); 
}  

   public function remove_work_hour($id)
   {

   $this->db->delete('task_shifts', array('shift_id' => $id));
   
   }
   
   
	public function add_task_type()
{
	$this->load->helper('url');

	
    $this->db->where('task_type', $this->input->post('task_type')); 
    $query = $this->db->get('task_types');
    if ($query->num_rows() > 0){
	        return false;
    }
    else{
   $data = array(
		'task_type' =>  $this->input->post('task_type'),
		'task_min' => $this->input->post('task_start'),
		'task_max' =>   $this->input->post('task_stop')
	); 
  	return $this->db->insert('task_types', $data);
   	
  }
}
   
public function get_tasks($id = FALSE)
{
	if ($id === FALSE)
	{
		$query = $this->db->get('task_types');
		return $query->result_array();
	}

	$query = $this->db->get_where('task_types', array('task_id' => $id));
	return $query->row_array();
}

 public function edit_task_type($id) { 
   
   $data = array(
		'task_type' =>  $this->input->post('task_type'),
		'task_min'  =>  $this->input->post('task_start'),
		'task_max'  =>  $this->input->post('task_stop')
	); 

   $this->db->where('task_id', $id);
   return $this->db->update('task_types', $data); 
} 


  public function remove_task_type($id)
   {
   $this->db->delete('task_types', array('task_id' => $id));
   }


function jsonEvents($id)
{
    $query = $this->db->query("SELECT * FROM planning_user where userid = $id ORDER BY start ASC");
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
}   



public function get_tasks_requests()
{

		$this->db->select('*');
      $this->db->from('task_requests');
		$this->db->join('task_types','task_types.task_id = task_requests.request_type');
		$query = $this->db->get();
		return $query->result_array();
}


   public function create_department()
   {
	$this->load->helper('url');
	$data = array(
		'name' => $this->input->post('name'),
		'manager' => $this->input->post('manager')
	);
	return $this->db->insert('departments', $data);
   }
   
public function set_agent_task($id)
{
	$this->load->helper('url');

		$data = array(
		'title' =>  $this->input->post('taskName'),
		'userid' => $id,
		'start' => $this->input->post('taskStart'),
		'end' => $this->input->post('taskStop')
	);

	return $this->db->insert('planning_user', $data);
}
   
   
}
?>