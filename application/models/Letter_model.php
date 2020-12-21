<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Letter_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get letter by letterid
     */
    function get_letter($letterid)
    {
        return $this->db->get_where('letters',array('letterid'=>$letterid))->row_array();
    }
    
    /*
     * Get all letters count
     */
    function get_all_letters_count()
    {
        $this->db->from('letters');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all letters
     */
    function get_all_letters($params = array())
    {
        $this->db->order_by('letterid', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
       // return $this->db->get('letters')->result_array();
	   
	    $this->db->select('letters.letterid,letters.subject,letters.sdate ,letters.recipients,emailstatus.status as status');
		 $this->db->from('letters');
        //$this->db->join('customers', 'company.customer_id = customers.customer_id');
        $this->db->join('emailstatus', 'letters.statusid = emailstatus.statusid', 'inner');
       
        $datas = $this->db->get()->result_array();
        return $datas;
    }
        
    /*
     * function to add new letter
     */
    function add_letter($params)
    {
        $this->db->insert('letters',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update letter
     */
    function update_letter($letterid,$params)
    {
        $this->db->where('letterid',$letterid);
        return $this->db->update('letters',$params);
    }
    
    /*
     * function to delete letter
     */
    function delete_letter($letterid)
    {
        return $this->db->delete('letters',array('letterid'=>$letterid));
    }
}