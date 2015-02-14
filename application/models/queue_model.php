<?php

class Queue_model extends CI_Model{
	
	
	
	function get_break_user($id){
		$query = $this->db->query("select * , TIMESTAMPDIFF(MINUTE,breaks.begintime,NOW()) AS 'breaktime' from breaks inner join users on breaks.userid=users.id  where userid = ".$id." and status = 0 order by begintime asc");
		return $query->result();	
		
	}
	
	function get_break($id = false){
		
		
		if($id === false){
			$query = $this->db->query("select * , TIMESTAMPDIFF(MINUTE,breaks.begintime,NOW()) AS 'breaktime' from breaks inner join users on breaks.userid=users.id where status = 0 order by begintime asc");	
			return $query->result();			
		}
		
		$query = $this->db->query("select * , TIMESTAMPDIFF(MINUTE,breaks.begintime,NOW()) AS 'breaktime' from breaks inner join users on breaks.userid=users.id  where departmentid = ".$id." and status = 0 order by begintime asc");
		return $query->result();	
		

	}
	
	function get_queue($id = false){
				
		if($id === false){
		$query = $this->db->query("select * , TIMESTAMPDIFF(MINUTE,breakq.time_in_q,NOW()) AS 'queuetime'  from breakq inner join users on breakq.userid=users.id order by breakq.prio asc");	
		return $query->result();
				
		}
		
		$query = $this->db->query("select * , TIMESTAMPDIFF(MINUTE,breakq.time_in_q,NOW()) AS 'queuetime'  from breakq inner join users on breakq.userid=users.id  where breakq.departmentid = ".$id." order by breakq.prio asc");	
		return $query->result();
	
		
	}
	
	
	function get_department_break($id){
	$query = $this->db->query("select * from breaks where departement = '".$id."' and status = 0");
	return $query->result();
		
	}

	function get_department_queue($id){
	$query = $this->db->query("select * from breakq where departmentid = '".$id."'");
	return $query->result();
		
	}	
	
	
	function promote($id){
			$query = $this->db->query("select * from breakq where userid = ".$id);
			$user = $query->row_array();

			$this->db->query("update breakq set prio=prio+1 where prio=".($user['prio']-1));			
			$this->db->query("update breakq set prio=prio-1 where userid=".$id);
				
	}
	
	
	function kick($id){
		 $result = $this->db->query("select * from breakq where userid=".$id)->row_array();
		 $this->db->query("delete from breakq where userid=".$id);	
		 $this->db->query("update breakq set prio=prio-1 where departmentid = '".$result['departmentid']."' and prio > ".$result['prio']);
		
	}
	
	function go_in_q($user){
		
		$query = $this->db->query("select * from breakq where departmentid = '".$user->departmentid."'")->result();
		$result = $this->db->query("select * from breakq where userid = ".$user->id."")->row_array();
		if(count($result)==0){
			$this->db->query("insert into breakq ( userid, departmentid, prio, time_in_q) values (".$user->id." ,".$user->departmentid." , ".(count($query)+1).", now() )");			
		}
	}
	
	function take_break($user){
		
		$query = $this->db->query("select * from breaks where departement = '".$user->departmentid."'");
		$que = $this->db->query("select * from breakq where userid = ".$user->id)->row_array();
		
		if(count($que)>0){
			
			$this->db->query("update breakq set prio=prio-1 where prio > ".$que['prio']." and departmentid=".$user->departmentid);
			$this->db->query("delete from breakq where id = ".$que['id']);
		}
		
		
		$slots = $this->db->query("select * from departments inner join break_settings on departments.id = break_settings.departmentid where departments.id = '".$user->departmentid."'")->row_array();
		$result = $this->db->query("select * from breaks where userid = ".$user->id." and status = 0")->row_array();
		
		if(count($query) < $slots['slots']){
			
			if(count($result) == 0){
				$this->db->query("insert into breaks ( userid, departement, begintime) values (".$user->id." ,".$user->departmentid." , now())");			
			}
		}
	}			

	function quit_break($user){
		
		$this->db->query("update breaks set endtime = now(), status = 1 where userid=".$user->id." and status = 0");			
	
	}	
	
	function demote($user){
		
		$query = $this->db->query("select * from breakq where userid=".$user->id)->row_array();
		
		$this->db->query("update breakq set prio=prio-1 where prio=".($query['prio']+1)." and departmentid=".$user->departmentid);
		$this->db->query("update breakq set prio=prio+1 where userid=".$user->id);

		
	}

	function get_department_settings($id){
		$query = $this->db->query("select * from break_settings where departmentid = ".$id);
		return $query->row_array();
		
		
	}

	function updateDepartment($id){
			
			$this->db->query("update break_settings set slots= ".$id['slots']." , max_break=".$id['max_break']." , max_queue=".$id['max_queue']." where departmentid=".$id['departmentid']);
			
			
	}
		
	
	
}




?>