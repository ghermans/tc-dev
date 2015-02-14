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
   
public function get_news($id = FALSE)
{
	if ($id === FALSE)
	{
		$query = $this->db->get('planning_user');
		return $query->result_array();
	}

	$query = $this->db->get_where('planning_user', array('userid' => $id));
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