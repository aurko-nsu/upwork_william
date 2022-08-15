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
		return $this->db->select('is_admin, id')
						->from('user')
						->where('email' , $email)
						->get()->row();
	}

	function get_user_detail($id)
	{
		return $this->db->select('*')
						->from('user')
						->where('id' , $id)
						->get()->row();
	}

	function get_all_user_detail()
	{
		return $this->db->select('*')
						->from('user')
						->get()->result();
	}
}