<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}
	
	function checkDuplicate($email)
	{
		$this->db->select('email');
		$this->db->from('users');
		$this->db->like('email', $email);
		return $this->db->count_all_results();
	}
	
	function insertUser($data)
	{
		if($this->db->insert('users', $data))
		{
			return  $this->db->insert_id();
		}
		else
		{
			return false;
		}
	}

	function fetchdata()
	{	
		$this->db->select ('id,first_name,last_name,phone,email,designation');
		$tabledata = $this->db->get('users');
		return $tabledata;
	}

	function login($password,$email){
		$this->db->select('password');
		$this->db->where('email' , $email );
		$details = $this->db->get('users');
		
		if($details->num_rows()==1){
			foreach($details->result() as $row){
				if(password_verify($password,$row->password)){
					return true;
				}else{
					return false;
				}
			}
		}
		else{
			return false;
		}
	}

}	

