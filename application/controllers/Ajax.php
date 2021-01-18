<?php

class Ajax extends CI_Controller{
    function __construct()
    {
        parent::__construct();
       
    } 

    /*
     * Listing of company
     */
    function get_customer()
    {
		
                $q = strtolower($_GET["q"]);
				if (!$q) return;

				$sql = "select DISTINCT Customer_name as Customer_name from customers where Customer_name LIKE '%$q%'";
				$query = $this->db->query($sql)->result_array();
				if(!empty($query)){
					foreach ($query as $row){
						
						$cname = $row['Customer_name'];
					    echo "$cname\n";
						
						
					}
				}
				
				
    }
	
	
	
	
    function get_company()
    {
		
                $q = strtolower($_GET["q"]);
				if (!$q) return;

				$sql = "select DISTINCT Name as Name from company where Name LIKE '%$q%'";
				$query = $this->db->query($sql)->result_array();
				if(!empty($query)){
					foreach ($query as $row){
						
						$cname = $row['Name'];
					    echo "$cname\n";
						
						
					}
				}

				/*$sql = "select DISTINCT Customer_name from customers where Customer_name LIKE '%$q%'";
				$query = $this->db->query($sql)->result_array();
				if(!empty($query)){
					foreach ($query as $row){
						
						$cname = $row['Customer_name'];
					    echo "$cname\n";
						
						
					}
				}*/
				
				
    }	
	
	
	
	
	

   
    
}
