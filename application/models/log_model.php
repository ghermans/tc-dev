<?php
class Log_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

   public function get_logs($id = FALSE)
   {
	if ($id === FALSE)
	{
$this->db->select('*');
$this->db->from('logs');
$this->db->join('users', 'users.id = logs.user');
$this->db->order_by("time", "desc"); 
$this->db->limit(5);


$query = $this->db->get();

		//$query = $this->db->get('logs');
		return $query->result_array();
	}

	$query = $this->db->get_where('logs', array('id' => $id));
	return $query->row_array();
   }

 function remove_news($id){
$this->db->where('id', $id);
$this->db->delete('news');
}


	
	

   public function set_news()
   {
	$this->load->helper('url');

	$slug = url_title($this->input->post('title'), 'dash', TRUE);

	$data = array(
		'title' => $this->input->post('title'),
		'slug' => $slug,
		'text' => $this->input->post('text')
	);

	return $this->db->insert('news', $data);
   }

}
?>