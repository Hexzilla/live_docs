<?php
class Home extends CI_Controller{
  function __construct()
    {
        parent::__construct();

            $user = $this->session->userdata("user");
		    if(!empty($user)) {
			    redirect("dashboard");
			}		
    }

    /*
     * Listing of company
     */
    function index()
    {
		$data=array();
		$this->load->view('home/home',$data);
	}
}