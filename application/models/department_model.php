<?php
class department_model extends CI_Model{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    //fetch department details from database
    function get_department_list($limit, $start)
    {
        $sql = 'select employee_id, emp_name from employees ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
}
?>