<?php

class Session extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('User_model');
    }

    public function index() {
        
    }
    public function login() {
        // load form helper and validation library
        $this->load->helper('form');
        $this->load->library('form_validation');
        // set validation rules
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            // validation not ok, send validation errors to the view
            $data['_view'] = 'session/login';
            $this->load->view('layouts/login',$data);
        } else {
            // set variables from the form
            $email = $this->input->post('email');
            $password = $this->input->post('password');
	         if(empty($email)){
				
					$data['error'] = 'Pease enter your username / email';
					$data['_view'] = 'session/login';
					$this->load->view('layouts/login',$data);
				
				 
			 } else if(empty($password)) {
				 
				 	$data['error'] = 'Pease enter password';
					$data['_view'] = 'session/login';
					$this->load->view('layouts/login',$data);
				 
				 
			 } else {
			      $myuser=$this->User_model->resolve_user_login($email,$password);

					if ((!empty($myuser)) && ($myuser['status']==1)) {
						$user_id = $this->User_model->get_user_id_from_email($email);
						$user = $this->User_model->get_user($user_id);
						$this->session->logged_in = (bool) true;
						$this->session->user = $user;
						$this->session->user_group_id = $myuser['user_group_id'];
						redirect('/');
						
					} 
					else if ((!empty($myuser)) && ($myuser['status']==0)) {
						$data['error'] = 'Wrong!!!!  User is not active';
						$data['_view'] = 'session/login';
						$this->load->view('layouts/login',$data);
					
					}
					else {
						// login failed
						$data['error'] = 'Wrong username or password.';
						$data['_view'] = 'session/login';
						$this->load->view('layouts/login',$data);
					}
			
			 }
        }
    }

    /**
     * logout function.
     * 
     * @access public
     * @return void
     */
    public function logout() {

        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            // remove session datas
            foreach ($_SESSION as $key => $value) {
                unset($_SESSION[$key]);
            }
            // user logout ok
            // redirect(base_url());
			 // user logout ok
            redirect('/login');
        } else {
            // there user was not logged in, we cannot logged him out,
            // redirect him to site root
            redirect('/');
        }
    }

}
