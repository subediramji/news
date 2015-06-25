<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('db_model');
        //$this->load->helper('url');
        $this->load->helper(array('form'));
    }

    function index() {
        if ($this->session->userdata('is_logged_in')) {
            redirect('dashboard/home');
        } else {
            $this->load->view('dashboard/login/login');
        }
    }
    function validate() {
        if (isset($_POST['rme'])) {

            $this->session->sess_expiration = 60 * 60 * 24 * 7;
            $this->session->sess_expire_on_close = FALSE;
        } else {
            $this->session->sess_expiration = 60 * 60;
            $this->session->sess_expire_on_close = FALSE;
        }
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $query = $this->db_model->validates($username, $password);        
        if ($query==!NULL) {
                      $get_id = $this->db_model->get_id($username, $password);
					
            foreach($get_id as $val)
                { 
                     $user = $val->username;
                     $fname = $val->first_name;
                     $lname = $val->last_name;
                     $email=$val->email;
                     $adminid=$val->id;
                    
            }
           $data = array(
                'user'=>$user,
                'firstname'=>$fname,
                'lastname'=>$lname,
                'email'=>$email,
                'admin_id' => $adminid,
                'is_logged_in' => true
            );
		//	print_r($data);
            $this->session->set_userdata($data); /*Here you can set the values in session */
            redirect('dashboard/home');   
        } else { // incorrect username or password
            $this->session->set_flashdata('msg', 'Username or Password Incorrect');
            $this->index();
        }
    }

    function register()
    {
        $this->load->library('form_validation');
                
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		$this->form_validation->set_rules('user', 'Username',  'required|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('email', 'Email',  'required|valid_email');
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('dashboard/login/login');
		}
		else
		{
                    $user = $this->input->post('user');
                    $fname = $this->input->post('fname');
                    $lname = $this->input->post('lname');
                    $email = $this->input->post('email');
                    $password = md5($this->input->post('password'));
                    $data = array('username'=>$user,'first_name'=>$fname,'last_name'=>$lname,
                        'email'=>$email,'password'=>$password);
                    $query = $this->db_model->register($data);
                    if($query==  TRUE)
                    {
                        $get_id = $this->db_model->get_id($this->input->post('user'), $this->input->post('password'));
					
            foreach($get_id as $val)
                { 
                     $user = $val->username;
                     $fname = $val->first_name;
                     $lname = $val->last_name;
                     $email=$val->email;
                     $adminid=$val->id;
                    
            }
           $data = array(
                'user'=>$user,
                'firstname'=>$fname,
                'lastname'=>$lname,
                'email'=>$email,
                'admin_id' => $adminid,
                'is_logged_in' => true
            );
		//	print_r($data);
            $this->session->set_userdata($data); /*Here you can set the values in session */
            redirect('dashboard/home');
                    }else{
                        $this->index();
                    }
                    
		}
        
        
        
        
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

}
