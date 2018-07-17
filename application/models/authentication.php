<?php
class  authentication extends CI_Model
	{
		public function checkLogin($user,$pass)
		{
			$this->db->select('*');
			$this->db->FROM('customer');
			$this->db->WHERE("username = '$user' AND password = '$pass'");
			$this->db->limit(1);
			$query = $this->db->get();
			$re = $query->row();
			if($query->result()){
				$data = array('username'=>$re->username,
							  'ID'=>$re->ID);
				return $data;
			}else{
				return False;	
			}
			return False;
		}

		
	}
?>