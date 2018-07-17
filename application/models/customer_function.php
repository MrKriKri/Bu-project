<?php
class  customer_function extends CI_Model
	{
		public function addCashCustomer($id,$amount)
		{	
			$cashnow = $this->getCash($id);
			$cash = $cashnow + $amount ; 
			$sql = "UPDATE customer SET cash = $cash WHERE ID = $id";
		
			$this->db->query($sql);
		}

		public function getCash($id)
		{
			$this->db->select('*');
			$this->db->from('customer');
			$this->db->where('id = '.$id);
			$this->db->limit(1);
			$re = $this->db->get();
			$cash = $re->row();
			return $cash->cash;
		}

		public function getPrice($tic_id)
		{
			$this->db->select('*');
			$this->db->from('event,event_row,ticket,zone_row');
			$this->db->where("event.Event_id = event_row.Event_id 
							AND zone_row.Row_ID = event_row.Row_ID 
							AND ticket.zone_id = zone_row.zone_id
							AND Ticket_id= $tic_id");
			$this->db->limit(1);
			$re=$this->db->get();
			$cash = $re->row();
			return $cash->price;
		}

		public function buyTicket($id,$tic_id)
		{
			$cashnow = $this->getCash($id);
			$price = $this->getPrice($tic_id);

			if($cashnow>=$price){
				$balance = $cashnow - $price ;  
				$sql1 = "UPDATE customer SET cash = $balance where ID = $id";
				$sql2 = "UPDATE ticket SET customer_ID = $id WHERE Ticket_id = $tic_id";
				$this->db->query("$sql1");
				$this->db->query("$sql2");
				return true;
			}else{
				$this->session->set_flashdata('nomoney','Your balance is not enough.');
				return false;
			}

			
		}

		public function RegisDB($data)
		{
			
			 $sql = 'INSERT INTO customer(password, name, addr,email,tel,username) VALUES ("'.$data['pass'].'","'.$data['name'].$data['sname'].'","'.$data['Addr'].'","'.$data['email'].'","'.$data['Tel'].'","'.$data['user'].'")';
			$this->db->query($sql); 
		}
	}
?>