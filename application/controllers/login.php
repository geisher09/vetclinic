<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('uname','Username','required', array('required' => 'Invalid Username or Password.'));
        if($this->form_validation->run()==TRUE)
            $this->form_validation->set_rules('pass','Password','callback_verifyLogin');
        if($this->form_validation->run()==FALSE){
            $this->load->view('clinic/login');
        }
        else {
            if($this->session->userdata('isDoctor')>0)
                echo 'DOCTOR!';
            else
                echo 'NOT DOCTOR!';
        }
	}
    
    public function verifyLogin($password) {
        $username = $this->input->post('uname');
        
        $condition = array('username'=>$username, 'password'=>$password);
        $this->load->model('user_model','User');
        $result_array = $this->User->read($condition);
        
        if($result_array){
            foreach($result_array as $row){
                $this->session->set_userdata('username', $row['username']);
                $this->session->set_userdata('isDoctor', $row['isDoctor']);
                /*$sess_data=array(
                    'username' => $row['username'],
                    'isDoctor' => $row['isDoctor']
                );*/
                //$this->session->set_userdata('logged_in', $sess_data);
            }
            return true;
        }
        else{
            $this->form_validation->set_message('verifyLogin','Invalid Username or Password.');
            return false;
        }
    }
    
    public function logout(){
        session_destroy();
        redirect(base_url());
    }
}
