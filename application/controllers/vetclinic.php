<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vetclinic extends CI_Controller {

	public $sdate =	 "2017-10-01";
	public $edate = "2017-10-20";

	public function __construct(){
		parent::__construct();
			$this->load->model('vet_model','vet_model');
			$this->load->model('itemstock','itemstock');
			$this->load->model('itemusage','itemusage');
			$this->load->model('history','history');
			$this->load->model('services','services');
			$this->load->model('itemhistory','itemhistory');
			$dat = $this->vet_model->saveDates();
			$GLOBALS['datestart'] = $dat['start'];
			$GLOBALS['dateend'] = $dat['end'];
			$GLOBALS['startDate'] = date('Y-m-d',strtotime('October 6, 2017'));//$startDate and $endDate == range of dates;
			$GLOBALS['dates'] = $GLOBALS['startDate'];
			$GLOBALS['endDate'] = date('Y-m-d',strtotime('October 19, 2017'));
			// $GLOBALS['startDate'] = date('Y-m-d',strtotime('October 6, 2017'));//$startDate and $endDate == range of dates;
			// $GLOBALS['dates'] = $GLOBALS['startDate'];
			// $GLOBALS['endDate'] = date('Y-m-d',strtotime('October 19, 2017'));
	}
	public function index()
	{
		$header_data['title'] = "Records";		
		
		$this->load->model('vet_model');
		$clients = $this->vet_model->getClients();
		$stocks = $this->vet_model->getStocks();
		$header_data['notif']=$this->vet_model->notification();
		$header_data['events'] = $this->vet_model->getEventsByDate(date("Y-m-d"));
		$header_data['eventCounter'] = count($header_data['events']);
		$lastclient = $this->vet_model->getLastClient();	
		$this->load->view('include/header',$header_data);
		$this->load->view('clinic/vet_home', ['cl'=>$clients,'al'=>$lastclient,'stock'=>$stocks]);			
		$this->load->view('include/footer');
	}
	public function ItemPrice(){

		$items = $this->vet_model->myItem($this->input->post('id'));
		echo json_encode($items);



	}

	public function ajax_list()
	{
		$this->load->model('vet_model');
		$client = $this->vet_model->get_by_id($this->input->post('id'));
		$pet = $this->vet_model->getpet_by_id($this->input->post('id'));
		$visit = $this->vet_model->getvisit_by_id($this->input->post('id'));
		$pets = $this->vet_model->getOwnpets($this->input->post('id'));
		$visits = $this->vet_model->getOwnvisits($this->input->post('id'));
		$items = $this->vet_model->getItems($this->input->post('id'));
		$vets = $this->vet_model->getVets($this->input->post('id'));
		$allitems= $this->vet_model->getAllitems($this->input->post('id'));
		$treatments = $this->vet_model->getServices($this->input->post('id'));
		$grooms = $this->vet_model->getGrooms($this->input->post('id'));

		$output = array(
						"client" => $client,
						"pet" => $pet,
						"pets" => $pets,
						"visits" => $visits,
						"visit" => $visit,
						"items" => $items,
						"vets" => $vets,
						"allitems" => $allitems,
						"treatments" => $treatments,
						"grooms" => $grooms

				);
		echo json_encode($output);

	}
	public function filter_date()
	{
		$datestart = date("Y-m-d", strtotime("-1 week"));
		$dateend = date("Y-m-d");

		$startDate = $this->input->post('startDate') == "" ? $datestart : $this->input->post('startDate');
		$dates[] = $startDate; 									 
		$endDate = $this->input->post('endDate') == "" ? $dateend : $this->input->post('endDate');								
		$i = 0;
		$d = '';
		while(strcmp($d, $endDate) != 0){ //loop to get dates in the range given
			$d = date('Y-m-d',strtotime('+1 day', strtotime($dates[$i])));
			$dates[] = $d;
			++$i;
		}

		foreach($dates as $d){ //loop to get sum per date
			$sales1[] = $this->vet_model->getSalesSum($d);
			$sales2[] = $this->vet_model->getSalesSum2($d);
		}
		$sales = array_merge($sales1, $sales2);
		$output = array(
						"sales1" => $sales1,
						"sales2" => $sales2,
						"sales" => $sales,
						"dates" => $dates

				);
		echo json_encode($output);
	}
	
	public function services(){
		
		if(isset($_POST['add'])){
			
			$desc = $_POST['desc'];
			$type = $_POST['serv_type'];
			$data = array(
					'id'=>null,
					'desc'=>$desc,
					'type'=>$type,
					);
			$this->services->create($data);
		}
		if(isset($_POST['update'])){
			$id = $_POST['serviceid'];
			$desc = $_POST['desc'];
			$type = $_POST['serv_type'];
			$data = array(
						'desc'=>$desc,
						'type'=>$type
					);
			$condition = array('id'=>$id);
			
			$this->services->update($data,$condition);
			// $this->load->view('clinic/vet_home', ['cl'=>$clients,'al'=>$lastclient]);


		}
		if(isset($_GET['id'])){
			$data=array('id'=>$_GET['id']);
			$this->services->del($data);
		}
		$header_data['title'] = "Services Offered";
		$condition = array('type'=>'Grooming');
		$data['grooming'] = $this->services->read($condition);
		$condition = array('type'=>'Treatment');
		$data['treatment'] = $this->services->read($condition);
		$header_data['notif']=$this->vet_model->notification();


		$this->load->view('include/header',$header_data);
		$this->load->view('clinic/services',$data);
		$this->load->view('include/footer');
	}// end of services function


	
	
	// public function inventory(){
		
	// 	$header_data['title'] = "Inventory";
		
	// 	$this->load->view('include/header',$header_data);
	// 	$this->load->view('clinic/inventory');
	// 	$this->load->view('include/footer');
	// }// end of inventory function

	public function save(){

		$this->load->model('vet_model');
		$lastclient = $this->vet_model->getLastClient();
		$finalid = $lastclient+1;
			$this->form_validation->set_rules('cname', 'Name', 'required');
	  		$this->form_validation->set_rules('address', 'address', 'required');
		 	$this->form_validation->set_rules('contactno', 'contact', 'required');
		  	//$this->form_validation->set_rules('email', 'email', 'required');
		  	$this->form_validation->set_rules('pname', 'Pet Name', 'required');
	  		$this->form_validation->set_rules('breed', 'breed', 'required');
		 	$this->form_validation->set_rules('markings', 'markings', 'required');
		 	$this->form_validation->set_rules('species', 'species', 'required');
			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
            
            if ($this->form_validation->run()){

             	$data = $this->input->post(['cname','address','contactno','email']);
             	$this->load->model('vet_model');
             	if (($this->vet_model->saveClients($data,$finalid))&&($this->vet_model->savePets($finalid))){
             		$this->session->set_flashdata('response', 'Saved Succesfully!');
				 }
				 else{
             		// $this->session->set_flashdata('response', 'Failed to save!');
				 }
				return redirect('vetclinic');

            }
            else{
            	$this->session->set_flashdata('responsed', 'Failed to save! (Please input necessary details)');
            	$header_data['title'] = "Clinic";		
				$this->load->view('include/header',$header_data);
				$this->load->model('vet_model');
				$clients = $this->vet_model->getClients();
				$lastclient = $this->vet_model->getLastClient();	
				$this->load->view('clinic/vet_home', ['cl'=>$clients,'al'=>$lastclient]);
				$this->load->view('include/footer');
            }
		}

	public function savedate(){

		$this->load->model('vet_model');

		$start = $this->input->post('startdate');
		$end = $this->input->post('enddate');
		//$this->load->view('clinic/saleschart');
		return [$start,$end];
	}

	public function savepet(){

		$this->load->model('vet_model');
		$id = $this->input->post('addpetclientno');


		$lastpet = $this->vet_model->getLastpet($id);
		$lpetid = $lastpet+1;

		 // echo $lpetid;

			$this->form_validation->set_rules('pname', 'Pet Name', 'required');
	  		$this->form_validation->set_rules('birthday', 'Birthday', 'required');
		 	$this->form_validation->set_rules('markings', 'Markings', 'required');
	  		$this->form_validation->set_rules('breed', 'Breed', 'required');
		 	$this->form_validation->set_rules('species', 'Specie', 'required');
			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
            
            if ($this->form_validation->run()){
             	$this->load->model('vet_model');
             	if (($this->vet_model->saveAddPet($lpetid))){
             		$this->session->set_flashdata('response', 'Saved Succesfully!');
				 }
				 else{
             		//$this->session->set_flashdata('response', 'Failed :(');
				 }
				return redirect('vetclinic');

            }

            else{
            	$this->session->set_flashdata('responsed', 'Failed to save! (Please input necessary details)');
            	$header_data['title'] = "Clinic";		
				$this->load->view('include/header',$header_data);
				$this->load->model('vet_model');
				$clients = $this->vet_model->getClients();
				$lastclient = $this->vet_model->getLastClient();	
				$this->load->view('clinic/vet_home', ['cl'=>$clients,'al'=>$lastclient]);
				$this->load->view('include/footer');
            }




	}

	//bawas item 
	public function itemUsed(){
			$data=array('id'=>$this->input->post('id'),
				        'item'=>$this->input->post('item'));
			
		
			date_default_timezone_set('Asia/Manila');
			$date=date('Y-m-d H:i:s');
			$pet=$this->input->post('pet');
			$yr=date('y');
			$petv=$this->vet_model->getLastpetvisit();
			$petv=$petv+1;
			 $id = $yr.'-'.$pet.'-'.$petv;

			$notif = $this->vet_model->addItemUsed($data['id'],$id);
			$item=$this->vet_model->itemUsage($data);
			echo $notif;
	}

	public function savehistory(){


			$this->form_validation->set_rules('findings', 'Findings', 'required');
	  	// 	$this->form_validation->set_rules('birthday', 'Birthday', 'required');
		 	// $this->form_validation->set_rules('markings', 'Markings', 'required');
	  	// 	$this->form_validation->set_rules('breed', 'Breed', 'required');
		 	// $this->form_validation->set_rules('species', 'Specie', 'required');
			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
            
            if ($this->form_validation->run()){
             	$this->load->model('vet_model');
             	if (($this->vet_model->saveHistory())&&($this->vet_model->getLastpetvisit())){
             		$this->session->set_flashdata('response', 'Saved Succesfully!');
				 }
				 else{
             		//$this->session->set_flashdata('response', 'Failed :(');
				 }
				return redirect('vetclinic');

            }

            else{
            	$this->session->set_flashdata('responsed', 'Failed to save! (Please input necessary details)');
            	$header_data['title'] = "Clinic";		
				$this->load->view('include/header',$header_data);
				$this->load->model('vet_model');
				$clients = $this->vet_model->getClients();
				$lastclient = $this->vet_model->getLastClient();	
				$this->load->view('clinic/vet_home', ['cl'=>$clients,'al'=>$lastclient]);
				$this->load->view('include/footer');
            }

	}

	public function ajax_edit($id)
	{
			$data = $this->vetclinic->get_by_id($id);
			echo json_encode($data);
	}




	public function sched()
	{
		$header_data['title'] = "Schedule";
		$header_data['notif']=$this->vet_model->notification();
		$this->load->view('include/header',$header_data);
		$this->load->model('vet_model','schedule');
		$this->load->view('clinic/sched');
		$this->load->view('include/footer');

	}

	public function sales()
	{
		$header_data['title'] = "Sales";
		$header_data['notif']=$this->vet_model->notification();
		$this->load->view('include/header',$header_data);
		$this->sdate = "2017-08-02";//$startDate and $endDate == range of dates
		$this->edate = "2017-08-17";								 //$dates == array of dates in the range given
		// $this->ajax_list($this->sdate,$this->edate);
		// $i = 0;
		// $d = '';
		// while(strcmp($d, $endDate) != 0){ //loop to get dates in the range given
		// 	$d = date('Y-m-d',strtotime('+1 day', strtotime($dates[$i])));
		// 	$dates[] = $d;
		// 	++$i;
		// }

		// foreach($dates as $d){ //loop to get sum per date
		// 	$sales1[] = $this->vet_model->getSalesSum($d);
		// 	$sales2[] = $this->vet_model->getSalesSum2($d);
		// }
		// $sales = array_merge($sales1, $sales2);

		// $output = array(
		// 				"sales1" => $sales1,
		// 				"sales2" => $sales2,
		// 				"sales" => $sales,
		// 				"dates" => $dates
		// 		);
		// $date['s'] = $GLOBALS['datestart'];
		// $date['e'] = $GLOBALS['dateend'];
		// return $output;
		//$this->load->view('clinic/sales2',['sal'=>$sales,'sal2'=>$sales2]);
		//$this->load->view('clinic/chart',['sal2'=>$sales2]);
		$this->load->view('clinic/saleschart');
		$this->load->view('include/footer');
		

	}

	public function get_events()
	 {
	     $start = $this->input->get("start");
	     $end = $this->input->get("end");

	     $startdt = new DateTime('now'); // setup a local datetime
	     $startdt->setTimestamp($start); // Set the date based on timestamp
	     $start_format = $startdt->format('Y-m-d H:i:s');

	     $enddt = new DateTime('now'); // setup a local datetime
	     $enddt->setTimestamp($end); // Set the date based on timestamp
	     $end_format = $enddt->format('Y-m-d H:i:s');

	     $events = $this->vet_model->get_events($start_format, $end_format);

	     $data_events = array();

	     foreach($events->result() as $r) {

	         $data_events[] = array(
	             "id" => $r->ID,
	             "title" => $r->title,
	             "description" => $r->description,
	             "end" => $r->enddate,
	             "start" => $r->startdate,
	             "allday" =>$r->allDay
	         );
	     }

	     echo json_encode(array("events" => $data_events));
	     exit();
	 }
	 public function drop(){
	 	$title = $this->input->post("title");
		$startdate = $this->input->post("start");
		$enddate = $this->input->post("end");
		$eventid = $this->input->post("eventid");

		$data = array(
					'title'=>$title,
					'startdate'=>$startdate,
					'enddate'=>$enddate
					);
		$condition = array('id'=>$eventid);
		$update = $this->vet_model->update($data,$condition);

		if($update)
			echo json_encode(array('status'=>'success'));
		else
			echo json_encode(array('status'=>'failed'));
	 }
	 public function edit_event()
     {
          $eventid = intval($this->input->post("eventid"));
          $event = $this->vet_model->get_event($eventid);
          if($event->num_rows() == 0) {
               echo"Invalid Event";
               exit();
          }

          $event->row();

          /* Our vet_model data */
        $name = $this->input->post("name", TRUE);
	    $desc = $this->input->post("description", TRUE);

          $delete = intval($this->input->post("delete"));

          if(!$delete) {

               $this->vet_model->update_event($eventid, array(
                    "title" => $name,
                    "description" => $desc,
                    )
               );

          } else {
               $this->vet_model->delete_event($eventid);
          }

          redirect(site_url("vetclinic/sched"));
     }

      public function add_event() 
	{
	    /* Our calendar data */
	    $name = $this->input->post("name", TRUE);
	    $desc = $this->input->post("description", TRUE);
	    $start_date = $this->input->post("start", TRUE);
	    $end_date = $this->input->post("end", TRUE);

	    $this->vet_model->add_event(array(
	       "title" => $name,
	       "description" => $desc,
	       "startdate" => $start_date,
	       "enddate" => $end_date,
	       "allDay"=>'false'
	       )
	    );

	    redirect(site_url("vetclinic/sched"));
	}
	public function resetdate(){
		$title = $this->input->post("title");
		$startdate = $this->input->post("start");
		$enddate = $this->input->post("end");
		$eventid = $this->input->post("eventid");

		//$update = mysqli_query($con,"UPDATE schedule SET title='$title', startdate = '$startdate', enddate = '$enddate' where id='$eventid'");

		$data = array(
					'title'=>$title,
					'startdate'=>$startdate,
					'enddate'=>$enddate
					);
		$condition = array('id'=>$eventid);
		$update = $this->vet_model->update($data,$condition);

		if($update)
			echo json_encode(array('status'=>'success'));
		else
			echo json_encode(array('status'=>'failed'));
	}




	public function inventory(){
		$header_data['notif']=$this->vet_model->notification();
		if(isset($_POST['additem'])){
			
			$validate = array (
				array('field'=>'item_desc','label'=>'Description','rules'=>'trim|required|min_length[2]'),
				array('field'=>'item_cost','label'=>'Item Cost','rules'=>'trim|required|min_length[1]'),
				array('field'=>'qty_left','label'=>'Quantity','rules'=>'trim|required|min_length[1]'),
			);
			$this->form_validation->set_rules($validate);
			
			if ($this->form_validation->run()===FALSE){
				$data['errors'] = validation_errors();
			}
			
			else{
			
			$desc = $this->input->post("item_desc", TRUE);
			$price = $this->input->post("item_cost", TRUE);
			$qty = $this->input->post("qty_left", TRUE);
			if($qty<=0 || $price<=0){
				
				echo "<script type='text/javascript'>alert('Invalid Input');</script>";
				
			}
			else{
			$data = array(
					'itemid'=>null,
					'item_desc'=>$desc,
					'qty_left'=>$qty,
					'item_cost'=>$price
					);
			$this->itemstock->create($data);
			$last = $this->itemstock->c();
			$data = array(
					'itemid'=>$last,
					'qty'=>$qty,
					'serviceid'=>'SER-000',
					'action'=>'Add Product',
					'description'=>'Add Product: Item ' .$last .' - '  .$desc .' with ' .$qty . ' pc/s and price of ' .$price .' added ' ,
					'total_cost'=>$price
						);
		$this->itemhistory->create($data);}}
		}
		if(isset($_POST['itemuse'])){
			$option = $this->input->post("itemid", TRUE);
			$qty = $this->input->post("qty_used", TRUE);
			$visitid = $this->input->post("additemId", TRUE);
			$validate = array (
				array('field'=>'qty_used','label'=>'left','rules'=>'trim|required|min_length[1]')
			);
			$this->form_validation->set_rules($validate);
			
			$selector = 'item_cost';
			$condition = array('itemid'=>$option);
			$price = $this->itemstock->read($condition,$selector)[0]['item_cost'];
			$selector = 'item_desc';
			$condition = array('itemid'=>$option);
			$desc = $this->itemstock->read($condition,$selector)[0]['item_desc'];
			$selector = 'qty_left';
			$left = $this->itemstock->read($condition,$selector)[0]['qty_left'];
			
			if($qty>$left || $qty<=0){
				echo "<script type='text/javascript'>alert('Invalid Input');</script>";
				
			}
			else{
			$price = $price*$qty;
			$left = $left-$qty;

			$data = array('qty_left'=>$left);
			$this->itemstock->update($data,$condition);
			$this->vet_model->addItemUsed2($option,$visitid);

			$data = array(
					'itemid'=>$option,
					'qty'=>$qty,
					'serviceid'=>'SER-000',
					'action'=>'Sold Item',
					'description'=>'Sold Item: Item '.$option .' - '  .$desc . ' sold ' .$qty .' pc/s with total cost of ' .$price.'. Only ' .$left . ' pc/s left ' ,
					'total_cost'=>$price
					);
			$this->itemhistory->create($data);
			}
		}
		if(isset($_POST['addstock'])){
			
			$option = $this->input->post("itemid", TRUE);
			
			$addedstock = $this->input->post("add_stock", TRUE);
			$validate = array (
				array('field'=>'add_stock','label'=>'left','rules'=>'trim|required|min_length[1]')
			);
			$this->form_validation->set_rules($validate);
			
			$condition = array('itemid'=>$option);
			$selector = 'qty_left';
			$left = $this->itemstock->read($condition,$selector)[0]['qty_left'];
			$selector = 'item_desc';
			$desc = $this->itemstock->read($condition,$selector)[0]['item_desc'];
			$selector = 'item_cost';
			$price = $this->itemstock->read($condition,$selector)[0]['item_cost'];
			if($addedstock<=0){
				echo "<script type='text/javascript'>alert('Invalid Input');</script>";
			}
			else{
			$qty = $addedstock+$left;
			
			 $data = array(
					'itemid'=>$option,
					'qty_left'=>$qty
					);
			$this->itemstock->update($data,$condition);
			$data = array(
					'itemid'=>$option,
					'qty'=>$qty,
					'serviceid'=>'SER-000',
					'action'=>'Add Stock',
					'description'=>'Add Stock: Item '.$option .' - '.$desc .' added ' .$addedstock.' pc/s',
					'total_cost'=>$price
						);
			$this->itemhistory->create($data);
			}
		 }
		
			

		
		
		$data['stock'] = $this->itemstock->read();
		$data['itemhistory']=$this->itemhistory->read();
		$header_data['title'] = "Inventory";
		
		
		$this->load->view('include/header',$header_data);
		$this->load->view('clinic/inventory',$data);

		$this->load->view('include/footer');
	}



	public function upClient(){



		$data=array('clientid'=>$this->input->post('id'),
					'cname'=>$this->input->post('name'),
					'contactno'=>$this->input->post('cnum'),
					'email'=>$this->input->post('email'),
					'address'=>$this->input->post('addr'));
					$this->vet_model->editClient($data);
					
	}
}

?>