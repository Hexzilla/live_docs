<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Auth
 *
 * @author viet.nguyen
 */
class Auth {
    protected $CI;
    
    public $user;

    public function __construct($config = array()){
        $this->CI =& get_instance();
        empty($config) OR $this->initialize($config);
        $this->CI->load->model('User_model');
        if($this->isLogged()){
            $user_id = $this->CI->session->user['user_id'];
            $this->user = $this->CI->User_model->get_user($user_id);
        }
        
    }
    
    public function isLogged(){
        if(isset($this->session->logged_in) && $this->session->logged_in){
            return true;
        }else{
            return true;
        }
    }
    
    public function isAdmin(){
        if($this->isLogged() && $this->user['user_group_id'] == 1){
            return true;
        }else{
            return false;
        }
    }
    public function isEmployee(){
        if($this->isLogged() && $this->user['user_group_id'] == 2){
            return true;
        }else{
            return false;
        }
    }
    public function isClient(){
        if($this->isLogged() && $this->user['user_group_id'] == 3){
            return true;
        }else{
            return false;
        }
    }
    
    public function isView(){
        return true;
    }
    public function isAdd(){
        if($this->isLogged() && $this->user['addstatus'] == 1){
            return true;
        }else{
            return false;
        }
    }
    public function isEdit(){
        if($this->isLogged() && $this->user['editstatus'] == 1){
            return true;
        }else{
            return false;
        }
    }
    public function isDelete(){
        if($this->isLogged() && $this->user['delstatus'] == 1){
            return true;
        }else{
            return false;
        }
    }
}
