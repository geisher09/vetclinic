<?php
	
	class vet_model extends CI_Model{

		public function getClients(){
			$this->db->select('a.clientid,a.cname,count(b.clientid) as "pets"');
			$this->db->from('client a');
			$this->db->join('pet b','a.clientid = b.clientid','left outer');
			$this->db->group_by('a.clientid');     
		    $query = $this->db->get(); 
		    if($query->num_rows() != 0)
		    {
		        return $query->result_array();
		    }
		    else
		    {
		        return false;
		    }
		}

		public function getLastpet($id){
			$this->db->from('pet');
			$this->db->where('clientid',$id);
			$query = $this->db->get();

			return $query->num_rows();
		}

		public function getPets(){
			$query = $this->db->get('pet');
			return $query->result();

		}

		public function getStocks(){
			$query = $this->db->get('itemstock');
			return $query->result();
		}

		public function getServices(){
			$type = 'Treatment';
			$this->db->from('services');
			$this->db->where('type',$type);
			$query = $this->db->get();
			return $query->result();

		}

		public function getGrooms(){
			$type = 'Grooming';
			$this->db->from('services');
			$this->db->where('type',$type);
			$query = $this->db->get();
			return $query->result();

		}

		public function getVets(){
			$query = $this->db->get('veterinarian');
			return $query->result();

		}

		public function getAllitems(){
			$query = $this->db->get('itemstock');
			return $query->result();

		}

		public function getLastClient(){
			$query = $this->db->query("SELECT clientid FROM client ORDER BY clientid DESC LIMIT 1");
			$result = $query->result_array();
			$maxid = 0;
			foreach ($result as $row) {
				$maxid=$row['clientid'];
			}
			return $maxid;
					    
		}

		public function getOwnpets($id){
			$this->db->from('pet');
			$this->db->where('clientid',$id);
			$query = $this->db->get();

			return $query->result_array();

		}

		public function getItems($id){
			
			$this->db->select('a.visitid,b.item_desc,a.items_used,b.itemid');
			$this->db->from('items_used a');
			$this->db->join('itemstock b','a.items_used = b.itemid');
			// $this->db->group_by('b.clientid');     
			$this->db->where('a.visitid',$id);
			$query = $this->db->get();

			return $query->result_array();

		}

		public function getSales(){
			$this->db->select('a.visit_cost,a.serviceid,a.visitdate,a.case_type,b.id,b.desc');
			$this->db->from('visit a');
			$this->db->join('services b','a.serviceid = b.id');
			// $this->db->group_by('b.clientid');     
			
			$query = $this->db->get();

			return $query->result_array();
		}
		
		public function getSalesSum($date=null){
			$this->db->select_sum('visit_cost');
			$this->db->from('visit');
			$this->db->where("CAST(visitdate as date) = '$date'");

			$query = $this->db->get();
			$result = $query->row_array();
			if($result['visit_cost'] == null)
				return 0;
			else
				return $result['visit_cost'];
		}

		public function getSales2(){
			$serv="Sold Item";
			$this->db->select('a.itemid,a.item_desc,b.itemid,b.action,b.date,b.total_cost');
			$this->db->from('itemstock a');
			$this->db->join('itemhistory b','a.itemid = b.itemid');
			$this->db->where('b.action',$serv);     
			
			$query = $this->db->get();

			return $query->result_array();
		}

		public function getSalesSum2($date=null){
			$serv = "Sold Item";
			$this->db->select_sum('total_cost');
			$this->db->from('itemhistory');
			$this->db->where("CAST(date as date) = '$date' AND action='$serv'");

			$query = $this->db->get();
			$result = $query->row_array();
			if($result['total_cost'] == null)
				return 0;
			else
				return $result['total_cost'];
		}

		public function getOwnvisits($id){

			$this->db->from('visit');
			$this->db->where('petid',$id);
			$query = $this->db->get();

			return $query->result_array();

		}

		public function saveClients($data,$finalid){
			$this->getClients();
			$pdata = array(
				  'clientid' => $finalid
			   );
			
			return $this->db->insert('client', $data,$pdata);

		}

		public function savePets($finalid){
			$this->getClients();
			$pdata = array(
				  'petid' => $finalid.'-'.'1',
			      'clientid' => $finalid,
			      'pname' => $this->input->post('pname') ,
			      'breed' => $this->input->post('breed') ,
			      'species' => $this->input->post('species') ,
			      'birthday' => $this->input->post('birthday') ,
			      'sex' => $this->input->post('sex'),
			      'markings' => $this->input->post('markings'),
			   );

			return $this->db->insert('pet', $pdata);

		}


		public function saveAddPet($lpetid){
			$pdata = array(
				  'petid' => $this->input->post('addpetclientno').'-'.$lpetid,
			      'clientid' => $this->input->post('addpetclientno'),
			      'pname' => $this->input->post('pname') ,
			      'breed' => $this->input->post('breed') ,
			      'species' => $this->input->post('species') ,
			      'birthday' => $this->input->post('birthday') ,
			      'sex' => $this->input->post('sex') ,
			      'markings' => $this->input->post('markings'),
			   );
			//print_r($pdata);
			return $this->db->insert('pet', $pdata);

		}

		public function addItemUsed($option,$visitid){
			$idata = array(
				  'visitid' => $visitid,
			      'items_used' => $option
			   );
			//print_r($pdata);
			return $this->db->insert('items_used', $idata);
		}

		public function getLastpetvisit(){
			$pet=$this->input->post('pet');
			$this->db->from('visit');
			$this->db->where('petid',$pet);
			$query = $this->db->get();

			return $query->num_rows();
		}

		public function saveHistory(){
			date_default_timezone_set('Asia/Manila');
			$date=date('Y-m-d H:i:s');
			$pet=$this->input->post('pet');
			$yr=date('y');
			$petv=$this->getLastpetvisit();
			$petv=$petv+1;
			$vdata = array(
				  'visitid' => $yr.'-'.$pet.'-'.$petv,
				  'petid' => $this->input->post('pet'),
			      'vetid' => $this->input->post('doctor'),
			      'serviceid' => $this->input->post('Select1') ,
			      'visitdate' => $date,
			      'findings' => $this->input->post('findings') ,
			      'recommendation' => $this->input->post('recom'),
			      'case_type' => $this->input->post('optradio'),
			      'visit_cost' => $this->input->post('totalCost')
			   );

			return $this->db->insert('visit', $vdata);

		}


		public function get_by_id($id)
		{
			$this->db->from('client');
			$this->db->where('clientid',$id);
			$query = $this->db->get();

			return $query->row();
		}

		
		public function getpet_by_id($id)
		{
			$this->db->from('pet');
			$this->db->where('petid',$id);
			$query = $this->db->get();

			return $query->row();
		}

		public function getvisit_by_id($id)
		{
			$this->db->select('a.petid,b.pname,a.visitid,a.vetid,a.serviceid,a.visitdate,a.findings,a.recommendation,a.case_type,a.visit_cost,c.id,c.desc');
			$this->db->from('visit a');
			$this->db->join('pet b','a.petid = b.petid');
			$this->db->join('services c','a.serviceid = c.id');
			// $this->db->group_by('b.clientid');     
			$this->db->where('a.visitid',$id);
			$query = $this->db->get();

			return $query->row();
		}




private $table = "schedule";



		public function get_events($start, $end)
		{
		    return $this->db->where("startdate >=", $start)
		    				->where("enddate <=", $end)
		    				->get("schedule");
		}

		public function add_event($data)
		{
		    $this->db->insert("schedule", $data);
		}

		public function get_event($id)
		{
		    return $this->db->where("ID", $id)
		    				->get("schedule");
		}

		public function update_event($id, $data)
		{
		    $this->db->where("ID", $id)
		    		 ->update("schedule", $data);
		}

		public function delete_event($id)
		{
		    $this->db->where("ID", $id)
		    		 ->delete("schedule");
		}
		
		public function update($data,$condition){
			$this->db->where($condition);
			$this->db->update($this->table, $data);
			return TRUE;	
		}
		public function editClient($data){
		

			$this->db->where('clientid',$data['clientid']);
			$this->db->update('client',$data);
			return $data;	
	
		}


	}

?>