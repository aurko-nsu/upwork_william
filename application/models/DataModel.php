<?php
class DataModel extends CI_Model 
{
	function save_date($data)
	{
		$this->db->insert('user',$data);
	}

	function find_email($email)
	{
		return $this->db->select('email')
						->from('user')
						->where('email' , $email)
						->get()->row();
	}

	function find_password($email)
	{
		return $this->db->select('password')
						->from('user')
						->where('email' , $email)
						->get()->row();
	}

	function user_status($email)
	{
		return $this->db->select('is_admin')
						->from('user')
						->where('email' , $email)
						->get()->row();
	}
}