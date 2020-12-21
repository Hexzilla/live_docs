<?php

 
class Search extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Company_model');
    } 


    function index()
    {
   
		
	

        $data=array();
	
		$Search=$this->input->post('search');
		if(!empty($Search)){
     
      $this->db->select('company.companyid,company.Name,company.companyNo ,company.CompType,company.CompReg,G.customer_id,customers.Customer_name as customer, company.email,company.Managerid,comptypes.name as CTypeName');
		
        $this->db->from('company');
		$this->db->join('get_company AS G','G.customer_id = company.companyid','inner');
		
        //$this->db->join('customers', 'company.customer_id = customers.customer_id');
        $this->db->join('customers','G.customer_id = customers.customer_id','inner');
      //  $this->db->join('employees','company.Managerid=employees.employee_id','inner');
        $this->db->join('comptypes','company.CompType=comptypes.CompType','inner');
		// 
			$this->db->like('comptypes.name',$Search);
			 $this->db->or_like('company.name',$Search);
			$this->db->or_like('company.companyNo',$Search);	
			$this->db->or_like('company.CompReg',$Search);
			 $this->db->or_like('customers.Customer_name',$Search);
			$this->db->or_like('company.email',$Search);
			$this->db->group_by('G.customer_id');
	        $this->db->order_by('G.customer_id', 'ASC');  
			
			
		// }
		
        $data['company'] =$this->db->get()->result_array();



		$this->db->select('*');
		$this->db->from('customers');
		//if(!empty($Search)){
		$this->db->like('Customer_name',$Search);
		$this->db->or_like('Nationality',$Search);
		$this->db->or_like('email',$Search);
		$this->db->or_like('mobile',$Search);
		$this->db->or_like('IDcard',$Search);
		$this->db->or_like('Position',$Search);
		$this->db->or_like('Remarks',$Search);
	
		
		//}
		$data['customers'] =$this->db->get()->result_array();		



		
		
      $this->db->select('employees.employee_id,employees.companyid,employees.emp_name ,employees.email,employees.mobile,employees.Nationality,employees.position,employees.Ctype,employees.Remarks,company.Name as companyname, emptypes.ctname as empposition ');
		
        $this->db->from('employees');
        //$this->db->join('customers', 'company.customer_id = customers.customer_id');
        $this->db->join('emptypes','employees.Ctype= emptypes.Ctype','left');
        $this->db->join('company','employees.companyid=company.companyid','left');
      //  $this->db->join('comptypes','company.CompType=comptypes.CompType','inner');
    
		
		
		
		
		//if(!empty($Search)){
		$this->db->like('employees.emp_name',$Search);		
	    $this->db->or_like('employees.Nationality',$Search);
		$this->db->or_like('employees.email',$Search);
		$this->db->or_like('employees.mobile',$Search);
		$this->db->or_like('employees.position',$Search);
		$this->db->or_like('employees.Remarks',$Search);		
		$this->db->or_like('company.Name',$Search);	
		$this->db->or_like('emptypes.ctname',$Search);	
		 $this->db->order_by('employees.employee_id', 'ASC'); 
		//}
		$data['employees'] =$this->db->get()->result_array();					
		

		
		
		


$this->db->select('documents.docid,documents.docno,documents.issuedate ,documents.expiredate,documents.warndays,documents.comapnyid,documents.remarks,documents.doctype,documents.dtype,documents.dtype,doctype.name as docname,dcategory.name as category, company.name as compname');
//  $this->db->select('company.companyid,company.Name,company.companyNo ,company.CompType,company.CompReg,company.Customer_id,customers.Customer_name as customer,employees.emp_name as manager, company.email,company.Managerid,comptypes.name as CTypeName');

$this->db->from('documents');
//$this->db->join('customers', 'company.customer_id = customers.customer_id');
$this->db->join('doctype','documents.doctype = doctype.id','inner');
$this->db->join('dcategory','documents.dtype=dcategory.dtype','inner');
$this->db->join('company','documents.comapnyid=company.companyid','inner');

	//if(!empty($Search)){
		$this->db->like('doctype.name',$Search);
		$this->db->or_like('dcategory.name',$Search);
		$this->db->or_like('company.name',$Search);
		
		$this->db->or_like('documents.docno',$Search);
	//	$this->db->or_like('documents.issuedate',$Search);
//		$this->db->or_like('documents.expiredate',$Search);
		$this->db->or_like('documents.warndays',$Search);
		$this->db->or_like('documents.remarks',$Search);
		
		$this->db->or_like('dcategory.name',$Search);
		$this->db->or_like('documents.remarks',$Search);
		$this->db->or_like('documents.remarks',$Search);
		
		$this->db->order_by('documents.docid', 'ASC'); 
		
		//}
    $data['documents'] =$this->db->get()->result_array();			

	}

        
        $data['_view'] = 'search/index';
        $this->load->view('layouts/main',$data);
    }

        
}
